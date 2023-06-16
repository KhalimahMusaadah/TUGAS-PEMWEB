<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('todo_lists', TodoListController::class);
Route::get('task/completed', [TodoListController::class, 'completedTasks'])->name('todo_lists.completed');
Route::get('task/not_completed', [TodoListController::class, 'notCompletedTasks'])->name('todo_lists.not_completed');

