<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //upload file
    public function uploadFile()
    {
        return view('uploadFile');
    }
    public function uploadimg(Request $request)
    {
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/admin/images/';
        $request->image->move($path, $file_name);
        return 'Uploaded';
    }

}
