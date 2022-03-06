<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class track extends Model
{
    use HasFactory;

    public function artist() {
        return $this->belongsTo(Artist::class);
    }

    public function videos() {
        return $this->belongsToMany(Video::class);
    }
}
