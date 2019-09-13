<?php

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
    return view('ajax_index');
});

Route::resource('ajax-crud', 'AjaxCrudController');
Route::get('ajax-crud/destroy/{id}', 'AjaxCrudController@destroy');
Route::post('ajax-crud/update', 'AjaxCrudController@update')->name('ajax-crud.update');
