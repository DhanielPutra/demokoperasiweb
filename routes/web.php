<?php

use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('anggota');
});
Route::resource('/index',AnggotaController::class)->except('show');