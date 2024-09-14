<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    /**
    1)  Display a listing of the resource.
     */
    public function index()
    {
        return view('public.index');
    }
    public function contactus()
    {
        return view('public.contactus');
    }
    public function testimonials()
    {
        return view('public.testimonials');
    }
    public function listings()
    {
        return view('public.topics-listings');
    }
    public function details()
    {
        return view('public.topics-details');
    }

/*
2)
 */

}
