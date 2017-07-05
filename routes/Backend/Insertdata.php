<?php
Route::get('tambah', 'InsertData@index')->name('tambah');
Route::get('insert','InsertData@add')->name('insert');
Route::post('building/','InsertData@insertBuilding')->name('insertBuilding');
Route::get('facility','InsertData@addFacility')->name('addFacility');
Route::get('rumah','InsertData@rumahIndex')->name('indexRumah');
Route::get('penduduk','InsertData@pendudukIndex')->name('pendudukIndex');