<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task1Controller;
use App\Http\Controllers\Task2Controller;
use App\Http\Controllers\Task3Controller;

Route::get('/task1', [Task1Controller::class, 'showForm']);
Route::post('/task1-result', [Task1Controller::class, 'store'])->name('task1.store');

Route::get('/task2', [Task2Controller::class, 'showForm']);
Route::post('/task2-result', [Task2Controller::class, 'store'])->name('task2.store');

Route::get('/task3', [Task3Controller::class, 'showForm']);
Route::post('/task3-result', [Task3Controller::class, 'store'])->name('task3.store');