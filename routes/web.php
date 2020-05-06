<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});


Route::get("/todo","todo@Todo");
Route::post("/todo_save","todo@getData");

// edit feature
Route::get("/todo_edit/{id}","todo@editData");
Route::post("/todo_save_edit/{id}","todo@editsaveData");

// delete feature
Route::get("/todo_delete/{id}","todo@deleteData");

// status feature
Route::get("/todo_status/{id}/{status}","todo@statusData");
