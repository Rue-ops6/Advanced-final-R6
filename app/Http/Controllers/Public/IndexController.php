<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Testimonial;
use App\Models\Topic;
use App\Traits\incrementViews;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    use incrementViews; #Traits are for when you want to use the same function multitimes but don't want to repeat routes or controllers
    /*public function trendings(string $id)
    {
    // Increment the views by 20 when clicked on views bookmark
    $topic = Topic::findOrFail($id);
    $topic->views += 1;
    $topic->save();

    return redirect()->back();
    }*/

    /**Display a listing of the resource.
    1) HomePage
     */
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        // Search in topic titles and content
        $topics = Topic::with('category')
            ->where('topicTitle', 'LIKE', "%{$keyword}%")
            ->orWhere('content', 'LIKE', "%{$keyword}%")
            ->where('published', 1)
        // ->first(); // Get only the first match
            ->paginate(3);
        // ->get();

        if (!$topics) {
            return redirect()->back()->with('error', 'No topic found.');
        }

        $trendings = Topic::orderBy('views', 'desc')->where('published', 1)->take(2)->get(); #only to stop the error of trendengs undifined variable as listings blade include a lot of sections
        return view('public.topics-listings', compact('topics', 'keyword', 'trendings'));
    }

    public function index()
    {
        #<!------Trendings section section-------¡>
        $trendings = Topic::orderBy('views', 'desc')->where('published', 1)->take(2)->get(); #or we can combin more than one where

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
            ->orderBy('updated_at', 'desc')
            ->take('3')
            ->get();
        // dd($topics);

        return view('public.index', compact('trendings', 'categories', 'testimonials'));
    }

}
