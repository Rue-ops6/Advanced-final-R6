<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\Common;
use App\Models\Testimonial;


class TestimonialController extends Controller
{
        #use Common;

###))) public pages

    /**
    1)  Display a listing of the resource.
     */
    public function allTestimonials()
    {

        return view('public.testimonials');
    }

###))) public pages

    public function testimonials()
    {
        /* get all testimonials from db '
        return view all testimonials, testimonials data
        select * from testimonials = Testimonial::get();*/
        $testimonials = Testimonial::get();
        return view('admin.testimonials.testimonials', compact ('testimonials'));
    }


    /*    #2)
     * Show the form for creating a new resource.
     */
    public function create()
    {
        #DB relation

        }


            ///////////////////////
            public function add_testimonial()
            {
                return view('admin.testimonials.add_testimonial');
            }
            public function edit_testimonial()
            {
                return view('admin.testimonials.edit_testimonial');
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
    {            //dd($request,$id);

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
    Testimonial::where('id',$id)->forceDelete();
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

