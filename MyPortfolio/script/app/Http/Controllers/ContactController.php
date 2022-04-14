<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
    	$this->validate($request,[
    	'name' => 'required',
    	'email' => 'required',
    	'subject' => 'required',
    	'message' => 'required',
	    ]);

	    $contact = [
	    	'name' => $request->name,
	    	'email' => $request->email,
	    	'subject' => $request->subject,
	    	'message' => $request->message,
	    ];

	    Mail::to($request->email)->send(new ContactMail($contact));

	    return "Thanks for message me.";
    }
}
