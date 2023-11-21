<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::view('PanelUsuario',"PanelUsuario")->name('PanelUsuario');
Route::post('/inicia-sesion', [LoginController::class,'login'])->name('inicia-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');