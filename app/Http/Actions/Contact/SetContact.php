<?php

namespace App\Http\Actions\Contact;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SetContact
{
    public function execute(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'contact_form' => 'required',
        ]);

        $data = $req->except(['_token']);

        $contact = new Contact();
        $contact->create($data);

        $email = env("EMAIL_ADMIN");

        try {
            Mail::send('mail.newContact', ['data' => $data], function ($mail) use ($email) {
                $mail->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                $mail->subject('Landing Page - PixelMagic');
                $mail->to($email);
            });
        } catch (\Exception $e) {
            // Nada
        }

        return response()->json();
    }
}
