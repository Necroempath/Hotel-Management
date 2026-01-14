<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

route::get('/', [AdminController::class, 'home']);

route::get('/create_room', [AdminController::class, 'create_room']);

route::post('/add_room', [AdminController::class, 'add_room']);

route::get('/view_room', [AdminController::class, 'view_room']);

route::get('/room_delete/{id}', [AdminController::class, 'room_delete']);

route::get('/room_update/{id}', [AdminController::class, 'room_update']);

route::get('/home', [AdminController::class, 'index'])->name('home');