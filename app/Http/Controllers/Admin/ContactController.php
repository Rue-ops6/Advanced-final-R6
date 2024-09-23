<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Mail\QuotingMail;
use App\Models\Contact;
use App\Models\User;
use App\Traits\uploadFile;
use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    use uploadFile;
#<!------public pages-------¡>
    public function contactForm()
    {
        #dd(session('test'));
        return view('Mail.contactForm');
    } //->where(["name" => "[A-Za-z]+"]);

#facade //use Illuminate\Http\Request;
    public function contactEmail(Request $request) #$request for the method POST/Patch/Put/Delete requests
    {
        #To add it in DB
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email',
            'msgTitle' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        //dd($request->all()); //we don't want the (token=@csrf) tho
        $data = $request->except('_token');
        // dd($data);
        Mail::to('test@example.com')->send(new ContactMail($data));
        #Mail::to (env('MAIL_FROM_ADDRESS'))->send(new ContactMail($data));  //cofig caches what's in .env... Thus don't use .env outside config. we can use config helper

        #To add it in DB
        Contact::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'msgTitle' => $data['msgTitle'],
            'content' => $data['content'],
        ]);

        return "Msg sent via Email and stored in DB successfuly";
        // added once and for all in any controller's function
        // session()->put('test', 'First Laravel session');
        // session()->flash('test', 'First Laravel session');
    }

    public function MailQuoting(Request $request) #$request for the method POST/Patch/Put/Delete requests
    {
        // Validate the input email to make only users capable to subscribe
        $request->validate([
            'email' => 'required|email',
        ]);
        // Check if the email exists in the users table
        $user = User::where('email', $request->input('email'))->first();
        if ($user) {
            // NewsletterSubscription::create(['email' => $request->input('subscribe-email')]);
            Mail::to($user['email'])->send(new QuotingMail);
            return redirect()->back()->with('success', 'Congrats! you are now enjoing our QNS subscription');
        } else {
            return redirect()->route('register')->withErrors(['email' => 'Email not found in our database.']);
        }
    }

#<!------admin pages-------¡>
    public function messages()
    {
        // Fetching unread messages
        $unreadMsg = Contact::where('status', 0)->get();
        // Fetching read messages
        $readMsg = Contact::where('status', 1)->get();
        return view('Mail.messages.messages', compact('unreadMsg', 'readMsg'));
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
        // dd($details->status);
        // Return the details view with the message
        return view('Mail.messages.message_details', compact('details'));
    }

    public function force_delete(string $id)
    {
        // $id = $request->id;
        Contact::where('id', $id)->forceDelete();
        // return " data delete successfully";
        return redirect()->route("messages.list");
    }

}
