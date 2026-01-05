<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

route::get('/', [AdminController::class, 'home']);

route::get('/create_room', [AdminController::class, 'create_room']);

route::post('/add_room', [AdminController::class, 'add_room']);

route::get('/view_room', [AdminController::class, 'view_room']);

route::get('/delete_room/{id}', [AdminController::class, 'delete_room']);

route::get('/home', [AdminController::class, 'index'])->name('home');