<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify');

Route::middleware(['sess'])->group(function(){

    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/employer', 'EmployerController@index')->name('employer.index');
});