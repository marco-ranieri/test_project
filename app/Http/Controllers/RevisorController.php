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

        $announcements = Announcement::where('is_accepted', null)->where('is_deleted', false)->orderBy('created_at', 'ASC')->paginate(5);

        return view('revisor.revisor_index', compact('announcements'));

    }

    public function revisorBin() {

        $announcements = Announcement::where('is_accepted', false)->where('is_deleted', false)->orderBy('created_at', 'ASC')->paginate(5);

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

    public function restore($announcement_id) {

        return $this->setAccepted($announcement_id, null);
    }


    private function setDeleted($announcement_id, $value) {

        $announcement = Announcement::find($announcement_id);
        $announcement->is_deleted = $value;
        $announcement->save();
        return redirect(route('revisor.bin'));
    }

    public function delete($announcement_id) {

        return $this->setDeleted($announcement_id, true);
    }

    public function powerRestore($announcement_id) {

        return $this->setDeleted($announcement_id, false);
    }

    public function deleted() {

        $announcements = Announcement::where('is_deleted', true)->orderBy('created_at', 'ASC')->paginate(5);

        return view('revisor.revisor_deleted', compact('announcements'));
    }
}
