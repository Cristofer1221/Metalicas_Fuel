<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{

    use HasFactory;

    protected $guarded = ['id'];
    //recuperar la informacion del usuario
    //relacion uno a uno

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //relacion uno a muchos de asistencia

    public function asistencia(){
        return $this->hasMany('App\Models\Asistencia');
    }

    public function instalacions(){
        return $this->hasMany('App\Models\Instalacion');
    }


}
