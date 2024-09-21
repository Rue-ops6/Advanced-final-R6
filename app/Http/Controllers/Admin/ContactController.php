<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    #use Common;
    public function contactus()
    {
        // Fetching unread messages
        $unreadMsg = Contact::where('status', 0)->get();
        // Fetching read messages
        $readMsg = Contact::where('status', 1)->get();
        return view('admin.messages.messages', compact('unreadMsg', 'readMsg'));
    }

    public function show(string $id)
    {
        // Find the message
        $details = Contact::findOrFail($id);
        // Check if the message is unread = 0, and mark it as read = 1
        if ($details->status === 0) {
            $details->update(['status' => 1]);
        // if ($details->status === 0) {
        //     $details->status = 1;
        //$details->save();
        }
        $updatedDetails = Contact::findOrFail($id);
        // dd($details->status);
        // Return the details view with the message
        return view('admin.messages.message_details', compact('details'));
    }

    public function contactFrom()
    {
        return view('contact');
    } //->where(["name" => "[A-Za-z]+"]);

#facade //use Illuminate\Http\Request;
    public function sendTo(Request $request) #request for the method POST
    {
        #dd($request->all()); we don't want the token tho
        $data = $request->except('_token');
        // dd($data);
        /*Mail::to('test@example.com')->send(new ContactMailer($data));
    return "Msg sent successfuly";
     */
    }

    public function force_delete(string $id)
    {
        // $id = $request->id;
        Contact::where('id', $id)->forceDelete();
        // return " data delete successfully";
        return redirect()->route("messages.list");
    }

}
