<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use App\Models\Topic;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Traits\UploadFileTrait;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view('index');
    }
}
