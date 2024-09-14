<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadFile(Request $request)
    {
        $file_extension = $request->image->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;
        $path = 'assets/admin/images';
        $request->image->move($path, $file_name);
        return 'Uploaded';
    }
}
