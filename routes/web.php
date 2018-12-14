<?php

Route::get('/', function () {
    return redirect('admincp');
});

Route::get('/admincp/{demopage?}', 'DemoController@demo')->name('demo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
