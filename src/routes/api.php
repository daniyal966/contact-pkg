<?php


use Illuminate\Http\Request;

Route::group(['namespace'=>'Alice\Config\Http\Controllers'], function(){
    Route::post('contact-alice','ContactController@index')->name('contactALice'); 

    Route::post('contact', 'ContactController@send');
});