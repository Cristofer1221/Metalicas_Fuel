<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AsistenciaController;
use App\Http\Controllers\Admin\FechaController;
use App\Http\Controllers\Admin\ConteoController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\InstalacionController;
use App\Http\Controllers\Admin\InformeController;




Route::get('',[HomeController::class, 'index'])->name('admin.index');

Route::resource('roles',RoleController::class)->names('admin.roles');

Route::resource('users',UserController::class)->names('admin.users');

Route::resource('asistencias',AsistenciaController::class)->names('admin.asistencias');

Route::resource('fechas',FechaController::class)->names('admin.fechas');

Route::get('conteo',[ConteoController::class,'index'])->name('admin.conteo');

Route::resource('clientes', ClienteController::class)->names('admin.clientes');

Route::resource('instalaciones', InstalacionController::class)->names('admin.instalaciones');

Route::resource('informes', InformeController::class)->names('admin.informes');











