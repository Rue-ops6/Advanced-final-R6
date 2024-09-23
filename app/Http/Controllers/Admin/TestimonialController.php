<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Traits\uploadFile;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    use uploadFile;

    /*    #1)
     * testimonials' admin-index
     */
    public function testimonials()
    {
        /* get all testimonials from db '
        return view all testimonials, testimonials data
        select * from testimonials = Testimonial::get();*/
        $testimonials = Testimonial::get();
        return view('admin.testimonials.testimonials', compact('testimonials'));
    }

    /*    #2)
     * Show the form for creating a new resource.
     */
    public function create()
    {
        #DB relation
        return view('admin.testimonials.add_testimonial');
    }

    /*    #3)
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        // \Log::info($request->all());
        $data = $request->validate([
            'name' => "required|string|max:100",
            'content' => "required|string|max:1000",
            'image' => "required|mimes:png,jpg,jpeg|max:2048",
        ]); #,$message);
        $data['published'] = isset($request->published);
        $data['image'] = $this->uploadFile($request->image, "assets/admin/images/testimonials");

        #dd($data);
        Testimonial::create($data);
        return redirect()->route('testimonials.list');
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
        $test = Testimonial::findOrFail($id);
        //dd($topics->all());
        #return "topics = " . $id;
        return view('admin.testimonials.edit_testimonial', compact('test'));
    }

    /*    #6)
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { //dd($request,$id);
        // \Log::info($request->all());
        #validation:
        $data = $request->validate([
            'name' => "required|string|max:100",
            'content' => "required|string|max:1000",
            'image' => "nullable|mimes:png,jpg,jpeg|max:2048",
        ]); #,$message);
        $data['published'] = isset($request->published);
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->image, "assets/admin/images/testimonials");
        }
        #dd($data);
        //zi fi sql lw sebtaha hi3mel update * fa lazem a2wl where el class id =$id ell d5lto
        Testimonial::where('id', $id)->update($data);
        return redirect()->route('testimonials.list');

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
        Testimonial::where('id', $id)->forceDelete();
        // return " data delete successfully";
        return redirect()->route("testimonials.list");
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
