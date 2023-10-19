<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned  to the "web" middleware group. Make something great!
|
*/
Route::get('/{cat}/{id}/{title}', [\App\Http\Controllers\CatController::class,'index'])
    ->where('cat', 'sport|economy|values')
    ->whereNumber('id')
    ->whereAlpha('title');

