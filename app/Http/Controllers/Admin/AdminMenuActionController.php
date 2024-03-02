<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminMenuAction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class AdminMenuActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        if (request()->ajax()) {
            $model = AdminMenuAction::query()->where('admin_menu_id', $id)->with(['parent'])->latest();
            return DataTables::eloquent($model)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    $status = '<div class="form-check form-switch">';
                    if ($row->status == 1) {
                        $status .= '<input class="form-check-input change-status c-pointer" type="checkbox" data-url="' . route('admin.admin-menuAction.status', $row->id) . '" id="' . $row->id . '" checked>
                                <label class="form-check-label" for="' . $row->id . '"></label>';
                    } else {
                        $status .= '<input class="form-check-input c-pointer status" type="checkbox" data-url="' . route('admin.admin-menuAction.status', $row->id) . '" id="' . $row->id . '">
                    <label class="form-check-label" for="' . $row->id . '"></label>';
                    }
                    $status .= '</div>';
                    return $status;
                })
                ->addColumn('actions', function ($row) {
                    $actionBtn = '<div class="btn-group">
                                <a href="' . Route('admin.admin-menuAction.edit', $row->id) . '" class="btn btn-sm btn-warning border-0 px-10px fs-15 link-edit"><i class="far fa-pencil-alt"></i></a>
                                <button type="button" class="btn btn-sm btn-danger border-0 px-10px fs-15 link-delete" data-url="' . Route('admin.admin-menuAction.destroy', $row->id) . '"><i class="far fa-trash-alt"></i></button>';
                    $actionBtn .= '</div>';
                    return $actionBtn;
                })
                ->rawColumns(['status', 'actions'])
                ->make(true);
        }
        return view('admin.admin_menu_action.index', compact('id'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('admin.admin_menu_action.create', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'name'  => 'required',
            'route' => 'required', 'unique:admin_menu_actions,route'
        ]);

        $check_permission = Permission::where('name', $request->route)->first();
        if ($check_permission) {
            return redirect()->back()->withErrors('Action Already Added');
        }

        $permission = Permission::create(['name' => $request->route]);
        $role = Role::findByName('System Admin');
        $role->givePermissionTo($permission);


        AdminMenuAction::create([
            'permission_id' => $permission->id,
            'admin_menu_id' => $id,
            'name' => $request->name,
            'route' => $request->route,
            'status' => $request->status,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect()->back()->withSuccessMessage('Created Succcessfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $action = AdminMenuAction::findOrFail($id);
        return view('admin.admin_menu_action.edit', compact('action'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'  => 'required',
            'route' => ['required', 'unique:admin_menu_actions,route,' . $id]
        ]);

        $action = AdminMenuAction::findOrFail($id);
        if ($action->route !== $request->route) {
            $check_permission = Permission::where('name', $request->route)->first();
            if ($check_permission) {
                return redirect()->back()->withErrors('Action Already Added');
            }
        }

        Permission::where('id', $action->permission_id)->update(['name' => $request->route]);

        $action->name = $request->name;
        $action->route = $request->route;
        $action->status = $request->status;
        $action->updated_at = Carbon::now();
        $action->save();
        return redirect()->route('admin.admin-menuAction.index', $action->admin_menu_id)->withSuccessMessage('Updated Succcessfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $action = AdminMenuAction::findOrFail($id);
        // $permission = Permission::findById($action->permission_id)->delete();
        $action->delete();

        return response()->json(['status' => 'success']);
    }

    public function status($id)
    {
        $action = AdminMenuAction::findOrFail($id);
        if ($action->status == 1) {
            $action->status = 0;
        } else {
            $action->status = 1;
        }
        $action->save();
        return response()->json(['status' => 'success']);
    }
}
