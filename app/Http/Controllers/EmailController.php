<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send()
    {
        $title = "some title ";
        $content = "here goes some content for the email notification!!";

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message) {

            $message->from('me@gmail.com', 'NK');

            $message->to('nimesha95@live.com');

        });
        return response()->json(['message' => 'Request completed']);
    }
}
