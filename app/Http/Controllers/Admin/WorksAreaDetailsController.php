<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\WorksAreaDetails;
use Illuminate\Http\Request;

class WorksAreaDetailsController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/works-area-details/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'works-area-details',
        ];
        $this->table = 'works_area_details';
        $this->model = WorksAreaDetails::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null)
    { 

        $others = [
            'title' => 'Footer Items Setup', 
            'path' => $this->path
        ];

        $index = [
            'labels'=> ['Priority Serial', 'Title', 'Showing On Page', 'Status'],
            'columns'=> [
                ['data'=> 'checkbox', 'name'=> 'checkbox', 'orderable'=> false,'searchable'=> false, 'width'=> 3],
                ['data'=> 'serial', 'name'=> 'serial'],
                ['data'=> 'title', 'name'=> 'title'],
                ['data'=> 'type', 'name'=> 'type'],
                ['data'=> 'status', 'name'=> 'status', 'orderable'=> false,'searchable'=> false],
                ['data'=> 'actions', 'name'=> 'actions', 'orderable'=> false,'searchable'=> false, 'className'=> 'text-end'],
            ] 
        ];

        $create = [
            ['label'=> 'Items Type', 'name'=> 'type', 'type'=> 'select', 'placeholder'=> 'Select From Here...', 'value'=> null, 'options'=> [
                ['label'=> 'Home Page', 'value'=> 'Home Page'],
                ['label'=> 'About Page', 'value'=> 'About Page'],
                ['label'=> 'Contact Us Page', 'value'=> 'Contact Us Page'],
            ]],
            ['label'=> 'Title', 'name'=> 'title', 'type'=> 'text', 'placeholder'=> 'Write ...', 'value'=> null, 'options'=> '(*)'],
            ['label'=> 'Short Descriptions', 'name'=> 'short_description', 'type'=> 'text', 'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> '(*)'],
            ['label'=> 'Button Title', 'name'=> 'btn_title', 'type'=> 'text', 'placeholder'=> 'e.g. Sponsor Now', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Button Link', 'name'=> 'btn_link', 'type'=> 'text', 'placeholder'=> 'e.g. https://www.example.com', 'value'=> "0", 'options'=> '(*)'], 
            ['label'=> 'Priority Serial', 'name'=> 'serial', 'type'=> 'number', 'placeholder'=> 1, 'value'=> "0", 'options'=> null], 
            ['label'=> 'Svg Icon', 'name'=> 'icon', 'type'=> 'text', 'placeholder'=> 'e.g. <svg xmnls="https://www.w3.org/"></svg>', 'value'=> null, 'options'=> 'font-awesome (*free) icon or svg with fixed (*height & *width)'], 
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
        return HelperClass::resourceDataView($this->model::query(), ['title', 'serial', 'type'], null, $this->path, $resources);
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
            'short_description'=> 'required',
            'btn_title'=> 'required',
            'btn_link'=> 'required',
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, ['title', 'short_description', 'btn_title', 'btn_link', 'type', 'icon', 'serial'], null, null, $this->path, null, $resources);
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
            'title'=> 'required',
            'short_description'=> 'required',
            'btn_title'=> 'required',
            'btn_link'=> 'required',
        ]);
        
        $resources = $this->resources('index');
        return HelperClass::resourceDataUpdate($this->table, $id, $request, ['title', 'short_description', 'btn_title', 'btn_link', 'type', 'icon', 'serial'], null, null, $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, null);
    }
} 