<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    #use Common;

    public function users()
    {
        /* get all users from db '
        return view all users, users data
        select * from users = User::get();*/
        $users = User::get();
        return view('admin.users.users', compact('users'));
    }

    /*    #2)
     * Show the form for creating a new resource.
     */
    public function create()
    {
        #DB relation

    }

    ///////////////////////
    public function add_user()
    {
        return view('admin.users.add_user');
    }
    public function edit_user()
    {
        return view('admin.users.edit_user');
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
        User::where('id', $id)->forceDelete();
        // return " data delete successfully";
        return redirect()->route("users.list");
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
