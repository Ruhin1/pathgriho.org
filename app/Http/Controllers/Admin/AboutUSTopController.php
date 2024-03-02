<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\AboutUSTop;
use Illuminate\Http\Request;

class AboutUSTopController extends Controller 
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/aboutus/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'about-us-top',
        ];
        $this->table = 'about_u_s_tops';
        $this->model = AboutUSTop::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null, mixed $value = null)
    { 

        $others = [
            'title' => 'AboutUs Page Top Section ', 
            'path' => $this->path
        ];

        $index = [
            'labels'=> ['Priority Serial', 'Title', 'Description', 'Status'],
            'columns'=> [
                ['data'=> 'checkbox', 'name'=> 'checkbox', 'orderable'=> false,'searchable'=> false, 'width'=> 3],
                ['data'=> 'serial', 'name'=> 'serial'],
                ['data'=> 'title', 'name'=> 'title'],
                ['data'=> 'description', 'name'=> 'description'],
                ['data'=> 'status', 'name'=> 'status', 'orderable'=> false,'searchable'=> false],
                ['data'=> 'actions', 'name'=> 'actions', 'orderable'=> false,'searchable'=> false, 'className'=> 'text-end'],
            ] 
        ];

        $create = [
            ['label'=> 'Title', 'name'=> 'title', 'type'=> 'text', 'placeholder'=> 'Write Faq Title...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Descriptions', 'name'=> 'description', 'type'=> 'short_description', 
                'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> null
            ],
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
        $resources = $this->resources('index');
        return HelperClass::resourceDataView($this->model::query(), ['title', 'description', 'serial'], null, $this->path, $resources);
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
            'description'=> 'required',
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, ['title', 'description', 'serial',], null, null, $this->path, null, $resources);
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
        $resources = $this->resources('index');
        return HelperClass::resourceDataUpdate($this->table, $id, $request, ['title', 'description', 'serial',], null, null, $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, null);
    }
} 
