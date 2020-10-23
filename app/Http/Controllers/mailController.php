<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function sendMessage(Request $request)
    {
        $from_name = $request->requestname;
        $from_email = $request->requestemail;
        $from_text = $request->requestmessage;
        // Send Data To View
        $data = array("name" => $from_name, "body" => $from_text, "email" => $from_email);
        // Send Mail
        Mail::send('mail', $data, function ($message) use ($from_name, $from_email, $from_text) {
            $message->to("sosocial.media2020@gmail.com")->subject("Test Lawyer With client");
        });
        return view('reservation');
    }
}
