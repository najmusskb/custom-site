<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=> 'admin'],function(){
    Route::get('/dashboard','App\Http\Controllers\Backend\PagesController@index')->name('dashboard');
});
