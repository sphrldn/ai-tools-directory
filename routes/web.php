<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToolController;

// Route untuk halaman depan (Welcome)
Route::get('/', function () {
    return view('welcome');
});

// Route CRUD Tools
Route::resource('tools', ToolController::class);