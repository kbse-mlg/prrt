<?php
Route::get('tambah', 'InsertController@index')->name('tambah');
Route::get('insert','InsertController@add')->name('insert');
Route::post('building/','InsertController@insertBuilding')->name('insertBuilding');
Route::get('facility','InsertController@addFacility')->name('addFacility');
Route::get('rumah/{id}','InsertController@rumahIndex')->name('indexRumah');
Route::get('penduduk','InsertController@pendudukIndex')->name('pendudukIndex');
Route::get('addfasility/{id}','InsertController@buildingFacility')->name('buildingFacility');
Route::post('insertfasility','InsertController@insertFacility')->name('insertFacility');
Route::get('newrumah/{id}','InsertController@newRumah')->name('newRumah');
Route::get('penduduk/{id}','InsertController@insertPenduduk')->name('insertPenduduk');
Route::post('newpenduduk','InsertController@newPenduduk')->name('addPenduduk');
Route::get('manage','InsertController@manage')->name('manage');
Route::get('manageedit/{$id}','InsertController@manageEdit')->name('manageEdit');