<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\AdminSetting;
use Illuminate\Http\Request; 

class AdminSettingController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $settings = AdminSetting::latest('id')->first();
        return view('admin.admin_setting.edit', compact('settings'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        //
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        //
    }

    // Display the specified resource.
    public function show(string $id)
    {
        //
    }

    // Show the form for editing the specified resource.
    public function edit(string $id)
    {
        //
    }

    // Update the specified resource in storage.
    public function update(Request $request, string $id)
    {
        $request->validate([
            'logo' => 'image',
            'favicon' => 'image',
            'title' => 'required',
            'footer_text' => 'required',
        ]);

        $settings = AdminSetting::latest('id')->first();
        if (is_null($settings)) {
            $settings = new AdminSetting();
        }
        
        if($request->hasFile('logo')) $settings->logo = HelperClass::saveImage($request->file('logo'), 'media/admin-setting/', $settings->logo);
        if($request->hasFile('favicon')) $settings->favicon = HelperClass::saveImage($request->file('favicon'), 'media/admin-setting/', $settings->favicon);
        
        $settings->title = $request->title;
        $settings->footer_text = $request->footer_text;
        $settings->primary_color = $request->primary_color;
        $settings->secondary_color = $request->secondary_color;
        $settings->facebook = $request->facebook;
        $settings->twitter = $request->twitter;
        $settings->linkedin = $request->linkedin;
        $settings->whatsapp = $request->whatsapp;
        $settings->google = $request->google;
        $settings->save();

        return redirect()->back()->withSuccessMessage('Updated Successfully!');
    }

    // Remove the specified resource from storage.
    public function destroy(string $id)
    {
        //
    }
}