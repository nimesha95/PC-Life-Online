<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;

class EmailController extends Controller
{
    public function send()
    {

        Mail::to('nimesha95@live.com')->send(New TestMail());

        //$mailer = new Mailer(true);
        //$mailer
        //  ->to('nimesha95@live.com')
        // ->send(new TestMail());
        return redirect()->back();

        /*
        $title = "some title ";
        $content = "here goes some content for the email notification!!";

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message) {

            $message->from('me@gmail.com', 'NK');

            $message->to('nimesha95@live.com');

        });
        return response()->json(['message' => 'Request completed']);
        */
    }
}
