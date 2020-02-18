<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

   /**
     * Create a new message instance.
     *
     * @return void
     */
    public $orderPlace;
    public function __construct($orderPlace)
    {
        $this->orderPlace = $orderPlace;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

       $orderPlace = $this->orderPlace;

        return $this->view('frontend.mail_template.success_payment_mail', compact('orderPlace'));
    }
}
