<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Project;
use Auth;
use DB;


class ImageController extends Controller
{
    public function create(Request $request, $image_info) {
        // $id = Project::where('id', Auth::id());
        $saveData = [
            'image_info' => $image_info,
            'image_url' => $request->image_url,
            'project_id' => 1
        ];
        // $getUrl = $_GET['image_url'];
        // return $getUrl;

        $image = Image::create($saveData);

        return back();
    }

    public function destroy($image_info) {
        $image = Image::where('image_info', $image_info);
        $image->delete();
        return back();
    }

    
}
