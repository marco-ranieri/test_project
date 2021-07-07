<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'body',
        'price',
        'category_id',

    ];

    public function category() {

        return $this->belongsTo(Category::class);
    }

    public function user() {

        return $this->belongsTo(User::class);
    }

    static public function toBeRevisionedCount() {

        return Announcement::where('is_accepted', null)->where('is_deleted', false)->count();
    }

    static public function rejectedCount() {

        return Announcement::where('is_accepted', false)->where('is_deleted', false)->count();
    }

    static public function deletedCount() {

        return Announcement::where('is_deleted', true)->count();
    }
}
