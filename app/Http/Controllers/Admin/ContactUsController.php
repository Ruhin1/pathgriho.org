<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/contact/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'contact',
        ];
        $this->table = 'contact_us';
        $this->model = ContactUs::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null)
    { 

        $others = [
            'title' => 'About Page Setup', 
            'path' => $this->path
        ];

        $index = null;

        $create = [
            ['label'=> 'Heading', 'name'=> 'heading', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Main Title', 'name'=> 'title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Main Description', 'name'=> 'description', 'type'=> 'description', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Form Left Headline', 'name'=> 'form_heading', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Form Right Heading', 'name'=> 'form_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Form Left Description', 'name'=> 'form_description', 'type'=> 'short_description', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Map Heading', 'name'=> 'map_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'],  
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
        $data = $this->model::latest('id')->first();
        
        if($data){
            $resources = $this->resources('edit');
            return view("admin.{$this->path['view']}.edit", compact("resources", "data"));
        }

        $resources = $this->resources('create');
        return view("admin.{$this->path['view']}.create", compact('resources'));
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
            'heading'=> 'required',
            'title'=> 'required',
            'description'=> 'required',
            'form_heading'=> 'required',
            'form_title'=> 'required',
            'form_description'=> 'required',
            'map_title'=> 'required',
        ]);

        $resources = $this->resources('edit');
        return HelperClass::resourceDataStore($this->table, $request, [
            'heading',
            'title',
            'description',
            'form_heading',
            'form_title',
            'form_description',
            'map_title', 
        ], null, null, $this->path, null, $resources);
    }

    /**
     * Display the specified resource.
     */
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
        $request->validate([
            'heading'=> 'required',
            'title'=> 'required',
            'description'=> 'required',
            'form_heading'=> 'required',
            'form_title'=> 'required',
            'form_description'=> 'required',
            'map_title'=> 'required',
        ]);
        
        $resources = $this->resources('index');
        return HelperClass::resourceDataUpdate($this->table, $id, $request, [
            'heading',
            'title',
            'description',
            'form_heading',
            'form_title',
            'form_description',
            'map_title', 
        ], null, null, $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, null);
    }
} 