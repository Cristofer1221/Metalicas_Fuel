<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class VentasController extends Controller
{
    public function index(){

        return view('admin.ventas.index');
    }

    public function create(){

        return view('admin.ventas.create');
    }

}
