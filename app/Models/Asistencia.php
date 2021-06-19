<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Asistencia extends Model
{

    use HasFactory;

    protected $guarded = ['id'];

    //relacion uno a muchos (inversa)
    public function fecha(){
        return $this->belongsTo('App\Models\Fecha');
    }

    public function usuario(){
        return $this->belongsTo('App\Models\User');
    }

    public function asistencia_completa(){
        return Asistencia::
              join('users', 'users.id', '=', 'asistencias.usuarios_id')
            ->join('fechas', 'fechas.id', '=', 'asistencias.fecha_id')
            ->select('asistencias.*', 'users.name', 'fechas.fecha_trabajo')
            ->get();
    }



}
