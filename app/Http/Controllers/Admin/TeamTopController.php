<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\TeamTop;
use Illuminate\Http\Request;
use App\Helper\HelperClass;

class TeamTopController extends Controller
{
    public function index()
    {   
        $data = TeamTop::latest()->first();
        return view('admin.team_page.edit', ['data'=>$data]); 
    }

     public function store(Request $request)
     {

        $request->validate([
            'title' => 'required',
            'description' =>'required',
        ]);

        $oldImage = $request->oldimage;
        $data = TeamTop::latest()->first();
        $data->title = $request->title;
        $data->description = $request->description;
        $data->first_title = $request->first_title;
        $data->second_title = $request->second_title;
        $data->third_title = $request->third_title;
        $data->fourth_title = $request->fourth_title;
        $data->btn_title = $request->btn_title;
        $data->btn_link = $request->btn_link;

        $file = $request->file('image');
        if($request->image){
            $imagePath = HelperClass::saveImage($file, 'media/teamtop/', $oldImage);
            $data->image = $imagePath;
        }

        $data->save();
        return redirect()->back()->withSuccessMessage('Updated Successfully!');
     }
}