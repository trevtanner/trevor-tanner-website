<?php

namespace App\Http\Controllers;

use App\ContactUS;
use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUSController extends Controller
{
    public function contactUS()
    {
        return view('contact');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contactUSPost(ContactUsRequest $request)
    {
        $contact = ContactUS::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        Mail::send('email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ),
            function($message)
            {
                $message->from('ttdevelopment.contactus@gmail.com');
                $message->to('trevor.tanner.developer@gmail.com', 'Admin')->subject('Contact Us Form Submission');
            });

                return back()->with('success', 'Thanks for contacting us!');
    }

}
