<?php

namespace App\Http\Controllers;

use App\Mail\DeliveryAccepted;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use Nexmo\Laravel\Facade\Nexmo;

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

    }

    public function test(Request $request)
    {
        if ($request['cur_job_id']) {
            Mail::to('nimesha95@live.com')->send(New DeliveryAccepted());

            Nexmo::message()->send([
                'to' => '94778519113',
                'from' => 'PC Life',
                'text' => 'Your order is on it\'s way to you'
            ]);

            return response()->json(['msg' => $request['notification sent']]);
        }

    }
}
