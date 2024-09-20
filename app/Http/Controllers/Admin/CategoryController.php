<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    #use Common;
    public function categories()
    {
        /* get all categories from db '
        return view all categories, categories data
        select * from categories = Category::get();*/
        $categories = Category::get();
        return view('admin.categories.categories', compact('categories'));
    }

    /*    #2)
     * Show the form for creating a new resource.
     */
    public function create()
    {
        #DB relation

    }

    ///////////////////////
    public function add_category()
    {
        return view('admin.categories.add_category');
    }
    public function edit_category()
    {
        return view('admin.categories.edit_category');
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
        //1) Delete all topics associated with this category
        $category = Category::find($id);
        $category->topics()->delete();
        // Now delete the category
        $category->delete();
        /*$category = Category::findOrFail($id);
        $categories = Category::all(); // Fetch all categories
        $newCategoryId = 1;
        dd($newCategoryID);*/
        /*2)Nullify the foreign key for the topics
         *Topic::where('catID', $id)->update(['catID' => null]);
         *$category->delete();*/
        //3)Reassign topics to another category before deleting.
        /*Topic::where('catID', $id)->update(['catID' => $newCategoryID]);
        $category->delete();*/

        // $id = $request->id;
        Category::where('id', $id)->forceDelete();
        // return " data delete successfully";
        return redirect()->route("categories.list", compact('category'));
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
