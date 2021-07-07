<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {

        $announcements = Announcement::where('is_accepted', true)->orderBy('created_at', 'DESC')->take(5)->get();
        return view('home', compact('announcements'));

    }

    public function announcementsByCategory($name, $id) {

        $category = Category::find($id);
        $announcements = $category->announcements()->where('is_accepted', true)->orderBy('created_at', 'DESC')->paginate(5);
        return view('announcements.index', compact('category', 'announcements'));
    }
}
