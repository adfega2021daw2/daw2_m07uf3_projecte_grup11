<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/registrar', function () {
    return view('registrar');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/loginAdmin', function () {
    return view('loginAdmin');
});

Route::get('/loginUser', function () {
    return view('loginUsuari');
});

Route::resource('ong', ControladorOng::class);

Route::resource('treballadors', ControladorTreballador::class);

Route::resource('socis', ControladorSoci::class);

Route::resource('usuaris', ControladorUsuaris::class);


Route::get('/loginAdministrador',[ControladorUsuaris::class, 'loginAd']);
