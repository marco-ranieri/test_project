<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Mail\RevisorRequestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use App\Http\Requests\AnnouncementRequest;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }


    public function newAnnouncement() {

        return view('announcements.new');
    }

    public function storeAnnouncement(AnnouncementRequest $request) {

        Announcement::create([

            'title' => $request->title,
            'body' => $request->body,
            'price' => $request->price,
            'category_id' => $request->category,

        ]);

        return redirect('/')->with('announcement.created.success', 'ok');

    }


    public function revisorRequest(){

        return view('revisor_request');

    }


    public function revisorRequestSubmit(Request $request){

        Mail::to('admin@test.it')->send(new RevisorRequestMail($request));

        return redirect(route('home'))->with('revisor.request.message', "Grazie, la tua richiesta è stata inoltrata all'amministratore");
    }
}
