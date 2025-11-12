<?php

use Illuminate\Support\Facades\Route;

// TaskControllerクラスを名前空間でインポートする
use App\Http\Controllers\TaskController;

// FolderControllerクラスを名前空間でインポートする
use App\Http\Controllers\FolderController;


// Laravel welcome Page
Route::get('/', function () {
    return view('welcome');
});

// index page
Route::get('/folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');

// folders new create page
Route::get('/folders/create', [FolderController::class, 'showCreateForm'])->name('folders.create');
Route::post('/folders/create', [FolderController::class, 'create']);
