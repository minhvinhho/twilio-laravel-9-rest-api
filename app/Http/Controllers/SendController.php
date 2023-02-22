<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SendController extends Controller
{
    public function index(Request $request)
    {
        $sid    = env("TWILIO_AUTH_SID");
        $token  = env("TWILIO_AUTH_TOKEN");
        $wa_from = env("TWILIO_WHATSAPP_FROM");
        $twilio = new Client($sid, $token);

        $recipient = env("RECIPIENT");

        return $twilio->messages->create('whatsapp:' . $recipient, [
            "from" => 'whatsapp:' . $wa_from,
            "body" => "Testing Twillio"
        ]);
    }
}
