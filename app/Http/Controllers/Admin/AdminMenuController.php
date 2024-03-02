<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminMenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\AdminMenuAction;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Yajra\DataTables\Facades\DataTables;

class AdminMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $model = AdminMenu::query()->latest();
            return DataTables::eloquent($model)
                ->filter(function ($query) {
                }, true)
                ->addColumn('parent_menu', function ($row) {
                    if ($row->parent) {
                        return $row->parent->name;
                    } else {
                        return 'Root Menu';
                    }
                })
                ->addColumn('status', function ($row) {
                    $status = '<div class="text-nowrap">';
                    if ($row->status == 1) {
                        $status .= '<span class="badge bg-success rounded-1 fs-12 fw-400">Active</span>';
                    } else {
                        $status .= '<span class="badge bg-danger rounded-1 fs-12 fw-400">Deactive</span>';
                    }
                    $status .= '</div>';
                    return $status;
                })
                ->addColumn('actions', function ($row) {
                    $actionBtn = '<div class="btn-group">
                                <a href="' . Route('admin.admin-menu.edit', $row->id) . '" class="btn btn-sm btn-warning border-0 px-10px fs-15 link-edit"><i class="far fa-pencil-alt"></i></a>
                                <a href="' . Route('admin.admin-menuAction.index', $row->id) . '" class="btn btn-sm btn-primary mw-fit border-0 px-10px fs-15" title="View Actions"><i class="fas fa-eye"></i></a>';
                    if ($row->delete == 1) {
                        $actionBtn .= '<button type="button" class="btn btn-sm btn-danger border-0 px-10px fs-15 link-delete" data-url="' . Route('admin.admin-menu.destroy', $row->id) . '"><i class="far fa-trash-alt"></i></button>';
                    }
                    $actionBtn .= '</div>';
                    return $actionBtn;
                })
                ->rawColumns(['checkbox', 'parent_menu', 'status', 'actions'])
                ->make(true);
        }
        return view('admin.admin_menu.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (request()->ajax()) {
            $parent_menus = AdminMenu::where('parent_id', request()->root_id)->where('id', '!=', request()->menu_id)->orderBy('order', 'asc')->get(['id', 'name']);
            return response()->json(['status' => 'success', 'parent_menus' => $parent_menus]);
        }

        $parent_menus = AdminMenu::root()->where('status', 1)->orderBy('order', 'asc')->get();
        return view('admin.admin_menu.create', compact('parent_menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->route) {
            $request->validate([
                'route' => 'unique:admin_menus,route',
            ]);
        }

        $request->validate([
            'name' => 'required',
        ]);

        if (is_null($request->route)) {
            $check_permission = Permission::where('name', $request->name)->first();
            if ($check_permission) {
                return redirect()->back()->withErrors('Menu Already Added');
            }
        } else {
            $check_permission = Permission::where('name', $request->route)->first();
            if ($check_permission) {
                return redirect()->back()->withErrors('Menu Already Added');
            }
        }

        $order = $request->order;

        if ($order == null) {
            if ($request->parent_id == null) {
                $menu_max_sl = AdminMenu::whereNull('parent_id')->orderBy('order', 'desc')->select(['order'])->first();
                $order = $menu_max_sl ? $menu_max_sl->order + 1 : 1;
            } else {
                $menu_max_sl = AdminMenu::where('parent_id', $request->parent_id)->orderBy('order', 'desc')->select(['order'])->first();
                $order = $menu_max_sl ? $menu_max_sl->order + 1 : 1;
            }
        }

        if (is_null($request->route)) {
            $permission = Permission::create(['name' => $request->name]);
        } else {
            $permission = Permission::create(['name' => $request->route]);
        }
        $role = Role::findByName('System Admin');
        $role->givePermissionTo($permission);

        AdminMenu::create([
            'permission_id' => $permission->id,
            'name'          => $request->name,
            'icon'          => $request->icon,
            'parent_id'     => $request->parent_id,
            'route'         => $request->route,
            'order'         => $order,
            'status'        => $request->status,
            'delete'        => 1,
        ]);

        return redirect()->back()->withSuccessMessage('Created Successfully!');
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
        if (request()->ajax()) {
            $parent_menus = AdminMenu::where('parent_id', request()->root_id)->where('id', '!=', request()->menu_id)->orderBy('order', 'asc')->get(['id', 'name']);
            return response()->json(['status' => 'success', 'parent_menus' => $parent_menus]);
        }

        $menu = AdminMenu::findOrFail($id);
        $root_menus = AdminMenu::root()->with(['children'])->where('id', '!=', $menu->id)->where('status', 1)->orderBy('order', 'asc')->get();
        if ($menu->parent_id) {
            $root_menu_ids = array_column(json_decode($root_menus), 'id');
            if (!in_array($menu->parent_id, $root_menu_ids)) {
                $parent_menus = 1;
                $parent_menu = AdminMenu::where('id', $menu->parent_id)->where('status', 1)->orderBy('order', 'asc')->first();
                $selected_root_menu_id = $root_menus->where('id', $parent_menu->parent_id)->first()->id;
            } else {
                $parent_menus = 0;
                $selected_root_menu_id = '';
            }
        } else {
            $parent_menus = 0;
            $selected_root_menu_id = '';
        }

        return view('admin.admin_menu.edit', compact('menu', 'root_menus', 'parent_menus', 'selected_root_menu_id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'order' => 'required',
        ]);

        $menu = AdminMenu::findOrFail($id);

        if ($menu->name !== $request->name) {
            $check_permission = Permission::where('name', $request->name)->first();
            if ($check_permission) {
                return redirect()->back()->withErrors('Menu Already Added');
            }
            Permission::where('id', $menu->permission_id)->update(['name' => $request->name]);
        }

        $menu->parent_id = $request->parent_id;
        $menu->name = $request->name;
        $menu->icon = $request->icon;
        $menu->route = $request->route;
        $menu->order = $request->order;
        $menu->status = $request->status;
        $menu->save();

        return redirect()->back()->withSuccessMessage('Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = AdminMenu::findOrFail($id);
        $actions = AdminMenuAction::where('admin_menu_id', $id)->get();
        foreach ($actions as $action) {
            Permission::findById($action->permission_id)->delete();
        }
        AdminMenuAction::where('admin_menu_id', $id)->delete();
        Permission::findById($menu->permission_id)->delete();
        $menu->delete();

        return response()->json(['status' => 'success']);
    }
}
