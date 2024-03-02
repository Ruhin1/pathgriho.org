<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public $userArea;
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            // $role = Role::findByName('System Admin');
            // $role->permissions()->detach();
            // $permissions = Permission::all();
            // $role->syncPermissions($permissions);
            // $user = User::where('user_name', 'admin')->first();
            // $user->syncRoles($role);
            return $next($request);
        });
    }
}
