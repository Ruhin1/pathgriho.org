<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\ContacUs;
use Illuminate\Http\Request;

class ContacUsController extends Controller 
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/contacus/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'contact-us', 
        ];
        $this->table = 'contac_us';
        $this->model = ContacUs::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null, mixed $value = null){ 

        $others = [
            'title' => 'Contac Us Page', 
            'path' => $this->path
        ];

        $index = null;

        $create = [
            ['label'=> 'Contact Title', 'name'=> 'mtitle', 'type'=> 'text', 'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> '*'],
            
            ['label'=> 'Short Descriptions', 'name'=> 'mdes', 'type'=> 'short_description', 
                'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> '*'
            ],

            ['label'=> 'Maps Title', 'name'=> 'gmtitle', 'type'=> 'text', 'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> '*'],

            ['label'=> 'Google Maps Iframe', 'name'=> 'gmiframe', 'type'=> 'text', 'placeholder'=> 'paste google maps iframe code...', 'value'=> null, 'options'=> '*'],      
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
            'mtitle'=> 'required', 
            'gmtitle'=> 'required', 
            'gmiframe'=> 'required', 

        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, ['mtitle','mdes','gmtitle','gmiframe'], null, $this->path['asset'], $this->path, null, $resources);
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
        return HelperClass::resourceDataUpdate($this->table, $id, $request, ['mtitle','mdes','gmtitle','gmiframe'], null, $this->path['asset'], $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, null, null);
    }
}