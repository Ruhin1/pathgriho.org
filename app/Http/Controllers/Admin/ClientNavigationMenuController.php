<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\ClientNavigationMenu;
use Illuminate\Http\Request;

class ClientNavigationMenuController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = 'client-navigation-menu';
        $this->table = 'client_navigation_menus';
        $this->model = ClientNavigationMenu::class;
     }

    protected function resources(string|NULL $type = null, mixed $value = null){
        $parent_menus = $this->model::where('parent_id', null)->where('child_id', null)->latest('serial')->get();

        $menus = [];
        foreach($parent_menus as $parent_menu){
            $menus[] = ['value'=> $parent_menu->id, 'label'=> $parent_menu->name];
        }

        $others = [
            'title' => 'Client Navigation Menu', 
            'path' => [
                'view' => $this->path, 
                'route'=> $this->path
            ],
        ];

        $index = [
            'labels'=> ['Priority Serial', 'Name', 'Status'],
            'columns'=> [
                ['data'=> 'checkbox', 'name'=> 'checkbox', 'orderable'=> false,'searchable'=> false, 'width'=> 3],
                ['data'=> 'serial', 'name'=> 'serial'],
                ['data'=> 'name', 'name'=> 'name'],
                ['data'=> 'status', 'name'=> 'status', 'orderable'=> false,'searchable'=> false],
                ['data'=> 'actions', 'name'=> 'actions', 'orderable'=> false,'searchable'=> false, 'className'=> 'text-end'],
            ] 
        ];

        $create = [
            ['label'=> 'Name', 'name'=> 'name', 'type'=> 'text', 'placeholder'=> 'Write Menu Name...', 'value'=> $value, 'options'=> null],
            ['label'=> 'Route/Link Name/Url', 'name'=> 'route', 'type'=> 'text', 
                'placeholder'=> 'https://www.example.io / admin.route.index', 'value'=> null, 'options'=> null
            ],
            ['label'=> 'Priority Serial', 'name'=> 'serial', 'type'=> 'number', 'placeholder'=> 1, 'value'=> "0", 'options'=> null],
            ['label'=> 'Parent Menu', 'name'=> 'parent_id', 'type'=> 'select', 'placeholder'=> 'e.g Home', 'value'=> $value, 
                'options'=> $menus
            ],
            ['label'=> 'Child Menu', 'name'=> 'child_id', 'type'=> 'select', 'placeholder'=> 'e.g About', 'value'=> $value, 
                'options'=> [
                     
                ]
            ],
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
        return HelperClass::resourceDataView($this->model::query(), ['title', 'serial'], null, $this->path, $resources);
    }

    // Show the form for creating a new resource.
    public function create()
    {
        $resources = $this->resources('create');
        return view("admin.{$this->path}.create", compact('resources'));
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required', 
            'route'=> 'required', 
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, ['name', 'serial', 'parent_id', 'child_id', 'route'], null, null, $this->path, $resources);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(request()->ajax()){
            $parent_id = request()->id;
            return $child_menus = $this->model::select('id', 'name')->where('parent_id', $parent_id)->latest('serial')->get();
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
            'name'=> 'required', 
            'route'=> 'required', 
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataUpdate($this->table, $id, $request, ['name', 'serial', 'parent_id', 'child_id', 'route'], null, null, $this->path, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, null);
    }
}