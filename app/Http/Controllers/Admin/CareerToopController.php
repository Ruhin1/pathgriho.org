<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\CareerToop;
use Illuminate\Http\Request;

class CareerToopController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/careertop/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'career-top',
        ];
        $this->table = 'career_toops';
        $this->model = CareerToop::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null, mixed $value = null){ 

        $others = [
            'title' => 'Career Top Section', 
            'path' => $this->path
        ]; 

        $index = null;

        $create = [
            ['label'=> 'Title', 'name'=> 'title', 'type'=> 'text', 'placeholder'=> 'Write Title...', 'value'=> null, 'options'=> '*'],

            ['label'=> 'Short Descriptions', 'name'=> 'description', 'type'=> 'short_description', 
                'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> '*',
            ],

            ['label'=> 'Banner Image', 'name'=> 'image', 'type'=> 'file', 'placeholder'=> 1, 'value'=> null, 'options'=> '(1920x1080)'],

            ['label'=> 'Priority Serial', 'name'=> 'serial', 'type'=> 'number', 'placeholder'=> 1, 'value'=> "0", 'options'=> null], 
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
            'image'=> 'required|file',
            'title'=> 'required', 
            'description' =>'required',
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, ['title','description'],['image'], $this->path['asset'], $this->path, null, $resources);
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
        return HelperClass::resourceDataUpdate($this->table, $id, $request, ['title','description'],  ['image'], $this->path['asset'], $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, ['image'], null);
    }
}