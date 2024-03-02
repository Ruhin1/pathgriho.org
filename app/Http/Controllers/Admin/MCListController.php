<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\MCList;
use Illuminate\Http\Request;

class MCListController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/mclist/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'mclist',
        ];
        $this->table = 'm_c_lists';
        $this->model = MCList::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null, mixed $value = null)
    { 

        $others = [
            'title' => 'MANAGEMENT COMMITTEE', 
            'path' => $this->path
        ];

        $index = [
            'labels'=> ['Priority Serial', 'Name', 'Position', 'Image', 'Status'],
            'columns'=> [
                ['data'=> 'checkbox', 'name'=> 'checkbox', 'orderable'=> false,'searchable'=> false, 'width'=> 3],
                ['data'=> 'serial', 'name'=> 'serial'],
                ['data'=> 'name', 'name'=> 'name'],
                ['data'=> 'position', 'name'=> 'position'],
                ['data'=> 'image', 'name'=> 'image'],
                ['data'=> 'status', 'name'=> 'status', 'orderable'=> false,'searchable'=> false],
                ['data'=> 'actions', 'name'=> 'actions', 'orderable'=> false,'searchable'=> false, 'className'=> 'text-end'],
            ] 
        ];

        $create = [
            ['label'=> 'Name', 'name'=> 'name', 'type'=> 'text', 'placeholder'=> 'Write Name...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Position', 'name'=> 'position', 'type'=> 'text', 'placeholder'=> 'Write Position Name...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Image', 'name'=> 'image', 'type'=> 'file', 'placeholder'=> 1, 'value'=> "0", 'options'=> '(200x200)'],
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
        return HelperClass::resourceDataView($this->model::query(), ['serial','name','position'], ['image'], $this->path, $resources);
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
            'name'=>'required',
            'position'=>'required',
            'image'=> 'required|file',
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, ['serial', 'name','position'], ['image'], $this->path['asset'], $this->path, null, $resources);
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
        return HelperClass::resourceDataUpdate($this->table, $id, $request, ['serial', 'name','position'], ['image'], $this->path['asset'], $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, ['image']);
    }
} 
