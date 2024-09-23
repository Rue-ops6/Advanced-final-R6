<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Topic;
use App\Traits\uploadFile;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    use uploadFile;

    /*    #1)
     * Display a listing of the resource.
     */
    public function topics()
    {
        /* get all topics from db '
        return view all topics, topics data
        select * from topics = Topic::get();*/
        $topics = Topic::get();
        $category = Category::find(1);
        $trendings = Topic::orderBy('views', 'desc')->where('published', 1)->take(2)->get();
        return view('admin.topics.topics', compact('topics', 'trendings', 'category'));
    }

    /*    #2)
     * Show the form for creating a new resource.
     */
    public function create()
    {
        #DB relation
        $category = Category::select('id', 'catName')->get();
        return view('admin.topics.add_topic', compact('category'));
    }

    /*    #3)
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        // \Log::info($request->all());
        $data = $request->validate([
            'topicTitle' => "required|string|max:100",
            'content' => "required|string|max:1000",
            'image' => "required|mimes:png,jpg,jpeg|max:2048",
            'catID' => "required|exists:categories,id",
        ]); #,$message);

        $data['published'] = isset($request->published);
        $data['views'] = isset($request->views) ? 20 : 0; ##Add 20 to the current views value to be in tops = trending
        $data['image'] = $this->uploadFile($request->image, "assets/admin/images/topics");

        // Check how many topics are currently marked as trending
        /*$trendingCount = Topic::where('trendings', 1)->count();
        // Initialize the trending status for the new topic
        $data['trendings'] = 0; // Default value
        // If there are fewer than 2 trending topics, mark this one as trending
        if ($trendingCount < 2) {
        $data['trending'] = 1; // Mark as trending if space is available
        }*/

        #dd($data);
        Topic::create($data);

        return redirect()->route('topics.list');
    }

    /*    #4)
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $details = Topic::with('category')->findOrFail($id);
        #$data['image'] = $this->uploadFile($request->image,"assets/images");
        #dd($topic);
        return view('admin.topics.topic_details', compact('details'));
    }

    /*    #5)
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $topic = Topic::findOrFail($id);
        $category = Category::select('id', 'catName')->get();
        //dd($topics->all());
        #return "topics = " . $id;
        return view('admin.topics.edit_topic', compact('topic', 'category'));
    }

    /*    #6)
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { //dd($request,$id);
        // \Log::info($request->all());

        #validation:
        $data = $request->validate([
            'topicTitle' => "required|string|max:100",
            'content' => "required|string|max:1000",
            'image' => "sometimes|mimes:png,jpg,jpeg|max:2048",
            'catID' => "required|integer|exists:categories,id",
        ]);

        $data['published'] = isset($request->published);
        $topic = Topic::findOrFail($id);
        $data['views'] = isset($request->views) ? $topic->views + 20 : $topic->views;
        /*if (isset($request->views)) {
        $data['views'] = $topic->views + 20; // Add 20 to the current views value to be in tops = trending
        } else {
        $data['views'] = $topic->views; // Keep the current views value if not checked
        }*/
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, "assets/admin/images/topics");
        }

        /*// $trendings = Topic::orderBy('views', 'desc')->take(2)->get();
        // $data['views'] = $trendings->isNotEmpty() ? $trendings->first()->views : 0; // Set to 0 if no trending topics exist
        $trendingCount = Topic::where('trending', 1)->count();
        $topic = Topic::findOrFail($id);
        // Check if the user is requesting to mark this topic as trending
        if ($request->has('trending')) {
        // Only mark as trending if there are fewer than 2 trending topics or this topic is already trending
        if ($trendingCount < 2 || $topic->trending == 1) {
        $data['trending'] = 1;
        } else {
        // Prevent marking as trending if the limit is reached
        return redirect()->back()->withErrors(['trending' => 'There are already 2 trending topics.']);
        }
        } else {
        $data['trending'] = 0; // If unchecked, remove the trending status
        }*/
        #dd($data);
        //zi fi sql lw sebtaha hi3mel update * fa lazem a2wl where el class id =$id ell d5lto
        Topic::where('id', $id)->update($data);
        return redirect()->route('topics.list');
    }

    /*    #7)
     * Soft Delete.
     */
    public function softdel(string $id)
    {

    }

    /*    #8)
     * permenent del/ Remove the specified resource from storage.
     */
    public function force_delete(string $id)
    {
        // $id = $request->id;
        Topic::where('id', $id)->forceDelete();
        // return " data delete successfully";
        return redirect()->route("topics.list");
    }

    /*    #9)
     * show del.
     */
    public function showDeleted()
    {

    }
    // return redirect()->route("showDeleted");

    /*    #10)
     * restore.
     */
    public function restore(string $id)
    {

    }

}
