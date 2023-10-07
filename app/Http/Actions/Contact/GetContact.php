<?php

namespace App\Http\Actions\Contact;

use App\Models\Contact;

class GetContact
{
    public function execute()
    {
        $contact = Contact::all();
        return $contact;
    }
}
