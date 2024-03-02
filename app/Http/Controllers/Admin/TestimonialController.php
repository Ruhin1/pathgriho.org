<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/testimonial/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'testimonial',
        ];
        $this->table = 'testimonials';
        $this->model = Testimonial::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null){ 

        $others = [
            'title' => 'Testimonial', 
            'path' => $this->path
        ];

        $index = null;

        $create = [
            ['label'=> 'Testimonial Title', 'name'=> 'title', 'type'=> 'text', 'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> null],
            ['label'=> 'Man Image', 'name'=> 'image', 'type'=> 'file', 'placeholder'=> 'Select here...', 'value'=> null, 'options'=> '(1920x1080)'],
            ['label'=> 'Background Image', 'name'=> 'bg_image', 'type'=> 'file', 'placeholder'=> 'Select here...', 'value'=> null, 'options'=> '(1920x1080)'],
            ['label'=> 'Other Detail Photos', 'name'=> 'photos', 'type'=> 'file_multiple', 
                'placeholder'=> 'Select here...', 'value'=> null, 'options'=> '(1920x1080)'
            ],
            ['label'=> 'Testimonial Short Descriptions', 'name'=> 'short_description', 'type'=> 'short_description', 
                'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> null
            ],
            ['label'=> 'Secondary Title', 'name'=> 'secondary_title', 'type'=> 'text', 'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> null],
            ['label'=> 'Secondary Descriptions', 'name'=> 'secondary_description', 'type'=> 'short_description', 
                'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> null
            ],
            ['label'=> 'Banner Title', 'name'=> 'banner_title', 'type'=> 'text', 'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> null],
            ['label'=> 'Banner Descriptions', 'name'=> 'banner_description', 'type'=> 'short_description', 
                'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> null
            ],
            ['label'=> 'Volunteers Count', 'name'=> 'volunteers', 'type'=> 'number', 'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> null],
            ['label'=> 'Volunteers Title', 'name'=> 'volunteer_title', 'type'=> 'text', 
                'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> null
            ],
            ['label'=> 'Testimonial Button Title', 'name'=> 'btn_title', 'type'=> 'text', 'placeholder'=> 'e.g. Sponsor a Child', 
                'value'=> null, 'options'=> null
            ],
            ['label'=> 'Testimonial Button Link/Route', 'name'=> 'btn_link', 'type'=> 'text', 'placeholder'=> 'e.g. http://www. / client.blog.create', 'value'=> null, 'options'=> null],
            ['label'=> 'Primary Button Title', 'name'=> 'primary_btn_title', 'type'=> 'text', 'placeholder'=> 'e.g. Sponsor a Child', 'value'=> null, 'options'=> null],
            ['label'=> 'Primary Button Link/Route', 'name'=> 'primary_btn_link', 'type'=> 'text', 'placeholder'=> 'e.g. http://www. / client.blog.create', 'value'=> null, 'options'=> null],
            ['label'=> 'Secondary Button Title', 'name'=> 'secondary_btn_title', 'type'=> 'text', 'placeholder'=> 'e.g. Sponsor a Child', 'value'=> null, 'options'=> null],
            ['label'=> 'Secondary Button Link/Route', 'name'=> 'secondary_btn_link', 'type'=> 'text', 'placeholder'=> 'e.g. http://www. / client.blog.create', 'value'=> null, 'options'=> null],
            ['label'=> 'Testimonial Footer Heading', 'name'=> 'description', 'type'=> 'text', 
                'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> null
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
            'image'=> 'required|file',
            'title'=> 'required', 
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, ['title', 'secondary_title', 'secondary_description', 'short_description', 'banner_title', 'banner_description', 'volunteers', 'volunteer_title', 'btn_title', 'btn_link', 'primary_btn_title', 'primary_btn_link', 'secondary_btn_title', 'secondary_btn_link', 'description'], ['bg_image', 'image'], $this->path['asset'], $this->path, ['photos'], $resources);
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
        $data = $this->model::latest('id')->first();
        if(!$data) $data = new $this->model();

        $data->title = $request->title;
        $data->secondary_title = $request->secondary_title;
        $data->secondary_description = $request->secondary_description;
        $data->short_description = $request->short_description;
        $data->banner_title = $request->banner_title;
        $data->banner_description = $request->banner_description;
        $data->volunteers = $request->volunteers;
        $data->volunteer_title = $request->volunteer_title;
        $data->btn_title = $request->btn_title;
        $data->btn_link = $request->btn_link;
        $data->primary_btn_title = $request->primary_btn_title;
        $data->primary_btn_link = $request->primary_btn_link;
        $data->secondary_btn_title = $request->secondary_btn_title;
        $data->secondary_btn_link = $request->secondary_btn_link;
        $data->description = $request->description;

        $all_photos = [];
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $savedImage = HelperClass::saveImage($photo, $this->path['asset']);
                $all_photos[] = $savedImage;
            }
        }

        // remove all the multiple photos
        if(!empty($all_photos)){
            foreach(json_decode($data->photos) as $photo){
                if(file_exists($photo)){
                    unlink($photo);
                }
            }

            $data->photos = json_encode($all_photos);
        }

        if($request->hasFile('image')) {
            $image = HelperClass::saveImage($request->file('image'), $this->path['asset'], $data->image);
            $data->image = $image;
        }

        if($request->hasFile('bg_image')){ 
            $bg_image = HelperClass::saveImage($request->file('bg_image'), $this->path['asset'], $data->bg_image);
            $data->bg_image = $bg_image;
        }
 
        $data->save();
        return redirect()->back()->withSuccessMessage('Updated Successfully!');
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, ['image'], ['images']);
    }
}