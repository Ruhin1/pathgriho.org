<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\AboutExternalLink;
use Illuminate\Http\Request;

class AboutExternalLinkController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/about-external-link/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'about-external-link',
        ];
        $this->table = 'about_external_links';
        $this->model = AboutExternalLink::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null)
    { 

        $others = [
            'title' => 'Home Page Slider', 
            'path' => $this->path
        ];

        $index = [
            'labels'=> ['Priority Serial', 'Title', 'Link/Url', 'Status'],
            'columns'=> [
                ['data'=> 'checkbox', 'name'=> 'checkbox', 'orderable'=> false,'searchable'=> false, 'width'=> 3],
                ['data'=> 'serial', 'name'=> 'serial'],
                ['data'=> 'title', 'name'=> 'title'],
                ['data'=> 'link', 'name'=> 'link'],
                ['data'=> 'status', 'name'=> 'status', 'orderable'=> false,'searchable'=> false],
                ['data'=> 'actions', 'name'=> 'actions', 'orderable'=> false,'searchable'=> false, 'className'=> 'text-end'],
            ] 
        ];

        $create = [
            ['label'=> 'Title', 'name'=> 'title', 'type'=> 'text', 'placeholder'=> 'Write Slider...', 'value'=> null, 'options'=> null],
            ['label'=> 'Link / Url', 'name'=> 'link', 'type'=> 'text', 'placeholder'=> 'http://www.', 'value'=> null, 'options'=> null],
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
        return HelperClass::resourceDataView($this->model::query(), ['title', 'serial', 'link'], null, $this->path, $resources);
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
        $request->validate(['title'=> 'required|max:254', 'link'=> 'required|max:254']);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, ['title', 'serial', 'link'], null, null, $this->path, null, $resources);
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
        $request->validate(['title'=> 'required|max:254', 'link'=> 'required|max:254']);
        $resources = $this->resources('index');
        return HelperClass::resourceDataUpdate($this->table, $id, $request, ['title', 'serial', 'link'], null, null, $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, null);
    }
}