<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderMade extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@pclife.com')
            ->view('emails.OrderMade');
    }
}
