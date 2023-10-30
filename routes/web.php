<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;


Route::get('/', function () {
    return view('welcome');
});

// * about
Route::get('/about',[AboutController::class, 'Index'])->name('about.index');
Route::get('/create',[AboutController::class, 'createindex']);
Route::get('/contact',[AboutController::class, 'contactindex'])->name('contact.index');
// end


