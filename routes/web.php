<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify');
Route::get('/logout','LogoutController@index')->name('logout.index');

Route::middleware(['sess'])->group(function(){

    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/admin/add', 'AdminController@add')->name('admin.add');
    Route::get('/admin/view', 'AdminController@view')->name('admin.view');
    Route::get('/employer', 'EmployerController@index')->name('employer.index');
});