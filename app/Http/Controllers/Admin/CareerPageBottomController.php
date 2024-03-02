<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\CareerPageBottom;
use Illuminate\Http\Request;

class CareerPageBottomController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/pagebottom/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'careerpagebottom',
        ];
        $this->table = 'career_page_bottoms';
        $this->model = CareerPageBottom::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null, mixed $value = null)
    { 

        $others = [
            'title' => 'Home Page Slider', 
            'path' => $this->path
        ];

        $index = [
            'labels'=> ['Priority Serial', 'Title', 'Icon', 'Description', 'Image', 'Image Text','spicon', 'Sp Text','Sp Description','Sp Button Url', 'Status'],
            'columns'=> [
                ['data'=> 'checkbox', 'name'=> 'checkbox', 'orderable'=> false,'searchable'=> false, 'width'=> 3],
                ['data'=> 'serial', 'name'=> 'serial'],
                ['data'=> 'title', 'name'=> 'title'],
                ['data'=> 'icon', 'name'=> 'icon'],
                ['data'=> 'description', 'name'=> 'description'],
                ['data'=> 'image', 'name'=> 'image'],
                ['data'=> 'imagetext', 'name'=> 'imagetext'],
                ['data'=> 'spicon', 'name'=> 'spicon'],
                ['data'=> 'sptext', 'name'=> 'sptext'],
                ['data'=> 'spdes', 'name'=> 'spdes'],
                ['data'=> 'spbtnurl', 'name'=> 'spbtnurl'],
                ['data'=> 'status', 'name'=> 'status', 'orderable'=> false,'searchable'=> false],
                ['data'=> 'actions', 'name'=> 'actions', 'orderable'=> false,'searchable'=> false, 'className'=> 'text-end'],
            ] 
        ];

        $create = [
            ['label'=> 'Title', 'name'=> 'title', 'type'=> 'text', 'placeholder'=> 'Write title...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Icon', 'name'=> 'icon', 'type'=> 'text', 'placeholder'=> 'icon...', 'value'=> null, 'options'=> '*'],
            ['label'=> ' Image', 'name'=> 'image', 'type'=> 'file', 'placeholder'=> 1, 'value'=> "0", 'options'=> '(400x400)'],
            ['label'=> 'Short Descriptions', 'name'=> 'description', 'type'=> 'short_description', 
                'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> null
            ],
            ['label'=> 'Icon', 'name'=> 'imagetext', 'type'=> 'text', 'placeholder'=> 'write text...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Icon', 'name'=> 'spicon', 'type'=> 'text', 'placeholder'=> 'sp icon...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Text', 'name'=> 'sptext', 'type'=> 'text', 'placeholder'=> 'write text...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Deccription', 'name'=> 'spdes', 'type'=> 'text', 'placeholder'=> 'write Deccription...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Button Url', 'name'=> 'spbtnurl', 'type'=> 'text', 'placeholder'=> 'write Deccription...', 'value'=> null, 'options'=> '*'],
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
        return HelperClass::resourceDataView($this->model::query(), ['title', 'icon','description','imagetext','spicon','sptext', 'spdes','spbtnurl', 'serial'], ['image'], $this->path, $resources);
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
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, ['title','icon','description','imagetext','sptext','spicon', 'spdes','spbtnurl', 'serial'], ['image'], $this->path['asset'], $this->path, null, $resources);
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
        return HelperClass::resourceDataUpdate($this->table, $id, $request, ['title','icon','description','imagetext','sptext','spicon', 'spdes','spbtnurl', 'serial'], ['image'], $this->path['asset'], $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, ['image']);
    }
} 
