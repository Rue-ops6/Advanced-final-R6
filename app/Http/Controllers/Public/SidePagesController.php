<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Topic;
use App\Traits\incrementViews;
use Illuminate\Http\Request;

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

    public function listings(Request $request)
    {
        #<!------AllTopics section section-------¡>
        $currentPage = $request->input('page', 1);
        $topics = Topic::where('published', 1)->paginate(3); #pages numbering/pagination  #3 is for 3 topics each page
        // dd($topics);
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
