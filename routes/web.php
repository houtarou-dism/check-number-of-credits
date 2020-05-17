<?php


Route::get('/', 'CheckCreditController@index')->name('index');
Route::post('select_year', 'CheckCreditController@select_year')->name('select_year');
Route::post('freshman', 'CheckCreditController@freshman')->name('freshman');
