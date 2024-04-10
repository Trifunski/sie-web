<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactPage;
use App\Mail\Contact;

class ContactController extends Controller
{

    public function index()
    {

        $contactData = ContactPage::all();

        $contactData = $contactData->toArray();

        return view('contact')->with('contactData', $contactData);
    }

    public function send(Request $request)
    {
/*         dd($request->all()); */
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $contactData = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('trifunski@calimasolutions.com')->send(new Contact($contactData));

        // Send the email
        return redirect('/contact')->with('message', 'Thanks for your message. We\'ll be in touch.');
    }
}