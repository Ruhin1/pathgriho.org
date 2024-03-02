<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\WorkoutSection;
use Illuminate\Http\Request;

class WorkoutSectionController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/workout-section/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'workout-section',
        ];
        $this->table = 'workout_sections';
        $this->model = WorkoutSection::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null, mixed $value = null){ 

        $others = [
            'title' => 'Testimonial', 
            'path' => $this->path
        ];
        

        $index = null;

        $create = [
            ['label'=> 'First Heading', 'name'=> 'first_heading', 'type'=> 'text', 'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'First Title', 'name'=> 'first_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'First Button Title', 'name'=> 'first_btn_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'First Btn Link', 'name'=> 'first_btn_link', 'type'=> 'text', 'placeholder'=> 'e.g. http://www. / client.blog.create', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Primary Button Title', 'name'=> 'primary_btn_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Primary Button Link', 'name'=> 'primary_btn_link', 'type'=> 'text', 'placeholder'=> 'e.g. http://www. / client.blog.create', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Main Heading', 'name'=> 'main_heading', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'secondary Button title', 'name'=> 'secondary_btn_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Secondary Button Link', 'name'=> 'secondary_btn_link', 'type'=> 'text', 'placeholder'=> 'e.g. http://www. / client.blog.create', 'value'=> null, 'options'=> '*'],
            ['label'=> 'First Workout Title', 'name'=> 'first_workout_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'First Workout', 'name'=> 'first_workout', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Second Workout Title', 'name'=> 'second_workout_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> null],
            ['label'=> 'Second Workout', 'name'=> 'second_workout', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> null],
            ['label'=> 'Third Workout Title', 'name'=> 'third_workout_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> null],
            ['label'=> 'Third Workout', 'name'=> 'third_workout', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> null],
            ['label'=> 'Article Title', 'name'=> 'article_title', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> null],
            ['label'=> 'Article Heading', 'name'=> 'article_heading', 'type'=> 'text', 'placeholder'=> 'Write here...', 'value'=> null, 'options'=> '*'],
            ['label'=> 'Background Image', 'name'=> 'bg_image', 'type'=> 'file', 'placeholder'=> 'Select one...', 'value'=> null, 'options'=> '((1920x1080))'],
            ['label'=> 'Secondary Background Image', 'name'=> 'secondary_bg_image', 'type'=> 'file', 'placeholder'=> 'Select one...', 'value'=> null, 'options'=> '((1920x1080))'],
             
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
            'first_heading'=> 'required',
            'first_title'=> 'required',
            'first_btn_title'=> 'required',
            'first_btn_link'=> 'required',
            'primary_btn_title'=> 'required',
            'primary_btn_link'=> 'required',
            'main_heading'=> 'required',
            'secondary_btn_title'=> 'required',
            'secondary_btn_link'=> 'required',
            'first_workout_title'=> 'required',
            'first_workout'=> 'required',
            'article_heading'=> 'required',
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, [
            'first_heading',
            'first_title',
            'first_btn_title',
            'first_btn_link',
            'primary_btn_title',
            'primary_btn_link',
            'main_heading',
            'secondary_btn_title',
            'secondary_btn_link',
            'first_workout_title',
            'first_workout',
            'second_workout_title',
            'second_workout',
            'third_workout_title',
            'third_workout',
            'article_title',
            'article_heading',
        ], ['bg_image', 'secondary_bg_image'], $this->path['asset'], $this->path, null, $resources);
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
        $request->validate([
            'first_heading'=> 'required',
            'first_title'=> 'required',
            'first_btn_title'=> 'required',
            'first_btn_link'=> 'required',
            'primary_btn_title'=> 'required',
            'primary_btn_link'=> 'required',
            'main_heading'=> 'required',
            'secondary_btn_title'=> 'required',
            'secondary_btn_link'=> 'required',
            'first_workout_title'=> 'required',
            'first_workout'=> 'required',
            'article_heading'=> 'required',
        ]);
        
        $resources = $this->resources('index');
        return HelperClass::resourceDataUpdate($this->table, $id, $request, [
            'first_heading',
            'first_title',
            'first_btn_title',
            'first_btn_link',
            'primary_btn_title',
            'primary_btn_link',
            'main_heading',
            'secondary_btn_title',
            'secondary_btn_link',
            'first_workout_title',
            'first_workout',
            'second_workout_title',
            'second_workout',
            'third_workout_title',
            'third_workout',
            'article_title',
            'article_heading',
        ], ['bg_image', 'secondary_bg_image'], $this->path['asset'], $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, ['image', 'secondary_bg_image']);
    }
}