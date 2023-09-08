<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailForm extends Mailable // для отправки имейлов
{
    use Queueable, SerializesModels;

   protected $formData = [];
    public function __construct($formData)
    {
        $this->formData=$formData;
    }

    public function build()
    {
        return $this->view('emails.form')->with($this->formData);
    }


}
