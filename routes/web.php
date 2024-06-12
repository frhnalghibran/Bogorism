<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WisataController;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/pariwisata', function () {
    return view('pariwisata' , [
        'pariwisata' => Wisata::all(),
        'kategori' => Kategori::all()
    ]);
});

Route::get('/', function () {
    return view('home');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/team', function () {
    return view('team');
});


Route::get('/destinasi', [DestinasiController::class,'home']);

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', [UserController::class,'login']);

Route::post('/logout', [UserController::class,'logout']);

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [UserController::class,'register']);

Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/tambahPariwisata', [WisataController::class, 'tambah']);
Route::post('/deletePariwisata', [WisataController::class, 'delete']);
Route::get('/editPariwisata/{id}', [WisataController::class, 'show']);
Route::post('/editPariwisata/{id}', [WisataController::class, 'edit']);

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/detail/{id}', [WisataController::class, 'showDetail'])->name('detail');

Route::get('/filter', [WisataController::class, 'filter'])->name('filter');



?>