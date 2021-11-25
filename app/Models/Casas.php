<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casas extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'casas';
    protected $fillable = ['nombre', 'imagen', 'descripcion','categories', 'clasification', 'precio' ];

    public function categorias(){
        return $this->belongToMany(Category::class);
    }
    public function clasificacion(){
        return $this->belongsTo(Clasification::class);
    }
}

