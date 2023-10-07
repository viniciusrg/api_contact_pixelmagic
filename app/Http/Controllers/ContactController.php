<?php

namespace App\Http\Controllers;

use App\Http\Actions\Contact\GetContact;
use App\Http\Actions\Contact\SetContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $req)
    {
        try {
            $contact = new SetContact();
            return $contact->execute($req);
        } catch (\Exception $exception) {
            return response()->json(['Error: ', $exception], 400);
        }
    }

    public function index()
    {
        try {
            $contact = new GetContact();
            return $contact->execute();
        } catch (\Exception $exception) {
            return response()->json(['Error: ', $exception], 400);
        }
    }
}
