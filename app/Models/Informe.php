<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{

    use HasFactory;

    protected $guarded = ['id'];

    //relacion uno a muchos inversa
    public function personals(){
        return $this->belongsTo('App\Models\Personal');
    }

    public function instalacions(){
        return $this->belongsTo('App\Models\Instalacion');
    }
}
