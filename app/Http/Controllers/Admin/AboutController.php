<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/about/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'about',
        ];
        $this->table = 'abouts';
        $this->model = About::class;
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
            ['label'=> 'Mission Title', 'name'=> 'mission_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Mission Description', 'name'=> 'mission_description', 'type'=> 'textarea', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Vision Title', 'name'=> 'vision_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Vision Description', 'name'=> 'vision_description', 'type'=> 'textarea', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'About Title', 'name'=> 'about_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'About Description', 'name'=> 'about_description', 'type'=> 'description', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Story Title', 'name'=> 'story_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Story Description', 'name'=> 'story_description', 'type'=> 'description', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Video Title', 'name'=> 'video_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> null], 
            ['label'=> 'Video Description', 'name'=> 'video_description', 'type'=> 'textarea', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> null], 
            ['label'=> 'Video iFrame', 'name'=> 'video_iframe', 'type'=> 'text', 'placeholder'=> '<iframe src="https://www."></iframe>', 'value'=> null, 'options'=> 'e.g. embed iframe'], 
            ['label'=> 'Button Title', 'name'=> 'btn_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
            ['label'=> 'Button Link', 'name'=> 'btn_link', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '(*)'], 
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

        $resources = $this->resources('edit');
        return HelperClass::resourceDataStore($this->table, $request, [
            'heading',
            'title',
            'description',
            'mission_title',
            'mission_description',
            'vision_title',
            'vision_description',
            'about_title',
            'about_description',
            'story_title',
            'story_description',
            'video_title',
            'video_description',
            'video_iframe',
            'btn_title',
            'btn_link',
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
            'mission_title'=> 'required',
            'mission_description'=> 'required',
            'vision_title'=> 'required',
            'vision_description'=> 'required',
        ]);
        
        $resources = $this->resources('index');
        return HelperClass::resourceDataUpdate($this->table, $id, $request, [
            'heading',
            'title',
            'description',
            'mission_title',
            'mission_description',
            'vision_title',
            'vision_description',
            'about_title',
            'about_description',
            'story_title',
            'story_description',
            'video_title',
            'video_description',
            'video_iframe',
            'btn_title',
            'btn_link',
        ], null, null, $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, null);
    }
} 