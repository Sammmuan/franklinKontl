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
    return view('IndividuUser');
});

Route::get('/institusi', function () {
    return view('institusi');
});

Route::get('/IndividuUser', function () {
    return view('IndividuUser');
});

Route::get('/cekJadwal', function () {
    return view('cekJadwal');
});
