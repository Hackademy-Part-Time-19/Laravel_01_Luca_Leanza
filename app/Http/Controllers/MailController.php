<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendContact(Request $request)
    {
        $data = $request->all();

       

        if ($data["name"] == "" || $data["surname"] == "" || $data["email"] == "" || $data["dettaglioRichiesta"] == "") {
            return redirect()->route("chiSono")->with('error', 'Richiesta non inoltrata correttamente');
        } else {
            Mail::to("luca.leanza@gmail.com")->send(new ContactMail($data["name"], $data["surname"], $data["email"], $data["dettaglioRichiesta"]));
            return redirect()->route("chiSono")->with('success', 'Richiesta inoltrata correttamente');
        }
    }
}
