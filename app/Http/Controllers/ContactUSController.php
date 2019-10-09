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
    public function send(ContactUsRequest $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        );

        Mail::to('trevor.tanner.developer@gmail.com')->send(new \App\Mail\contactUS($data));
        return back()->with('success', 'Thanks for contacting us!');
    }

}
