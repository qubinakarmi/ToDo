<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});



// ADD Task Route
Route::view('add','add_task');
Route::post('add',[TaskController::class,'add']);

Route::get('list', [TaskController::class, 'listing']);
Route::get('delete/{id}',[TaskController::class, 'delete']);



