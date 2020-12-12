<?php

// Shop Admin
Route::get('/','indexController@index');

Route::get('/register','registerController@register');

Route::get('/login','loginController@login');

Route::get('/admin','adminController@index');

Route::get('/admin/profile','adminController@profile');

Route::get('/admin/change_password','adminController@change_password');

Route::get('/admin/all_products', 'adminController@all_products');

Route::get('/admin/add_new_product', 'adminController@add_new_product');

Route::get('/admin/manage_product','adminController@manage_product' );

Route::get('/admin/edit_product','adminController@edit_product' );

Route::get('/admin/all_orders','adminController@all_orders');

Route::get('/admin/pending_orders','adminController@pending_orders');

Route::get('/admin/edit_orders','adminController@edit_orders');

Route::get('/admin/in_process_orders','adminController@in_process_orders');

Route::get('/admin/delivered_orders', 'adminController@delivered_orders');

Route::get('/admin/all_categories','adminController@all_categories');

Route::get('/admin/edit_category', 'adminController@edit_category');

Route::get('/admin/all_sub_categories','adminController@all_sub_categories');

Route::get('/admin/edit_sub_category','adminController@edit_sub_category');

Route::get('/admin/add_category', 'adminController@add_category');

Route::get('/admin/add_sub_category', 'adminController@add_sub_category');

Route::get('/admin/all_customers', 'adminController@all_customers');

Route::get('/admin/add_new_customer','adminController@add_new_customer' );

Route::get('/admin/manage_customer', 'adminController@manage_customer');

Route::get('/admin/edit_customer', 'adminController@edit_customer');

Route::get('/admin/all_poster', 'adminController@all_poster');

Route::get('/admin/add_new_poster', 'adminController@add_new_poster');

Route::get('/admin/edit_poster', 'adminController@edit_poster');

Route::get('/admin/all_blog','adminController@all_blog');

Route::get('/admin/edit_blog', 'adminController@edit_blog');

Route::get('/admin/add_new_blog', 'adminController@add_new_blog');

Route::get('/admin/all_notice', 'adminController@all_notice');

// End Shop Admin
