<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailCandidato extends Mailable
{
    use Queueable, SerializesModels;


    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('your_mail_here_@gmail.com')
            ->subject('Teste Vocacional -  Unidesc.')
            ->view('layouts.mail');
    }
}
