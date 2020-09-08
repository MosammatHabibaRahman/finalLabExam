<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login','LoginController@verify');
Route::get('/logout','LogoutController@index')->name('logout.index');

Route::middleware(['sess'])->group(function(){

    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/admin/add', 'AdminController@add')->name('admin.add');
    Route::post('/admin/add', 'AdminController@store');
    Route::get('/admin/view', 'AdminController@view')->name('admin.view');
    Route::get('/admin/edit/{id}', 'AdminController@edit')->name('admin.edit');
    Route::get('/admin/delete/{id}', 'AdminController@delete')->name('admin.delete');
    
    Route::get('/employer', 'EmployerController@index')->name('employer.index');
});