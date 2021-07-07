<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function __construct() {

        $this->middleware('auth.revisor');
    }

    public function revisorIndex() {

        $announcements = Announcement::where('is_accepted', null)->orderBy('created_at', 'DESC')->paginate(5);

        return view('revisor.revisor_index', compact('announcements'));

    }

    public function revisorBin() {

        $announcements = Announcement::where('is_accepted', false)->orderBy('created_at', 'DESC')->paginate(5);

        return view('revisor.revisor_bin', compact('announcements'));

    }

    private function setAccepted($announcement_id, $value) {

        $announcement = Announcement::find($announcement_id);
        $announcement->is_accepted = $value;
        $announcement->save();
        return redirect(route('revisor.index'));

    }

    public function accept($announcement_id) {

        return $this->setAccepted($announcement_id, true);
    }

    public function reject($announcement_id) {

        return $this->setAccepted($announcement_id, false);
    }
}
