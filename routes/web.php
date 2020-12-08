<?php

// Shop Admin

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
Route::get('/admin/all_products', function () {
    return view('admin.all-products');
});
Route::get('/admin/add_new_product', function () {
    return view('admin.add-new-product');
});
Route::get('/admin/manage_product', function () {
    return view('admin.manage-product');
});
Route::get('/admin/all_orders', function () {
    return view('admin.all-orders');
});
Route::get('/admin/pending_orders', function () {
    return view('admin.pending-orders');
});
Route::get('/admin/in_process_orders', function () {
    return view('admin.in-process-orders');
});
Route::get('/admin/delivered_orders', function () {
    return view('admin.delivered-orders');
});

// End Shop Admin
