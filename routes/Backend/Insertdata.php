<?php
Route::get('tambah', 'InsertData@index')->name('tambah');
Route::get('insert','InsertData@add')->name('insert');
Route::post('building/','InsertData@insertBuilding')->name('insertBuilding');
Route::get('facility','InsertData@addFacility')->name('addFacility');
