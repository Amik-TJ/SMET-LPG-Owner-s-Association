<?php

namespace App\Http\Controllers\Landing_Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{

    public function contact_us_send_message(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);


        $name = $request->input('name');
        $email = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        $phone = $request->input('phone');

        $contact = new ContactUs();
        $contact->name = $name;
        $contact->email = $email;
        $contact->subject = $subject;
        $contact->message = $message;
        $contact->phone = $phone;
        $contact->seen = 0;
        $contact->save();

        return "Your Message has been successfully Sent";
    }


    public function view_contact_us_messages()
    {
        $this->middleware('auth');


        $messages = ContactUs::orderBy('created_at', 'desc')->get();


        $data = array(
            'm_found' =>false,
            'seen_count' => 0,
        );

        if ($messages->isEmpty())
            return view('admin.view_contact_us')->with('data',$data);


        $seen_count = ContactUs::where('seen',0)->count();

        $data = array(
            'm_found' =>true,
            'seen_count' => $seen_count,
            'messages' => $messages,
        );


        return view('admin.view_contact_us')->with('data',$data);
    }


    public function view_individual_message(Request $request)
    {
        $msg_id = $request->input('msg_id');

        $message = ContactUs::find($msg_id);
        $message->seen = 1;
        $message->save();


        return view('admin.view_individual_contact_message')->with('data',$message);
    }
}
