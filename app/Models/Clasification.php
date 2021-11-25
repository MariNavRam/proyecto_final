<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasification extends Model
{
    use HasFactory;
    public function casas(){
        return $this->belongsToMany(Casas::class);
    }
}
