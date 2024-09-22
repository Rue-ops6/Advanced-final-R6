<?php

namespace App\Traits;
use Illuminate\Http\Request;

trait uploadFile
{

    public function uploadFile($file, $path)
    {
        $file_extension = $file->getClientOriginalExtension();
        $file_name = time() . '.' . $file_extension;

        $file->move($path, $file_name);
        return $file_name;
    }
}
