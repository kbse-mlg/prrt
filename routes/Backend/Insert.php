<?php
Route::get('tambah', 'InsertController@index')->name('tambah');
Route::get('insert','InsertController@add')->name('insert');
Route::post('building/','InsertController@insertBuilding')->name('insertBuilding');
Route::get('facility','InsertController@addFacility')->name('addFacility');
