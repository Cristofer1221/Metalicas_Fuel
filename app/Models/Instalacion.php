<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instalacion extends Model
{

    use HasFactory;

    protected $guarded = ['id'];

    //relacion uno a muchos desde personal(inversa)
    public function personals(){
        return $this->belongsTo('App\Models\Personal');
    }

    //relacion uno a muchos desde cliente (inversa)
    public function clientes(){
        return $this->belongsTo('App\Models\Cliente');
    }

    //relacion uno a uno
    public function informes(){
        return $this ->hasOne('App\Models\Informe');
    }



}
