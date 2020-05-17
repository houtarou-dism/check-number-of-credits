<?php


Route::get('/', 'CheckCreditController@index')->name('index');
Route::post('select_year', 'CheckCreditController@select_year')->name('select_year');

//大学１年次
//Route::post('/select_year/freshman/1', 'FreshmanController@freshman')->name('freshman.freshman');

//大学２年次
//Route::post('/select_year/sophomore/1', 'SophomoreController@freshman')->name('sophomore.freshman');
Route::post('/select_year/sophomore/1', 'SophomoreController@sophomore')->name('sophomore.sophomore');

//大学３年次
//Route::post('/select_year/junior/1', 'JuniorController@freshman')->name('junior.freshman');
Route::post('/select_year/junior/1', 'JuniorController@sophomore')->name('junior.sophomore');
Route::post('/select_year/junior/2', 'JuniorController@junior')->name('junior.junior');

//大学４年次
//Route::post('/select_year/senior/1', 'SeniorController@freshman')->name('senior.freshman');
Route::post('/select_year/senior/1', 'SeniorController@sophomore')->name('senior.sophomore');
Route::post('/select_year/senior/2', 'SeniorController@junior')->name('senior.junior');
Route::post('/select_year/senior/3', 'SeniorController@senior')->name('senior.senior');
