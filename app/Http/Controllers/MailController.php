<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
class MailController extends Controller
{
    //
    function sendEmail(Request $request)
    {
        $to = $request->receiver;
        $subject = $request->subject;
        $msg = $request->msg;
        Mail::to($to)->send((new WelcomeMail($msg, $subject)));
        return "Function called";
        // $to = 'dekstonfung@gmail.com';
        // $msg = 'Dummy text from Dekston';
        // $subject = 'Laravel 11 Learning';

    }
}
