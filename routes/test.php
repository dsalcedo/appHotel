<?php

Route::group(['namespace'=>'Test'], function (){
    Route::get('test', 'ConektaController@cargo')->name('test.index');
});

