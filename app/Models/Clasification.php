<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasification extends Model
{
    use HasFactory;
    protected $table = 'clasifications';
    protected $fillable =[
        'name',
        'description',
        'material',

        ];
    public function casas(){
        return $this->belongsToMany(Casas::class);
    }
}
