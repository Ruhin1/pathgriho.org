<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $model = User::query()->where('role', 1)->whereNotIn('id', [Auth::user()->id])->latest('id');
            $model->whereNotIn('user_name', ['admin']);
            return DataTables::eloquent($model)
            ->addColumn('checkbox', function($row){
                $checkbox = '<div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input multi_checkbox" id="'.$row->id.'" name="multi_checkbox[]" value="'.$row->id.'"><label for="'.$row->id.'" class="custom-control-label"></label></div>';
                    return $checkbox;
            })
            ->addColumn('image', function($row){
                $image = '<img class="lazyload" data-src="';
                if(file_exists($row->image)){
                    $image .= asset($row->image);
                } else {
                    $image .= asset('backend/images/avatar/default/user.jpg');
                }
                $image .= '" height="40" alt="'.$row->name.'">';
                    return $image;
            })
            ->addColumn('role', function($row){
                $role = '';
                foreach($row->getRoleNames() as $single){
                    $role .= $single;
                };
                return $role;
            })
            ->addColumn('status', function($row){
                $status = '<div class="text-nowrap">';
                if($row->status == 1){
                    $status .= '<span class="badge bg-success rounded-1 fs-12 fw-400">Active</span>';
                } else {
                    $status .= '<span class="badge bg-danger rounded-1 fs-12 fw-400">Deactive</span>';
                }
                $status .= '</div>';
                return $status;
            })
            ->addColumn('actions', function($row){
                $actionBtn = '<div class="btn-group">';
                    if(!in_array('System Admin',json_decode($row->getRoleNames())) && Auth::user()->hasRole('System Admin') || Auth::user()->can('admin.user.edit') && !in_array('System Admin',json_decode($row->getRoleNames()))){
                        $actionBtn .= '<a href="'.Route('admin.user.edit', $row->id).'" class="btn btn-sm btn-warning border-0 px-10px fs-15 link-edit"><i class="far fa-pencil-alt"></i></a>';
                    }

                    if(!in_array('System Admin',json_decode($row->getRoleNames())) && Auth::user()->hasRole('System Admin') || Auth::user()->can('admin.user.password') && !in_array('System Admin',json_decode($row->getRoleNames()))){
                        $actionBtn .= '<a href="'.Route('admin.user.password', $row->id).'" class="btn btn-sm btn-warning border-0 px-10px fs-15 bg-success"><i class="fal fa-key"></i></a>';
                    }

                    if(!in_array('System Admin',json_decode($row->getRoleNames())) && Auth::user()->hasRole('System Admin') || Auth::user()->can('admin.user.destroy') && !in_array('System Admin',json_decode($row->getRoleNames()))){
                        $actionBtn .= '<button type="button" class="btn btn-sm btn-danger border-0 px-10px fs-15 link-delete" data-url="'.Route('admin.user.destroy', $row->id).'"><i class="far fa-trash-alt"></i></button>';
                    }
                    $actionBtn .= '</div>';
                    return $actionBtn;
            })
            ->rawColumns(['checkbox','name','image','role','status','actions'])
            ->make(true);
        }
        return view('admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'user_name' => ['required', 'string', 'unique:users,user_name'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $role = Role::findById($request->role_id);

        $user = new User();
        // User Image
        $image = $request->file('image');
        if (isset($image)) {
            $ext = 'webp';
            $image_name = uniqid().'.'.$ext;
            $upload_path = 'media/user/';
            $image_path_name = $upload_path.$image_name;
            $file = Image::make($image);
            $file->resize(300, null, function ($constraint) {$constraint->aspectRatio();})->encode($ext, 100);
            $file->save($image_path_name);
            $user->image = $image_path_name;
        }
        $user->role = 1;
        $user->name = $request->name;
        $user->user_name = $request->user_name;
        $user->status = $request->status;
        $user->password = Hash::make($request->password);
        $user->save();

        $user->assignRole($role);
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
     * Display the specified resource.
     */
    public function changePassword(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.password', compact('user'));
    }

    public function passwordUpdate(Request $request, string $id)
    {
        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::findOrFail($id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('admin.user.index')->withSuccessMessage('Password Updated Successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('admin.user.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'user_name' => 'required','unique:users,user_name,'.$id
        ]);

        $role = Role::findById($request->role_id);
        $user = User::findOrFail($id);

        // User Image
        $image = $request->file('image');
        if (isset($image)) {
            $ext = 'webp';
            $image_name = uniqid().'.'.$ext;
            $upload_path = 'media/user/';
            $image_path_name = $upload_path.$image_name;
            $file = Image::make($image);
            $file->resize(300, null, function ($constraint) {$constraint->aspectRatio();})->encode($ext, 100);
            $file->save($image_path_name);
            if(file_exists($user->image)){
                unlink($user->image);
            }
            $user->image = $image_path_name;
        }
        $user->role = 1;
        $user->name = $request->name;
        $user->user_name = $request->user_name;
        $user->status = $request->status;
        $user->save();

        $user->syncRoles($role);
        return redirect()->back()->withSuccessMessage('Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        // Delete Multiple Items
        if($request->id){
            foreach($request->id as $id){
                $user = User::findOrFail($id);
                if(in_array('System Admin',json_decode($user->getRoleNames()))){
                    continue;
                }
                if(file_exists($user->image)){
                    unlink($user->image);
                }
                $user->delete();
            }
            return response()->json(['status'=>'success']);
        }

        // Delete Single Item
        $user = User::findOrFail($id);
        if(file_exists($user->image)){
            unlink($user->image);
        }
        $user->delete();
        return response()->json(['status'=>'success']);
    }
}
