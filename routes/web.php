<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealetController;

//Route::get('/', function () {return view('welcome');});

Route::get('/index', [HealetController::class,'indexPage'])->name('index');
Route::get('/about', [HealetController::class,'aboutPage'])->name('about');
Route::get('/blog', [HealetController::class,'blogPage'])->name('blog');
Route::get('/shop', [HealetController::class,'shopPage'])->name('shop');

