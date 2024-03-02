<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\SBPageBanner;
use Illuminate\Http\Request;

class SBPageBannerController extends Controller 
{
    // Display a listing of the resource.
    public $path, $table, $model;
    public function __construct(){
        $this->path = [
            'asset'=> 'media/sticker-banner-top/',
            'view'=> 'dynamic-content-upload-page',
            'route'=> 'sticker-banner-page-top',
        ];
        $this->table = 's_b_page_banners';
        $this->model = SBPageBanner::class;
     }

    // Make Protected Resources Function
    protected function resources(string|NULL $type = null, mixed $value = null)
    { 

        $others = [
            'title' => 'Sticker And Banner Page Top Section', 
            'path' => $this->path
        ];

        $index = [
            'labels'=> ['Priority Serial', 'Title', 'Button Text' ,'Image','Status'],
            'columns'=> [
                ['data'=> 'checkbox', 'name'=> 'checkbox', 'orderable'=> false,'searchable'=> false, 'width'=> 3],
                ['data'=> 'serial', 'name'=> 'serial'],
                ['data'=> 'bannertitle', 'name'=> 'bannertitle'],
                ['data'=> 'bannerbuttontext', 'name'=> 'bannerbuttontext'],
                ['data'=> 'bannerimage', 'name'=> 'bannerimage'],
                ['data'=> 'status', 'name'=> 'status', 'orderable'=> false,'searchable'=> false],
                ['data'=> 'actions', 'name'=> 'actions', 'orderable'=> false,'searchable'=> false, 'className'=> 'text-end'],
            ] 
        ];

        $create = [
            ['label'=> 'Title', 'name'=> 'bannertitle', 'type'=> 'text', 'placeholder'=> 'Write title...', 'value'=> null, 'options'=> '*'],

            ['label'=> 'Button Text', 'name'=> 'bannerbuttontext', 'type'=> 'text', 'placeholder'=> 'Write button text...', 'value'=> null, 'options'=> '*'],

            ['label'=> 'Button Url', 'name'=> 'bannerbuttonurl', 'type'=> 'text', 'placeholder'=> 'paste url...', 'value'=> null, 'options'=> '*'],

            ['label'=> 'Short Descriptions', 'name'=> 'bannerdescription', 'type'=> 'textarea', 
                'placeholder'=> 'Write Here...', 'value'=> null, 'options'=> '*'
            ],

            ['label'=> 'Banner Image', 'name'=> 'bannerimage', 'type'=> 'file', 'placeholder'=> 1, 'value'=> "0", 'options'=> '(1920x1080)'],

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
        return HelperClass::resourceDataView($this->model::query(), ['bannertitle', 'bannerbuttontext','bannerbuttonurl','bannerdescription','serial'], ['bannerimage'], $this->path, $resources);
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
            'bannerimage'=> 'required|file',
        ]);

        $resources = $this->resources('index');
        return HelperClass::resourceDataStore($this->table, $request, ['bannertitle', 'bannerbuttontext','bannerbuttonurl','bannerdescription','serial'], ['bannerimage'], $this->path['asset'], $this->path, null, $resources);
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
        return HelperClass::resourceDataUpdate($this->table, $id, $request, ['bannertitle', 'bannerbuttontext','bannerbuttonurl','bannerdescription','serial'], ['bannerimage'], $this->path['asset'], $this->path, null, $resources);
    }

    // Remove the specified resource from storage.
    public function destroy(string $id, Request $request)
    {
        return HelperClass::resourceDataDelete($this->table, $request, $id, ['bannerimage']);
    }
} 