<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\ContactMailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

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

}
