<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function contact()
    {
        return view('frontend.contact');
    }


    public function contactpost(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'date' => 'required',
            'subject' => 'required',
            'category' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:contact-us,0.5'


        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->date = $request->date;
        $contact->subject = $request->subject;
        $contact->category = $request->category;
        $contact->message = $request->message;


        $contact->save();

        return redirect()->back()
            ->with('success', 'Message send successfully.');
    }
}
