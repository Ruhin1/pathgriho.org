<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\ContactUsMain;
use Illuminate\Http\Request;

class ContactUsMainController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/contactusmain/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'contact-main',
        ];
        $this->table = 'contact_us_mains';
        $this->model = ContactUsMain::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null, mixed $value = null){ 

        $others = [
            'title' => 'Contac Us Contact Section', 
            'path' => $this->path
        ];

        $index = null;

        $create = [
            ['label'=> 'Title', 'name'=> 'title', 'type'=> 'text', 'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Sort Description', 'name'=> 'sdes', 'type'=> 'text', 'placeholder'=> 'Write Sort Description one line...', 'value'=> null, 'options'=> null],
            ['label'=> 'Address', 'name'=> 'address', 'type'=> 'text', 'placeholder'=> 'Write hare...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Email', 'name'=> 'email', 'type'=> 'email', 'placeholder'=> 'Write hare...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Phone Number', 'name'=> 'phone', 'type'=> 'text', 'placeholder'=> 'Write hare...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Facebook Url', 'name'=> 'furl', 'type'=> 'text', 'placeholder'=> 'Write hare...', 'value'=> null, 'options'=> null],
            ['label'=> 'Twitter Url', 'name'=> 'turl', 'type'=> 'text', 'placeholder'=> 'Write hare...', 'value'=> null, 'options'=> null],
            ['label'=> 'Youtube Url', 'name'=> 'yurl', 'type'=> 'text', 'placeholder'=> 'Write hare...', 'value'=> null, 'options'=> null],
            ['label'=> 'Instagram Url', 'name'=> 'iurl', 'type'=> 'text', 'placeholder'=> 'Write hare...', 'value'=> null, 'options'=> null],
            
        ]; 

        $edit = $create;

        if($type == 'index'){
            return [
                ...$others,
                'items' => $index, 
            ];
        }

        if($type == 'create'){
            return [
                ...$others,
                'items' => $create, 
            ];
        }

        if($type == 'edit'){
            return [
                ...$others,
                'items' => $edit, 
            ];
        }

        if($type == 'undefined'){
            return [
                ...$others, 
            ];
        }

        return [
            ...$others,
            'index' => $index,
            'create' => $create,
            'edit' => $edit
        ];
    }
    // Return the Indexing page
    public function index()
    {
        $resources = $this->resources('edit');
        $data = $this->model::latest('id')->first();

        if($data){
            return view("admin.{$this->path['view']}.edit", compact('data', 'resources'));
        }
        return view("admin.{$this->path['view']}.create", compact('data', 'resources'));

    }

    // Show the form for creating a new resource.
    public function create()
    {
        $resources = $this->resources('create');
        return view("admin.{$this->path['view']}.create", compact('resources'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            
            'title'=> 'required', 
            'address'=> 'required', 
            'email'=> 'required', 
            'phone'=> 'required', 
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, ['title','sdes','address','email','phone','furl','turl','yurl','iurl'], null, $this->path['asset'], $this->path, null, $resources);
    }
 
    // Display the specified resource.
    public function show(string $id)
    {
        if(request()->ajax()){
            return null;
        }
    }

    // Show the form for editing the specified resource.
    public function edit(string $id) 
    {
        $resources = $this->resources('edit');
        return HelperClass::resourceDataEdit($this->table, $id, $this->path, $resources);
    }

    // Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        $resources = $this->resources('index');
        return HelperClass::resourceDataUpdate($this->table, $id, $request, ['title','sdes','address','email','phone','furl','turl','yurl','iurl'], null, $this->path['asset'], $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, null, null);
    }
}
