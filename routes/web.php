<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('welcome');
});

// Routes pour le CRUD des clients
Route::resource('clients', ClientController::class);
