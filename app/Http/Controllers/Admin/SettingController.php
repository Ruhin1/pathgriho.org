<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\AppSettings;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    //Display a listing of the resource.
    public function index()
    {
        $data = AppSettings::latest('updated_at')->first();
        return view('admin.site-item.edit', compact('data'));
    }

    //Show the form for creating a new resource.
    public function create(){}

    //Store a newly created resource in storage.
    public function store(Request $request){}

    //Display the specified resource.
    public function show(string $id){}

    //Show the form for editing the specified resource.
    public function edit(string $id){}

    //Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        $data = AppSettings::latest('updated_at')->first();

        if(is_null($data)) $data = new AppSettings();

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
       ], 'media/site-items/');
    }

    
    // Remove the specified resource from storage.
    public function destroy(string $id){}
}
