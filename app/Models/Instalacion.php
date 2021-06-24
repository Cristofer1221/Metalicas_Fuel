<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instalacion extends Model
{

    use HasFactory;

    protected $guarded = ['id'];

    //relacion uno a muchos desde personal(inversa)
    public function usuario(){
        return $this->belongsTo('App\Models\User','usuarios_id');
    }

    //relacion uno a muchos desde cliente (inversa)
    public function cliente(){
        return $this->belongsTo('App\Models\Cliente','clientes_id');
    }







    //relacion uno a uno
    public function informes(){
        return $this ->hasOne('App\Models\Informe');
    }



}
