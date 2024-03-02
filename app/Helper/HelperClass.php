<?php

namespace App\Helper;


use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\StaticSiteItem; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class HelperClass
{

    /**
     * @uses - store a image in public folder path
     * @param mixed $file receive a request file data suppose $request->file(your_file_name)
     * @param int $size receive a size of file's
     * @param string $name receive a folder path to store the image
     * @param string $oldImage receive the old image path if its exists for deleting
     */
    public static function storeImage($file, $size, $path, $oldImage = NULL)
    {
        $create_path = public_path($path);
        if (!File::isDirectory($create_path)) {
            File::makeDirectory($create_path, 0777, true, true);
        }

        $ext = $file ? $file->getClientOriginalExtension() : 'jpg';
        // $ext = 'webp';
        $file_name = Carbon::now()->toDateString() . '-' . Str::random(40) . '.' . $ext;
        $path_file_name = $path . $file_name;
        $file = Image::make($file);
        $file->resize($size, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->stream($ext, 100);
        $file->save($path_file_name);
        if (file_exists($oldImage)) {
            unlink($oldImage);
        }
        return ['status' => 'success', 'path_name' => $path_file_name];
    }

    public static function siteItems(string $selector){
        return StaticSiteItem::select($selector)->first()->$selector;
    }

    /**
     * @uses for create a slug
     * @param string $string receive a string value to slice for create a slug string
     */
    public static function createSlug(string $string, string|Null $table_name = null) {
        $slug = Str::slug($string);

        if($table_name) {
            if(DB::table($table_name)->where('slug', $slug)->exists()) {
                $counter = 1;

                while (DB::table($table_name)->where('slug', $slug .'-'. $counter)->exists()) {
                    $counter++;
                }

                $slug = $slug . '-' . $counter;
            } else {
                return $slug;
            }

        }

        return $slug;
    }

    /**
     * @uses for break a string by first word and last all word with a sentence
     * @param string $string receive a string value 
     */
    public static function stringDividedByFirstWord(string $str){
        $words = explode(' ', $str);
        $first_word = $words[0];
        array_shift($words);
        $text = implode(" ", $words);

        return ["first_word"=> $first_word, "text"=> $text];
    }

    /**
     * 
     * @uses - just simplify HelperClass::storeImage function for store a image in public folder path 
     * @param mixed $image receive a request file data suppose $request->file(your_file_name)
     * @param string $save_path receive a folder path to store the image
     * @param string $old_image receive the old image path if its exists for deleting
    */
    public static function saveImage($image, $save_path, $old_image = null){
         $path_name = NULL;

        if (isset($image)) {
            $response = HelperClass::storeImage($image, 1920, $save_path, $old_image);
            if ($response['status'] == 'success') {
                $path_name =  $response['path_name'];
            } else {
                $path_name = NULL;
            }
        } else {
            $path_name = NULL;
        }

        return $path_name;
    }

    /**
     * @uses - use it a resources controller's index function for view a table's data for edit and delete with others action.
     * @param mixed $model {YourModel::query()} receive a model's query of a database table's schema. 
     * @param array $data_column receive a array of columns name of a database table's.
     * @param string $image_column receive a array of image files columns of a database table's if its exists. 
     * @param string $route receive a route's name of the resources controller's route path name.
     */
    public static function resourceDataView($model, array $data_column, NULL|array $image_column, string|array $route_path, $resources = null){

        $asset = $route_path;
        $view = $route_path;
        $route = $route_path;

        if(is_array($route_path)){
            $asset = $route_path['asset'];
            $view = $route_path['view'];
            $route = $route_path['route'];
        }
        
        if (request()->ajax()) {

            // make a eloquent od Yajra Fcade Datatables class's
            $datatables_eloquent = DataTables::eloquent($model);

            // checkbox column
            $datatables_eloquent->addColumn('checkbox', function ($row) {
                $checkbox = 
                    '<div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input multi_checkbox" id="' . $row->id . '" name="multi_checkbox[]" value="' . $row->id . '"><label for="' . $row->id . '" class="custom-control-label"></label></div>';
                    
                return $checkbox;
            });

            // push status column into the instance of data table eloquent 
            $datatables_eloquent->addColumn('status', function ($row) use($route) {
                $status = 
                    '<div class="form-check form-switch"><input class="form-check-input change-status c-pointer" data-url="' . Route("admin.{$route}.edit", $row->id) . '" type="checkbox" name="status"' . ($row->status == 1 ? 'checked' : '') . '></div>';

                return $status;
            });

            // initiate an instance of available images file's 
            $images_column = [];
            
            // if images data is available on our database model's then push it on our data table eloquent
            if(is_array($image_column)){
                $images_column = $image_column;

                foreach ($images_column as $data) {
                    $datatables_eloquent->addColumn($data, function ($row) use($data) {
                        return '<img src="' . asset($row[$data]) . '" height="50" alt=""/>';
                    });
                }
            }

            // if any type of data columns are available in our db model then push it data table eloquent
            foreach ($data_column as $data) {
                $datatables_eloquent->addColumn($data, function ($row) use($data) {
                    return $row[$data];
                });
            }

            // at last create an action columns `edit` & `delete` and push in our data table eloquent
            $datatables_eloquent->addColumn('actions', function ($row) use($route) {
                $actionBtn = 
                '<div class="btn-group"><a href="' . Route("admin.{$route}.edit", $row->id) . '" class="btn btn-sm btn-warning border-0 px-10px fs-15 link-edit"><i class="far fa-pencil-alt"></i></a><button type="button" class="btn btn-sm btn-danger border-0 px-10px fs-15 link-delete" data-url="' . Route("admin.{$route}.destroy", $row->id) . '"><i class="far fa-trash-alt"></i></button></div>';

                return $actionBtn;
            });

            // serialize our and push all db model's columns which we're showing in our front-end in data table eloquent
            $row_columns = [
                'checkbox',
                ...$images_column,
                ...$data_column,
                'status',
                'actions',
            ];
            
            // At last return our data table's eloquent!
            return $datatables_eloquent->rawColumns($row_columns)->make(true);

        }

        return view("admin.{$view}.index", compact('resources'));
    }

    /**
     * @uses - use it a resources controller's store function for store a table's in a database's table.
     * @param string $table receive a database table's name. 
     * @param mixed $request receive a array of requested data which data's input fields `name` and database table's columns names will must be same as.
     * @param array $request_data receive a array of database table's columns name which requested data's input fields `name` and database table's columns names will must be same as.
     * @param array|null $files receive a array of requested files which data's input fields `name` and database table's columns names will must be same as, if user input's a files is required then the set the input's name field values otherwise it would be always null. 
     * @param string|null $file_path if user input a file is required then give file path to store this file.
     * @param string $route receive a route's name of the resources controller's route path name.
     * @param array|null $multiple_file receive a array of requested files {from multiple file selected input's field} which data's input fields `name` and database table's columns names will must be same as, if user input's a files is required then the set the input's name field values otherwise it would be always null.
     */
    public static function resourceDataStore(string $table, $request, array $request_data, array|NULL $files = null,
    string|NULL $file_path = null, array|string $path, array|NULL $multiple_file = null, $resources = null){

        $asset = $path;
        $view = $path;
        $route = $path;

        if(is_array($path)){
            $asset = $path['asset'] ?? 'media/others';
            $view = $path['view'];
            $route = $path['route'];
        }
        
        $creation_data = [];

        // push all requested post data into creation data table
        foreach ($request_data as $data) {
            $creation_data[$data] = $request[$data];
        }

        // create a slug is need a slug
        if(in_array("slug", $request_data)){
            $creation_data["slug"] = HelperClass::createSlug($request->title, $table);
        }
            
        if($multiple_file && is_array($multiple_file) && $file_path){
            foreach ($multiple_file as $file) {
                $all_file = [];

                foreach ($request->file($file) as $single_file) {
                    $all_file[] = HelperClass::saveImage($single_file, $file_path);
                }

                $creation_data[$file] = json_encode($all_file);
            }
        }


        if(is_array($files) && $file_path){
            foreach ($files as $file) {
                $file_path = HelperClass::saveImage($request->file($file), $file_path);
                $creation_data[$file] = $file_path;
            }
        }

        $creation_data['created_at'] = Carbon::now();
        $creation_data['updated_at'] = Carbon::now();

        DB::table($table)->insert($creation_data);

        return redirect()->route("admin.{$route}.index", compact('resources'))->withSuccessMessage('Created Successfully!');
    }

    /**
     * @uses - use it a resources controller's edit function return to view a edit form page.
     * @param string $table receive a database table's name. 
     * @param string $id receive a unique id of editing data. 
     * @param string $route receive a route's name of the resources controller's route path name.
     */
    public static function resourceDataEdit(string $table_name, string $id, string|array $path, $resources = null){

        $asset = $path;
        $view = $path;
        $route = $path;

        if(is_array($path)){
            $asset = $path['asset'];
            $view = $path['view'];
            $route = $path['route'];
        }

        if (request()->ajax() && request('status') == 'true') {
            $data = DB::table($table_name)->where('id', $id)->first();

            DB::table($table_name)->where('id', $id)->update(['status' => !$data->status]);

            return response()->json(['status' => 'success']);
        }

        $data = DB::table($table_name)->where('id', $id)->first();

        return view("admin.{$view}.edit", compact('data', 'resources')); 
    }

    /**
     * @uses - use it a resources controller's index function for update a data from a database's table.
     * @param string $table receive a database table's name. 
     * @param string $id receive a unique id of updating data. 
     * @param mixed $request receive a array of requested data which data's input fields `name` and database table's columns names will must be same as.
     * @param array $request_data receive a array of database table's columns name which requested data's input fields `name` and database table's columns names will must be same as.
     * @param array|null $files receive a array of requested files which data's input fields `name` and database table's columns names will must be same as, if user input's a files is required then the set the input's name field values otherwise it would be always null. 
     * @param string|null $file_path if user input a file is required then give file path to store this file.
     * @param string $route receive a route's name of the resources controller's route path name.
     * @param array|null $multiple_file receive a array of requested files {from multiple file selected input's field} which data's input fields `name` and database table's columns names will must be same as, if user input's a files is required then the set the input's name field values otherwise it would be always null.
     */
    public static function resourceDataUpdate(string $table_name, string $id, $request, array $request_data, array|NULL $files, string|NULL $file_path, array|string $path, array|NULL $multiple_file = null, $resources = null)
    {

        $asset = $path;
        $view = $path;
        $route = $path;

        if(is_array($path)){
            $asset = $path['asset'];
            $view = $path['view'];
            $route = $path['route'];
        }

        $data = DB::table($table_name)->where('id', $id)->first(); 
        
        // return "<h1>id: {$id}<br/> table: {$table_name}<br/> ".json_encode($data)."</h1>";
        $get_single_data = fn($key) => $data->$key;
        
        // if multiple file insertion requirement is available here then looping to insert.
        if(is_array($multiple_file) && $file_path){
            foreach ($multiple_file as $file) {

                if($request->file($file)){
                    $get_files = json_decode($data->$file, true);
                    
                    // Delete the previous files using previous image's file path
                    if(is_array($get_files)){
                        foreach ($get_files as $single_file) { 
                            if(file_exists($single_file)) {
                                unlink($single_file);
                            }
                        }
                    }
                }
            }
        }

        $creation_data = [];

        // push all requested post data into creation data table
        foreach ($request_data as $data) {
            $creation_data[$data] = $request[$data];
        }

        // create a slug is need a slug
        if(in_array("slug", $request_data)){
            $creation_data["slug"] = Str::slug($request->title, "-");
        }

        // if any multiple file upload or update system is available here!
        if(is_array($multiple_file) && $file_path){
            foreach ($multiple_file as $file) {

                // initiate a empty array to store multiple image path
                $all_file = [];

                if($request->file($file)){
                    foreach ($request->file($file) as $single_file) {
                        $all_file[] = HelperClass::saveImage($single_file, $file_path);
                    }

                    // encode to covert a string from an array fo inserting multiple images path
                    $creation_data[$file] = json_encode($all_file);
                } 
            } 
        }

        // for single file upload or update here!
        if($files && is_array($files) && $file_path){
            foreach ($files as $file) {
                $get_old_file = $get_single_data($file);
                $image = $request->file($file);

                if($image){
                    $file_path = HelperClass::saveImage($image, $file_path, $get_old_file);
                    $creation_data[$file] = $file_path;
                }
            }
        }

        // initiate lates updated date into our table row's
        $creation_data['updated_at'] = Carbon::now();

        // insert data into this table
        DB::table($table_name)->where('id', $id)->update($creation_data);
         
        // after successful that operation then redirect and send a success message!
        return redirect()->route("admin.{$route}.index", compact('resources'))->withSuccessMessage('Updated Successfully!');
    }

    /**
     * @uses - use it a resources controller's delete function for delete a data from database's table.
     * @param string $table receive a database table's name. 
     * @param mixed $request receive a array of requested data's id if selected multiple data to delete from database's table.
     * @param string $id receive a unique id of deleting data. 
     * @param array|null $files receive a array of files columns name's for deleting file from our database table's and storage if it exists, otherwise it would be always null. 
     * @param array|null $multiple_file receive a array of files columns name's of multiple file's column's for deleting multiple file from our database table's and storage if it exists, otherwise it would be always null.
     */
    public static function resourceDataDelete(string $table_name, $request, string $id, array|NULL $files, array|NULL $multiple_file = null, $resources = null){

        // multiple id selection for deleting data are available then looping!
        // get multiple data's id from `request->id`
        if($request->id){
            $delete_ids = $request->id;

            $delete_all_data = DB::table($table_name)->whereIn('id', $delete_ids)->get();

            // Initialize an array of file's path for deleting files
            $deleting_files = [];

            foreach ($delete_all_data as $all_data) {
                if(is_array($multiple_file)){
                    foreach($multiple_file as $files){
                        $files_path = json_decode($all_data->$files, true);

                        if(is_array($files_path)){
                            $deleting_files = array_merge($deleting_files, $files_path);
                        }
                    }
                }

                if(is_array($files)){
                    foreach($files as $file){
                        $deleting_files[] = $all_data->$file;
                    }
                }
            }

            foreach($deleting_files as $single_file){
                if(file_exists($single_file)){
                    unlink($single_file);
                }
            }

            DB::table($table_name)->whereIn('id', $delete_ids)->delete();

            return response()->json(['status' => 'success']);
        }

        // delete single items
        $data = DB::table($table_name)->where('id', $id)->first();

        if($files){
            foreach ($files as $file) {
                $file_path = $data->$file;
                if (file_exists($file_path)) {
                    unlink($file_path);
                }
            }
        }

        // when multiple file path are available for deleting!
        if(is_array($multiple_file)){
            foreach ($multiple_file as $file) {
                // $file_path = $data->$file;

                $files_path = json_decode($data->$file, true);
                if(is_array($files_path)){
                    foreach ($files_path as $single_file_path) {
                        if (file_exists($single_file_path)) {
                            unlink($single_file_path);
                        }
                    }
                }
            }
        }

        DB::table($table_name)->where('id', $id)->delete();

        return response()->json(['status' => 'success']);
    }

    /**
     * @uses - use it a resources controller's edit function for save data in a database's table.
     * @param string $table receive a database table's name. 
     * @param mixed $request receive a array of requested data which data's input fields `name` and database table's columns names will must be same as.
     * @param array $request_data receive a array of database table's columns name which requested data's input fields `name` and database table's columns names will must be same as.
     * @param array|null $files receive a array of requested files which data's input fields `name` and database table's columns names will must be same as, if user input's a files is required then the set the input's name field values otherwise it would be always null. 
     * @param string|null $file_path if user input a file is required then give file path to store this file.
     * @param string $route receive a route's name of the resources controller's route path name.
     * @param array|null $multiple_file receive a array of requested files {from multiple file selected input's field} which data's input fields `name` and database table's columns names will must be same as, if user input's a files is required then the set the input's name field values otherwise it would be always null.
     */
    public static function resourceDataSave(/* string $table_name,  */$data, $request, array $requests_data, array|NULL $files, string|NULL $file_path, array $multiple_file = null){

        // return [$multiple_files,$data];
        // $id = $data->id;
        foreach ($requests_data as $request_data) {
            $data->$request_data = $request[$request_data];
        }

        if($files && $file_path){
            foreach ($files as $file) {
                $get_file = $request->file($file);
                $old_file = $data->$file;

                if($get_file){
                    $image_path = HelperClass::saveImage($get_file, $file_path, $old_file);
                    $data[$file] = $image_path;
                }
            }
        }
        
        /* // if multiple file insertion requirement is available here then looping to insert.
        if(is_array($multiple_files) && $file_path){
            foreach ($multiple_files as $file) {

                if($request->file($file)){
                    $get_files = json_decode($data->$file, true);
                    
                    // Delete the previous files using previous image's file path
                    if(is_array($get_files)){
                        foreach ($get_files as $single_file) { 
                            if(file_exists($single_file)) {
                                unlink($single_file);
                            }
                        }
                    }
                }
            }
        }

        // if any multiple file upload or update system is available here!
        if(is_array($multiple_files) && $file_path){
            foreach ($multiple_files as $file) {

                // initiate a empty array to store multiple image path
                $all_file = [];

                if($request->file($file)){
                    foreach ($request->file($file) as $single_file) {
                        $all_file[] = HelperClass::saveImage($single_file, $file_path);
                    }

                    // encode to covert a string from an array fo inserting multiple images path
                    $data->$file = json_encode($all_file);
                } 
            } 
        } */

        // $data->save();

        /* $get_single_data = fn($key) => $data->$key;
        
        // if multiple file insertion requirement is available here then looping to insert.
        if(is_array($multiple_file) && $file_path){
            foreach ($multiple_file as $file) {

                if($request->file($file)){
                    $get_files = json_decode($data->$file, true);
                    
                    // Delete the previous files using previous image's file path
                    if(is_array($get_files)){
                        foreach ($get_files as $single_file) { 
                            if(file_exists($single_file)) {
                                unlink($single_file);
                            }
                        }
                    }
                }
            }
        }

        $creation_data = [];

        // push all requested post data into creation data table
        foreach ($request_data as $data) {
            $creation_data[$data] = $request[$data];
        }

        // create a slug is need a slug
        if(in_array("slug", $request_data)){
            $creation_data["slug"] = Str::slug($request->title, "-");
        }

        // if any multiple file upload or update system is available here!
        if(is_array($multiple_file) && $file_path){
            foreach ($multiple_file as $file) {

                // initiate a empty array to store multiple image path
                $all_file = [];

                if($request->file($file)){
                    foreach ($request->file($file) as $single_file) {
                        $all_file[] = HelperClass::saveImage($single_file, $file_path);
                    }

                    // encode to covert a string from an array fo inserting multiple images path
                    $creation_data[$file] = json_encode($all_file);
                } 
            } 
        }

        // for single file upload or update here!
        if($files && is_array($files) && $file_path){
            foreach ($files as $file) {
                $get_file = $get_single_data($file);

                if(file_exists($get_file)){
                    unlink($get_file);
                }

                $image = $request->file($file); 
                if($image){
                    $file_path = HelperClass::saveImage($image, $file_path);
                    $creation_data[$file] = $file_path;
                }
            }
        }

        // initiate lates updated date into our table row's
        $creation_data['updated_at'] = Carbon::now();

        // insert data into this table
        // return [$creation_data, $id];
        DB::table($table_name)->where('id', $id)->update($creation_data);

        return redirect()->back()->withSuccessMessage('Updated Successfully!'); */
    }

    /**
     * @uses - to check a it's parameter as a string would be a youtube embed video's url or not.
     * @param string $url receive youtube embed video url.
     */
    public static function validateYoutubeVideoURL(string|NULL $url){
        if(is_null($url)) return false;

        $permission = intval(env('YOUTUBE_VIDEO_VALIDATION'));
        $split_url = explode('/', $url);
    
        if($permission){
            if(in_array('www.youtube.com',$split_url) && in_array('embed' ,$split_url)){
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    
}