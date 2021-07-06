<?php

namespace App\Http\Controllers;

use App\Mail\RevisorRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{

    public function revisorRequest(){

        return view('revisor_request');

    }


    public function revisorRequestSubmit(Request $request){

        Mail::to('admin@test.it')->send(new RevisorRequestMail($request));

        return redirect(route('home'))->with('revisor.request.message', "Grazie, la tua richiesta è stata inoltrata all'amministratore");
    }
}
