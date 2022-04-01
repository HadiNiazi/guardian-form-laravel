<?php

namespace App\Http\Controllers;

use App\Mail\GuardianRegistrationEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $email = 'niazicr801@gmail.com';
        $data = [
            'name' => 'Hadi',
            'email' => 'niazicr801@gmail.com'
        ];

        Mail::to($email)->send(new GuardianRegistrationEmail($data));

        return 'Email sent successfully';
    }
}
