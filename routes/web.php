<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;


// home todo route
Route::get('/',[TodosController::class, 'index'])->name("todo.home");

// create todo route
Route::get('/create', function () {
    return view('create');
})->name("todo.create");

//edit todo route
Route::get('/edit/{id}',[TodosController::class,'edit'])->name("todo.edit");

//update todo route
Route::post('/update', [TodosController::class,'updateData'])->name("todo.updateData");

//store todo route
Route::post('/create', [TodosController::class,'store'])->name("todo.store");

//delete toto route
