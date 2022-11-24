<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public function publisher() {
        $this->belongsTo(Publisher::class);
    }
    public function categories() {
        $this->belongsToMany(Categories::class);
    }
}
