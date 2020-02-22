<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendForgetPasswordVerifyCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $Info;
    public function __construct($userInfo)
    {
        $this->Info = $userInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $userInfo = $this->Info;
        return $this->view('frontend.accounts.verification_mail_template.forget_password_mail_template', compact('userInfo'));
    }
}
