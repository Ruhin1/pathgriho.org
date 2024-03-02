<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminMenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $model = Role::query();
            $model->whereNotIn('name', ['System Admin']);
            return DataTables::eloquent($model)
                ->addColumn('checkbox', function ($row) {
                    $checkbox = '<div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input multi_checkbox" id="' . $row->id . '" name="multi_checkbox[]" value="' . $row->id . '"><label for="' . $row->id . '" class="custom-control-label"></label></div>';
                    return $checkbox;
                })
                ->addColumn('actions', function ($row) {
                    $actionBtn = '<div class="btn-group">
                        <a href="' . Route('admin.role.edit', $row->id) . '" class="btn btn-sm btn-warning border-0 px-10px fs-15 link-edit"><i class="far fa-pencil-alt"></i></a>
                        <a href="' . Route('admin.rolePermission.edit', $row->id) . '" class="btn btn-sm btn-success border-0 px-10px fs-15 link-edit"><i class="far fa-lock-alt"></i></a>';
                        if(Auth::user()->hasRole('System Admin')){
                            $actionBtn .= '<button type="button" class="btn btn-sm btn-danger border-0 px-10px fs-15 link-delete" data-url="' . Route('admin.role.destroy', $row->id) . '"><i class="far fa-trash-alt"></i></button>';
                        }
                        $actionBtn .= '</div>';
                    return $actionBtn;
                })
                ->rawColumns(['checkbox', 'actions'])
                ->make(true);
        }
        return view('admin.role.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'unique:roles,name']
        ]);
        Role::create(['name' => $request->name]);
        return redirect()->back()->withSuccessMessage('Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findById($id);
        return view('admin.role.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'unique:roles,name,' . $id]
        ]);
        $role = Role::findById($id);
        $role->name = $request->name;
        $role->save();
        return redirect()->back()->withSuccessMessage('Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        // Delete Multiple Items
        if ($request->id) {
            foreach ($request->id as $id) {
                $role = Role::findById($id);
                $role->syncPermissions([]);
                $role->delete();
            }
            return response()->json(['status' => 'success']);
        }

        // Delete Single Item
        $role = Role::findById($id);
        $role->syncPermissions([]);
        $role->delete();
        return response()->json(['status' => 'success']);
    }

    public function rolePermissionEdit($id)
    {
        $role = Role::findById($id);
        $decoded_permission_id = json_decode($role->permissions);
        $permission_id = array_column($decoded_permission_id, 'id');
        $root_menus = AdminMenu::root()->with(['children', 'actions', 'permission'])->where('status', 1)->orderBy('order', 'asc')->get();
        return view('admin.role.role_permission', compact('role', 'permission_id', 'root_menus'));
    }

    public function rolePermissionUpdate(Request $request, $id)
    {
        $role = Role::findById($id);
        $role->permissions()->detach();
        $permission_ids = $request->permission_id;

        if (!empty($permission_ids)) {
            $permissions = Permission::whereIn('id', $permission_ids)->get();
            $role->syncPermissions($permissions);
        }
        return redirect()->back()->withSuccessMessage('Updated Successfully!');
    }
}
