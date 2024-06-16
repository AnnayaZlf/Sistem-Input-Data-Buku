<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;


Route::get("/", "BukuController@login");
Route::post("/ceklogin", [AuthController::class, 'ceklogin']);

Route::get("/caribuku", "BukuController@caribuku");
Route::get("/actioncaribuku", "BukuController@actioncaribuku");


Route::middleware(['check.user'])->group(function () {

    Route::get("/menu", "BukuController@menu");
    Route::get("/buku", "BukuController@buku");
    Route::get("/buku/add", "BukuController@addbuku");
    Route::post("/save", "BukuController@savebuku");
    Route::get('/buku/edit/{id}', "BukuController@edit");
    Route::put('/update/{id}', "BukuController@update")->name('books.update');
    Route::get("/delete/{id}", "BukuController@delete");
    Route::get("/edituser", "BukuController@edituser");
    Route::post("/updateuser", "BukuController@updateuser");
    Route::get("/logout", [AuthController::class, 'ceklogout']);
});