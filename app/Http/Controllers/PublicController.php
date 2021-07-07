<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {

        $announcements = Announcement::orderBy('created_at', 'DESC')->take(5)->get();
        return view('home', compact('announcements'));

    }
}
