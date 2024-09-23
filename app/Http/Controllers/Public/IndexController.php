<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Topic;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Traits\incrementViews;

class IndexController extends Controller
{
    use incrementViews;  #Traits are for when you want to use the same function multitimes but don't want to repeat routes or controllers

    /**Display a listing of the resource.
    1) HomePage
     */
    public function trendings(string $id)
    {
        // Increment the views by 20 when clicked on views bookmark
        $topic = Topic::findOrFail($id);
        $topic->views += 1;
        $topic->save();

        return redirect()->back();
    }

    public function index()
    {
        #<!------Trendings section section-------¡>
        $trendings = Topic::orderBy('views', 'desc')->where('published', 1)->take(2)->get();

        #<!------topicsCategory section-------¡>

        $categories = Category::with([
            'topics' => function ($query) {
                $query->where('published', 1)->latest()->take(3); #what we show from topics within the category
            }])
            ->latest()
            ->take('5')
            ->get(); #cwhat we show from category
        // dd($categories);

        #<!------topicsCategory section-------¡>
        $testimonials = Testimonial::where('published', 1)
            ->latest()
            ->take('3')
            ->get();
        // dd($topics);

        return view('public.index', compact('trendings', 'categories', 'testimonials'));
    }

}
