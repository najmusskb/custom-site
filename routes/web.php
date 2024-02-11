<!-- Brand Route for crud Operation -->
 
<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=> 'admin'],function(){
    Route::get('/dashboard','App\Http\Controllers\Backend\PagesController@index')->name('dashboard');

    
    
    //---------------------------------------------------------------------

    // 01
    Route::group(['prefix'=>'brand'], function(){
    // manage er sob dekha jabe ei route er
    Route::get('/manage','App\Http\Controllers\Backend\BrandController@index')->name('brand.manage');

 // 02
    // Create route
    Route::get('/create','App\Http\Controllers\Backend\BrandController@create')->name('brand.create');

 // 03
    // Make a Store 
    Route::post('/create','App\Http\Controllers\Backend\BrandController@store')->name('brand.store');

 // 04
    // Make a edit 
    Route::get('/edit/{id}','App\Http\Controllers\Backend\BrandController@edit')->name('brand.edit');


 // 05
    // Make a update 
    Route::post('/edit/{id}','App\Http\Controllers\Backend\BrandController@update')->name('brand.update');


 // 01
    // Make a Delete 
    Route::post('/delete/{id}','App\Http\Controllers\Backend\BrandController@destroy')->name('brand.destroy');




    });

});
