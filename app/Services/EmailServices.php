<?php

namespace App\Http\Services;

use App\Mail\MailCandidato;
use Illuminate\Support\Facades\Mail;

class EmailServices{

    public static function sendEmail($data)
    {
        Mail::to($data->email)->send(new MailCandidato($data));
        return redirect()->back();
    }

}
