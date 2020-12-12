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
Route::get('/admin/profile', function () {
    return view("admin.admin-profile");
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
Route::get('/admin/edit_product', function () {
    return view('admin.edit-product');
});
Route::get('/admin/all_orders', function () {
    return view('admin.all-orders');
});
Route::get('/admin/pending_orders', function () {
    return view('admin.pending-orders');
});
Route::get('/admin/edit_orders', function () {
    return view('admin.edit-orders');
});
Route::get('/admin/in_process_orders', function () {
    return view('admin.in-process-orders');
});
Route::get('/admin/delivered_orders', function () {
    return view('admin.delivered-orders');
});
Route::get('/admin/all_categories', function () {
    return view('admin.all-categories');
});
Route::get('/admin/edit_category', function () {
    return view('admin.edit-category');
});
Route::get('/admin/all_sub_categories', function () {
    return view('admin.all-sub-categories');
});
Route::get('/admin/edit_sub_category', function () {
    return view('admin.edit-sub-category');
});
Route::get('/admin/add_category', function () {
    return view('admin.add-category');
});
Route::get('/admin/add_sub_category', function () {
    return view('admin.add-sub-category');
});
Route::get('/admin/all_customers', function () {
    return view('admin.all-customers');
});
Route::get('/admin/add_new_customer', function () {
    return view('admin.add-new-customer');
});
Route::get('/admin/manage_customer', function () {
    return view('admin./manage-customer');
});
Route::get('/admin/edit_customer', function () {
    return view('admin./edit-customer');
});
Route::get('/admin/all_poster', function () {
    return view('admin.all-poster');
});
Route::get('/admin/add_new_poster', function () {
    return view('admin.add-new-poster');
});
Route::get('/admin/edit_poster', function () {
    return view('admin.edit-poster');
});
Route::get('/admin/all_blog', function () {
    return view('admin.all-blog');
});
Route::get('/admin/edit_blog', function () {
    return view('admin.edit-blog');
});
Route::get('/admin/add_new_blog', function () {
    return view('admin.add-new-blog');
});
Route::get('/admin/all_notice', function () {
    return view('admin.all-notice');
});
// End Shop Admin
