<?php


Route::get('/', 'PagesController@index');
//Route::get('about', 'PagesController@about');
//Route::get('contact', 'PagesController@contact');
//Route::get('stats', 'PagesController@stats');
//Route::get('stats/{ID}', 'PagesController@show');

Route::resource('stats', 'StatsController');
