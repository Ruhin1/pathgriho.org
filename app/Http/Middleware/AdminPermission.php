<?php

namespace App\Http\Middleware;

use App\Models\AdminMenu;
use App\Models\AdminMenuAction;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Symfony\Component\HttpFoundation\Response;

class AdminPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check() && Auth::user()->role == 1){
            $currentRouteName = $request->route()->getName();
            $menu = AdminMenu::where('route', $currentRouteName)->first();
            if(!is_null($menu)){
                $currentRoutePermission = Permission::findById($menu->permission_id);
            } else {
                $menuAction = AdminMenuAction::where('route', $currentRouteName)->first();
                if($menuAction){
                    $currentRoutePermission = Permission::findById($menuAction->permission_id);
                } else {
                    $currentRoutePermission = NULL;
                }
            }

            if (!is_null($currentRoutePermission)) {
                if (auth()->user()->can($currentRoutePermission->name)) {
                    return $next($request);
                } else {
                    if($request->ajax()){
                        return response()->json(['status'=>'error']);
                    }
                    return redirect()->back()->withErrors('You do not have Access to do this action!');
                }
            }

            return $next($request);
        } else {
            return redirect()->route('admin.login.index');
        }
    }
}
