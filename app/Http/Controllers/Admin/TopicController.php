<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Common;
use App\Models\Topic;
use App\Models\Category;

class TopicController extends Controller
{
    #use Common;

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
        $trendings = Topic::orderBy('views', 'desc')->take(2)->get();
        return view('admin.topics.topics', compact('topics', 'trendings', 'category'));
    }

    /*    #2)
     * Show the form for creating a new resource.
     */
    public function create()
    {
        #DB relation

    }

        ///////////////////////
    public function topic_details()
    {
        return view('admin.topics.topic_details');
    }
    public function add_topic()
    {
        return view('admin.topics.add_topic');
    }
    public function edit_topic()
    {
        return view('admin.topics.edit_topic');
    }
    ///////////////////////


    /*    #3)
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);

    }

    /*    #4)
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /*    #5)
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /*    #6)
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { //dd($request,$id);

        #validation:

    }
#dd($data);

    //zi fi sql lw sebtaha hi3mel update * fa lazem a2wl where el class id =$id ell d5lto

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
        Topic::where('id',$id)->forceDelete();
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
