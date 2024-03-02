<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\NewsAndArticle;
use Illuminate\Http\Request;

class NewsAndArticleController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/news-and-article/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'news-and-article',
        ];
        $this->table = 'news_and_articles';
        $this->model = NewsAndArticle::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null){ 

        $others = [
            'title' => 'Blog', 
            'path' => $this->path
        ];

        $index = [
            'labels'=> ['Priority Serial', 'Title', 'Thumbnail Image', 'Status'],
            'columns'=> [
                ['data'=> 'checkbox', 'name'=> 'checkbox', 'orderable'=> false,'searchable'=> false, 'width'=> 3],
                ['data'=> 'serial', 'name'=> 'serial'],
                ['data'=> 'title', 'name'=> 'title'],
                ['data'=> 'image', 'name'=> 'image'],
                ['data'=> 'status', 'name'=> 'status', 'orderable'=> false,'searchable'=> false],
                ['data'=> 'actions', 'name'=> 'actions', 'orderable'=> false,'searchable'=> false, 'className'=> 'text-end'],
            ] 
        ];

        $create = [
            ['label'=> 'Title', 'name'=> 'title', 'type'=> 'text', 'placeholder'=> 'Write Slider...', 'value'=> null, 'options'=> null],
            ['label'=> 'Thumbnail Image', 'name'=> 'image', 'type'=> 'file', 'placeholder'=> 'Select here...', 'value'=> null, 'options'=> '(400x600)'],
            ['label'=> 'News Publishing Type', 'name'=> 'type', 'type'=> 'select', 'placeholder'=> 'Select One', 'value'=> null, 
                'options'=> [
                    ['label'=> 'Home Page (featured)', 'value'=> 'featured'],
                    ['label'=> 'News & Articles Dedicated Page', 'value'=> 'normal'],
                 ]
            ],
             ['label'=> 'Short Descriptions', 'name'=> 'short_description', 'type'=> 'short_description', 
                'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> null
            ],
            ['label'=> 'Long Descriptions', 'name'=> 'description', 'type'=> 'description', 
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
        return HelperClass::resourceDataView($this->model::query(), ['title', 'serial', 'author'], ['image'], $this->path, $resources);
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
            'short_description'=> 'required',
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, ['title', 'short_description', 'description', 'slug', 'type', 'serial'], ['image'], $this->path['asset'], $this->path, null, $resources);
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
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataUpdate($this->table, $id, $request, ['title', 'short_description', 'description', 'slug', 'type', 'serial'], ['image'], $this->path['asset'], $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, ['image'], null);
    }
}