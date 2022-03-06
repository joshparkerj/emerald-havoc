<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    public function tracks() {
        return $this->belongsToMany(Track::class);
    }

    public function commenters() {
        return $this->belongsToMany(Commenter::class);
    }

    public function channel() {
        return $this->belongsTo(Channel::class);
    }
}
