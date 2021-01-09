<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\controllers\MainController;

use App\Http\Controllers\Lottocontroller;

Route::get('/', [MainController::class, "index"]);
Route::post('/insert/', [MainController::class, "insert"]);
Route::get('/mylogout/', [MainController::class, "logout"]);

Route::get('/lotto',[Lottocontroller::class,"lotto"]);

Route::get('/delete/{id}',[Maincontroller::class,"delete"]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



