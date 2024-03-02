<?php

namespace App\Http\Controllers\Admin;

use App\Helper\HelperClass;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //Display a listing of the resource.
    public function index()
    {
        $data = Contact::latest('updated_at')->first();
        return view('admin.contact.edit', compact('data'));
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
        $request->validate([
           'title' => 'required',
           'heading' => 'required',
           'address' => 'required',
           'work_time' => 'required',
           'primary_mobile' => 'required', 
           'primary_email' => 'required', 
           'map_url' => 'required', 
        ]);

        $data = Contact::latest('updated_at')->first();

        if(is_null($data)) $data = new Contact();

        return HelperClass::resourceDataSave($data, $request, ['heading', 'title', 'address', 'work_time', 'primary_mobile', 'primary_email', 'secondary_mobile', 'secondary_email', 'map_url'], null, null);
    }

    
    // Remove the specified resource from storage.
    public function destroy(string $id){}
}
