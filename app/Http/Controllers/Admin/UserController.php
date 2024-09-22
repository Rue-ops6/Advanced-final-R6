<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\uploadFile;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use uploadFile;

    public function users()
    {
        #dd(session('test'));

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
        return view('admin.users.add_user');

    }

    /*    #3)
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // added once and for all in any controller's function
        // session()->put('test', 'First Laravel session');
        session()->flash('test', 'First Laravel session');

        //dd($request);
        $data = $request->validate([
            'FirstName' => "required|string|max:100",
            'LastName' => "required|string|max:100",
            'UserName' => "required|string|max:100",
            'email' => "required|email|unique:users",
            'password' => "required|min:8|confirmed", // for pwd and its 'confirmed' rule
        ]); #,$message);
        // Hash the password
        $data['password'] = bcrypt($data['password']);
        // once the user is added, he is active until he loss his session
        $data['active'] = 1;
        // To verify guest's email in order to acces admin dashboard
        $data['email_verified_at'] = now();
        // $user = User::create($data);
        // $user->sendEmailVerificationNotification(); #manually do it
        #dd($data);
        User::create($data);
        return redirect()->route('users.list')->with('success', 'User created and email verified.');
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
        $user = User::findOrFail($id);
        //dd($users->all());
        #return "users = " . $id;
        return view('admin.users.edit_user', compact('user'));
    }

    /*    #6)
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { //dd($request,$id);

        #validation:
        $data = $request->validate([
            'FirstName' => "required|string|max:100",
            'LastName' => "required|string|max:100",
            'UserName' => "required|string|max:100",
            'email' => "required|email|unique:users,email,$id",
            'password' => "required|min:8",
        ]); #,$message);
        // Hash the password
        $data['password'] = bcrypt($data['password']);
        // To verify guest's email in order to acces admin dashboard
        $data['email_verified_at'] = now();
        $data['active'] = $request->has('active') ? 1 : 0;
        #dd($data);
        //zi fi sql lw sebtaha hi3mel update * fa lazem a2wl where el class id =$id ell d5lto
        User::where('id', $id)->update($data);
        return redirect()->route('users.list');
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
