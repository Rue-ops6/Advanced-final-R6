<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    /**
     1)  Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }
    public function contactus()
    {
        return view('contactus');
    }
    public function listings()
    {
        return view('topics-listings');
    }
    public function details()
    {
        return view('topics-details');
    }

/*
   2)
*/

}
