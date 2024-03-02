<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\AppSettings;
use Illuminate\Http\Request;

class AppSettingsController extends Controller
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/app-setting/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'settings',
            // 'include_inputs' => 'components.backend.app-setting-external-inputs',
        ];
        $this->table = 'app_settings';
        $this->model = AppSettings::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null)
    { 

        $others = [
            'title' => 'Home Page', 
            'path' => $this->path
        ];

        $index = null;

        $create = [
            ['label'=> 'App Title', 'name'=> 'title', 'type'=> 'text', 'placeholder'=> 'Write...', 'value'=> null, 'options'=> null],
            ['label'=> 'App Full Name', 'name'=> 'basic_title_five', 'type'=> 'text', 'placeholder'=> 'Write...', 'value'=> null, 'options'=> null],
            ['label'=> 'Primary Phone', 'name'=> 'phone_one', 'type'=> 'text', 'placeholder'=> '+880 15xxxxxxx', 'value'=> null, 'options'=> null],
            ['label'=> 'Secondary Phone', 'name'=> 'phone_two', 'type'=> 'text', 'placeholder'=> '+880 15xxxxxxx', 'value'=> null, 'options'=> null],
            ['label'=> 'Primary E-mail', 'name'=> 'email', 'type'=> 'text', 'placeholder'=> 'example@gmail.com', 'value'=> null, 'options'=> null],
            ['label'=> 'Secondary E-mail', 'name'=> 'basic_title_one', 'type'=> 'text', 'placeholder'=> 'example@gmail.com', 'value'=> null, 'options'=> null],
            ['label'=> 'Address', 'name'=> 'basic_title_three', 'type'=> 'text', 'placeholder'=> 'Write...', 'value'=> null, 'options'=> null],
            ['label'=> 'Map Url', 'name'=> 'map_url', 'type'=> 'text', 'placeholder'=> 'https://www.example.com', 'value'=> null, 'options'=> null],
            ['label'=> 'Youtube Url', 'name'=> 'youtube', 'type'=> 'text', 'placeholder'=> 'https://www.example.com', 'value'=> null, 'options'=> null],
            ['label'=> 'Whatsapp Url', 'name'=> 'whatsapp', 'type'=> 'text', 'placeholder'=> 'https://www.example.com', 'value'=> null, 'options'=> null],
            ['label'=> 'Threads Url', 'name'=> 'threads', 'type'=> 'text', 'placeholder'=> 'https://www.example.com', 'value'=> null, 'options'=> null],
            ['label'=> 'Instagram Url', 'name'=> 'instagram', 'type'=> 'text', 'placeholder'=> 'https://www.example.com', 'value'=> null, 'options'=> null],
            ['label'=> 'Twitter Url', 'name'=> 'twitter', 'type'=> 'text', 'placeholder'=> 'https://www.example.com', 'value'=> null, 'options'=> null],
            ['label'=> 'Linkedin Url', 'name'=> 'linkedin', 'type'=> 'text', 'placeholder'=> 'https://www.example.com', 'value'=> null, 'options'=> null],
            ['label'=> 'Pinterest Url', 'name'=> 'pinterest', 'type'=> 'text', 'placeholder'=> 'https://www.example.com', 'value'=> null, 'options'=> null],
            ['label'=> 'Facebook Group Url', 'name'=> 'home_title', 'type'=> 'text', 'placeholder'=> 'Write...', 'value'=> null, 'options'=> null],
            ['label'=> 'Facebook Page Url', 'name'=> 'facebook', 'type'=> 'text', 'placeholder'=> 'https://www.example.com', 'value'=> null, 'options'=> null],
            ['label'=> 'Facebook iFrame Title', 'name'=> 'faq_title', 'type'=> 'text', 'placeholder'=> 'Write...', 'value'=> null, 'options'=> null],
            ['label'=> 'Facebook Group Iframe', 'name'=> 'basic_title_two', 'type'=> 'text', 'placeholder'=> '<iframe src="http://www.example.com"></iframe>', 'value'=> null, 'options'=> "(*)"],
                
                // meta 
            ['label'=> 'Contact Us Title', 'name'=> 'services_title', 'type'=> 'text', 'placeholder'=> 'Write...', 'value'=> null, 'options'=> null],
            ['label'=> 'About Title', 'name'=> 'about_title', 'type'=> 'text', 'placeholder'=> 'Write...', 'value'=> null, 'options'=> null],
            ['label'=> 'Meta Title', 'name'=> 'meta_title', 'type'=> 'text', 'placeholder'=> 'Write...', 'value'=> null, 'options'=> null],
            ['label'=> 'Meta Keyword', 'name'=> 'meta_keyword', 'type'=> 'text', 'placeholder'=> 'Keyword one, two, three & more...', 'value'=> null, 'options'=> null],
            ['label'=> 'Meta Description', 'name'=> 'meta_description', 'type'=> 'textarea', 'placeholder'=> 'Write...', 'value'=> null, 'options'=> null],
            ['label'=> 'Footer Descriptions', 'name'=> 'basic_title_four', 'type'=> 'text', 'placeholder'=> 'Write...', 'value'=> null, 'options'=> null],
            ['label'=> 'Copyright Reserver', 'name'=> 'search_title', 'type'=> 'text', 'placeholder'=> 'Write...', 'value'=> null, 'options'=> null],

                

            // image/files
            ['label'=> 'Favicon Image', 'name'=> 'favicon', 'type'=> 'file', 'placeholder'=> null, 'value'=> null, 'options'=> null],
            ['label'=> 'Primary App Logo', 'name'=> 'logo', 'type'=> 'file', 'placeholder'=> null, 'value'=> null, 'options'=> null],
            ['label'=> 'Home Blog Page Background Image', 'name'=> 'secondary_logo', 'type'=> 'file', 'placeholder'=> null, 'value'=> null, 'options'=> null],
            // ['label'=> 'Footer Banner Image', 'name'=> 'banner_image', 'type'=> 'file', 'placeholder'=> null, 'value'=> null, 'options'=> null],
            // ['label'=> 'Banner Background Image', 'name'=> 'banner_animation_image', 'type'=> 'file', 'placeholder'=> null, 'value'=> null, 'options'=> null],
            ['label'=> 'Footer Logo Image', 'name'=> 'footer_image', 'type'=> 'file', 'placeholder'=> null, 'value'=> null, 'options'=> null],
            ['label'=> 'Footer Background Image', 'name'=> 'footer_animation_image', 'type'=> 'file', 'placeholder'=> null, 'value'=> null, 'options'=> null],

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
        return view("admin.{$this->path['view']}.edit", compact("resources", "data"));
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
        return HelperClass::resourceDataStore($this->table, $request, [
            'title',
            'home_title',
            'faq_title',
            'services_title',
            'about_title',
            'search_title',
            'basic_title_five',
            'facebook',
            'youtube',
            'whatsapp',
            'twitter',
            'linkedin',
            'pinterest',
            'map_url',
            'phone_one',
            'phone_two',
            'email',
            'threads',
            'instagram',
            'basic_title_one',
            'basic_title_two',
            'meta_title',
            'meta_keyword',
            'meta_description',
            'basic_title_three',
            'basic_title_four',
        ], [
            'favicon',
            'logo',
            'secondary_logo',
            // 'banner_image',
            // 'banner_animation_image',
            'footer_image',
            'footer_animation_image'
        ], $this->path['asset'], $this->path, null, $resources);
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
        return HelperClass::resourceDataUpdate($this->table, $id, $request, [
            'title',
            'home_title',
            'faq_title',
            'services_title',
            'about_title',
            'search_title',
            'basic_title_five',
            'facebook',
            'youtube',
            'whatsapp',
            'twitter',
            'linkedin',
            'pinterest',
            'map_url',
            'phone_one',
            'phone_two',
            'email',
            'threads',
            'instagram',
            'basic_title_one',
            'basic_title_two',
            'meta_title',
            'meta_keyword',
            'meta_description',
            'basic_title_three',
            'basic_title_four',
        ], [
            'favicon',
            'logo',
            'secondary_logo',
            // 'banner_image',
            // 'banner_animation_image',
            'footer_image',
            'footer_animation_image'
        ], $this->path['asset'], $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, [
            'favicon',
            'logo',
            'secondary_logo',
            'banner_image',
            'banner_animation_image',
            'footer_image',
            'footer_animation_image'
        ]);
    }
} 





/* 

return HelperClass::resourceDataSave($data, $request, 
        [
            'title',
            'home_title',
            'faq_title',
            'services_title',
            'about_title',
            'search_title',
            'basic_title_five',
            'facebook',
            'youtube',
            'whatsapp',
            'twitter',
            'linkedin',
            'pinterest',
            'map_url',
            'phone_one',
            'phone_two',
            'email',
            'meta_title',
            'meta_keyword',
            'meta_description',
            'basic_title_one',
            'basic_title_three',
            'basic_title_four',
       ], [
            'logo',
            'secondary_logo',
            'favicon',
            'banner_image',
            'banner_animation_image',
            'map_image',
            'footer_image',
            'footer_animation_image',
       ], 'media/app-setting/');

*/