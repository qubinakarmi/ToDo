<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});



// ADD Task Route
Route::view('add','add_task')->name('task.add');
Route::post('add',[TaskController::class,'add'])->name('add.add');

Route::get('list', [TaskController::class, 'listing']);


Route::get('delete/{id}',[TaskController::class, 'delete']);


Route::get('modify/{id}',[TaskController::class, 'modify']);










Route::put('edit-list/{id}',[TaskController::class,'editlist']);



