<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\AboutUSBottom;
use Illuminate\Http\Request;


class AboutUSBottomController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/aboutusbottom/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'about-us-bottom',
        ];
        $this->table = 'about_u_s_bottoms';
        $this->model = AboutUSBottom::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null, mixed $value = null){ 

        $others = [
            'title' => 'About Us Bottom Section', 
            'path' => $this->path 
        ];

        $index = null;

        $create = [
            ['label'=> 'Youtube Iframe', 'name'=> 'iframe', 'type'=> 'text', 'placeholder'=> 'paste Youtube iframe code', 'value'=> null, 'options'=> '*'],

            ['label'=> 'Title', 'name'=> 'title', 'type'=> 'text', 'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> null],

            ['label'=> 'Descriptions', 'name'=> 'des', 'type'=> 'short_description', 
                'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> '*'
            ],
            ['label'=> 'Button text', 'name'=> 'btntext', 'type'=> 'text', 'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> '*'],

            ['label'=> 'Button Url', 'name'=> 'btnurl', 'type'=> 'text', 'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> '*'],
            
            ['label'=> 'font Awesome 5 version icon', 'name'=> 'bticon', 'type'=> 'text', 'placeholder'=> 'paste Font Awesome Icon', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Sort Title', 'name'=> 'bttext', 'type'=> 'text', 'placeholder'=> 'Write Hare...', 'value'=> null, 'options'=> '*'],
            
            ['label'=> 'Descriptions', 'name'=> 'btdes', 'type'=> 'short_description', 
            'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Button Text', 'name'=> 'btbtntxt', 'type'=> 'text', 'placeholder'=> 'Write Hare...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Button Url', 'name'=> 'btbtnurl', 'type'=> 'text', 'placeholder'=> 'Write Hare...', 'value'=> null, 'options'=> '*'],  
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
            'des' => 'required', 
            'btntext' => 'required', 
            'iframe' => 'required', 
            'bttext' => 'required', 
            'btdes' => 'required', 
            'btbtntxt' => 'required'
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, ['title','des','btntext','btnurl','iframe','bticon','bttext','btdes','btbtntxt','btbtnurl'], null, $this->path['asset'], $this->path, null, $resources);
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
        return HelperClass::resourceDataUpdate($this->table, $id, $request, ['title','des','btntext','btnurl','iframe','bticon','bttext','btdes','btbtntxt','btbtnurl'], null, $this->path['asset'], $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, null, null);
    }
}
 