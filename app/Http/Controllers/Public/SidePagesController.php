<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Topic;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Traits\incrementViews;

class SidePagesController extends Controller
{
use incrementViews;
    /**
    2) SidePage
     */
    public function allTestimonials()
    {
        $testimonials = Testimonial::get();
        return view('public.testimonials', compact('testimonials'));
    }

    public function listings()
    {
        #<!------AllTopics section section-------¡>
        $topics = Topic::paginate(5);  #pages numbering/pagination  #5 is for 5 topics each page

        #<!------Trendings section section-------¡>
        $trendings = Topic::orderBy('views', 'desc')->where('published', 1)->take(2)->get();

        return view('public.topics-listings', compact('topics', 'trendings'));
    }

    public function details(string $id)
    {
        $details = Topic::with('category')->findOrFail($id);
        #dd($topic);
        return view('public.topics-details', compact('details'));
    }

}
