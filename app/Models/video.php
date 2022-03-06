<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    public function tracks() {
        return $this->belongsToMany(track::class);
    }

    public function commenters() {
        return $this->belongsToMany(commenter::class);
    }

    public function channel() {
        return $this->belongsTo(channel::class);
    }
}
