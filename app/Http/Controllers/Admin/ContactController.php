<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Traits\Common;
use App\Model\Contact;
use GuzzleHttp\Psr7\Message;

class ContactController extends Controller
{
    #use Common;

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
    ///////////////////////
//  /*       public function messages()
//         {
//             /* get all topics from db '
//             return view all topics, topics data
//             select * from topics = Topic::get();*/
//             $messages = Message::get();
//             return view('admin.messages.messages', compact('messages'));
//         }

    public function message_details()
    {
        return view('admin.messages.message_details');
    }

    ///////////////////////

}
