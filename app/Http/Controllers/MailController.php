<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;


class MailController extends Controller
{
    public function sendEmail(Request $request){

        $details = [
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'email'=>$request->email,
            'numero'=>$request->numero,
            'msg'=>$request->msg,

        ];

        Mail::to('cristof.lopez333@gmail.com')->send(new TestMail($details));

        return back()->with('message_sent','¡Tu mensaje fue enviado con exito!');


    }
}
