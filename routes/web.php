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

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/change_password', function () {
    return view('admin.admin-chnage-password');
});
