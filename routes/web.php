<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('admin.login');
});

