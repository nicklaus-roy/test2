<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/add', 'ProjectsController@create');
Route::post('/projects/store', 'ProjectsController@store');