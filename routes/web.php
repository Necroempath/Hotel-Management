<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

route::get('/', [AdminController::class, 'home']);



route::get('/home', [AdminController::class, 'index'])->name('home');