<?php

use Illuminate\Support\Facades\Route;

// TaskControllerクラスを名前空間でインポートする
use App\Http\Controllers\TaskController;


// Laravel welcome Page
Route::get('/', function () {
    return view('welcome');
});

// index page
Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');
