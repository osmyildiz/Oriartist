<?php

namespace App\Http\Controllers;


use App\Mail\ApplicantEmail;
use Illuminate\Support\Facades\Mail;


class MailController extends Controller
{
    public static function sendApplicantEmail($subject,$name, $email, $phone,$city,$message){
        $data = [
            'subject'=>$subject,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'city' => $city,
            'message' => $message,

        ];
        Mail::to('info@oriartists.co.uk')->send(new ApplicantEmail($data));
    }

}
