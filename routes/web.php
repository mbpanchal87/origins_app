<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/signup', fn() => view('signup'))->name('signup');
Route::post('/signup',[AuthController::class, 'signup']);
Route::get('/login', fn() => view('login'))->name('login');
Route::post('/login',[AuthController::class, 'login']);

Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function(){
	Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
	Route::get('/create_task', fn() => view('create_task'))->name('create_task');
	Route::post('/create_task',[TaskController::class, 'create_task']);
	
	Route::get('/task_list',[TaskController::class, 'task_list'])->name('task_list');
	Route::get('/edittask/{id}',[TaskController::class, 'edit'])->name('edittask');
	Route::put('/updatetask/{id}',[TaskController::class, 'update'])->name('updatetask');
	Route::delete('/deletetask/{id}',[TaskController::class, 'delete'])->name('taskdelete');
});