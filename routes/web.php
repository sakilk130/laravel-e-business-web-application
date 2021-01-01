<?php

// Shop Admin

Route::get('/','indexController@index');

Route::get('/new','registerController@register')->name('register.register');

Route::post('/new','registerController@add_new_store');

Route::get('/login','loginController@login')->name('login.login');

Route::post('/login','loginController@verify');

// Admin
Route::group(['middleware'=>['sessionVerify']], function(){

    Route::get('/admin','adminController@index')->name('admin.index');

    Route::get('/admin/profile','adminController@profile')->name('admin.profile');
    Route::post('/admin/profile','adminController@edit_profile');

    Route::get('/admin/change_password','adminController@change_password')->name('admin.change_password');
    Route::post('/admin/change_password','adminController@edit_password');


    // Product
    Route::get('/admin/all_products', 'adminController@all_products')->name('admin.all_products');

    Route::get('/admin/add_new_product', 'adminController@add_new_product')->name('admin.add_new_product');
    Route::post('/admin/add_new_product', 'adminController@add_product');

    Route::get('/admin/manage_product','adminController@manage_product')->name('admin.manage_product');

    Route::get('/admin/edit_product','adminController@edit_product' );
    Route::post('/admin/edit_product','adminController@update_product' );


    // Orders
    Route::get('/admin/all_orders','adminController@all_orders')->name('admin.all_orders');

    Route::get('/admin/pending_orders','adminController@pending_orders')->name('admin.pending_orders');

    Route::get('/admin/edit_orders','adminController@edit_orders');

    Route::get('/admin/in_process_orders','adminController@in_process_orders')->name('admin.in_process_orders');

    Route::get('/admin/delivered_orders', 'adminController@delivered_orders')->name('admin.delivered_orders');

    // Category
    Route::get('/admin/all_categories','adminController@all_categories')->name('admin.all_categories');

    Route::get('/admin/edit_category', 'adminController@edit_category');
    Route::post('/admin/edit_category', 'adminController@update_category');

    Route::get('/admin/all_sub_categories','adminController@all_sub_categories')->name('admin.all_sub_categories');

    Route::get('/admin/edit_sub_category','adminController@edit_sub_category');
    Route::post('/admin/edit_sub_category','adminController@update_sub_category');

    Route::get('/admin/add_category', 'adminController@add_category')->name('admin.add_category');
    Route::post('/admin/add_category', 'adminController@add_category_p');

    Route::get('/admin/add_sub_category', 'adminController@add_sub_category')->name('admin.add_sub_category');
    Route::post('/admin/add_sub_category', 'adminController@add_sub_category_p');


    // Customers
    Route::get('/admin/all_customers', 'adminController@all_customers')->name('admin.all_customers');

    Route::get('/admin/add_new_customer','adminController@add_new_customer' )->name('admin.add_new_customer');
    Route::post('/admin/add_new_customer','adminController@add_new_customer_p' );

    Route::get('/admin/manage_customer', 'adminController@manage_customer')->name('admin.manage_customer');

    Route::get('/admin/edit_customer', 'adminController@edit_customer');
    Route::post('/admin/edit_customer', 'adminController@update_customer');


    // Poster
    Route::get('/admin/all_poster', 'adminController@all_poster')->name('admin.all_poster');

    Route::get('/admin/add_new_poster', 'adminController@add_new_poster')->name('admin.add_new_poster');
    Route::post('/admin/add_new_poster', 'adminController@add_new_poster_p');

    Route::get('/admin/edit_poster', 'adminController@edit_poster');
    Route::post('/admin/edit_poster', 'adminController@update_poster');


    // Blog
    Route::get('/admin/all_blog','adminController@all_blog')->name('admin.all_blog');

    Route::get('/admin/edit_blog', 'adminController@edit_blog');
    Route::post('/admin/edit_blog', 'adminController@update_blog');


    Route::get('/admin/add_new_blog', 'adminController@add_new_blog')->name('admin.add_new_blog');
    Route::post('/admin/add_new_blog', 'adminController@add_new_blog_p');

    // Notice
    Route::get('/admin/all_notice', 'adminController@all_notice')->name('admin.all_notice');
});

// Logout
Route::get('/live', 'logoutController@logout')->name('logout.logout');

// End Shop Admin



// CUSTOMER START ..............................................................

// registration
Route::get('/{shopName}/customer/register', 'customer\c_registrationController@index')->name('customer.register');
Route::post('/{shopName}/customer/register', 'customer\c_registrationController@fromPost')->name('customer.register');

// login
Route::get('/{shopName}/customer/login','customer\c_loginController@index' )->name('customer.login');
Route::post('/{shopName}/customer/login', 'customer\c_loginController@fromPost')->name('customer.login');



// product
Route::get('/{shopName}/product','customer\productController@index')->name('product');

// cart
Route::get('/{shopName}/cart','customer\cartController@index')->name('cart');

// blog
Route::get('/{shopName}/blog','customer\blogController@index')->name('blog');

// blog_Single
Route::get('/{shopName}/blog/single', 'customer\blogSingleController@index')->name('blog.single');

// contct support
Route::get('/{shopName}/customer/contact', 'customer\contactController@index')->name('customer.contact');

// logout
Route::get('/{shopName}/shop/logout', 'customer\logoutController@index')->name('shop.logout');

// error
Route::get('/error', 'customer\errorController@index')->name('error');




// middleware................................
Route::group(['middleware'=>['varifyCustomer']], function(){
    
    // shop
    Route::get('/{shopName}/shop','customer\shopController@index')->name('shop');

});

//customer end ..................................................




Route::get('/live', 'customer\live@index')->name('liveSearch');
Route::post('/live', 'customer\live@livepost')->name('liveSearch');