<?php

// Shop Admin

Route::get('/','indexController@index');

Route::get('/new','registerController@register')->name('register.register');

Route::post('/new','registerController@add_new_store');

Route::get('/login','loginController@login')->name('login.login');

Route::post('/login','loginController@verify');

// Admin
Route::group(['middleware'=>['sessionVerify','type']], function(){

    Route::get('/admin','adminController@index')->name('admin.index');

    Route::get('/admin/profile','adminController@profile')->name('admin.profile');
    Route::post('/admin/profile','adminController@edit_profile');

    Route::get('admin/profile/update_logo','adminController@update_logo')->name('admin.update_logo');
    Route::post('admin/profile/update_logo','adminController@update_logo_p');

    Route::get('admin/profile/update_picture','adminController@update_picture')->name('admin.update_picture');
    Route::post('admin/profile/update_picture','adminController@update_picture_p');

    Route::get('/admin/change_password','adminController@change_password')->name('admin.change_password');
    Route::post('/admin/change_password','adminController@edit_password');


    // Product
    Route::get('/admin/all_products', 'adminController@all_products')->name('admin.all_products');

    Route::get('/admin/add_new_product', 'adminController@add_new_product')->name('admin.add_new_product');
    Route::post('/admin/add_new_product', 'adminController@add_product');

    Route::get('/admin/manage_product','adminController@manage_product')->name('admin.manage_product');

    Route::get('/admin/edit_product/{id}','adminController@edit_product' )->name('admin.edit_product');
    Route::post('/admin/edit_product/{id}','adminController@update_product' );

    Route::get('/admin/change_product_picture/{id}','adminController@change_product_picture' )->name('admin.change_product_picture');
    Route::post('/admin/change_product_picture/{id}', 'adminController@upload_product_picture');

    Route::post('/admin/search_product','adminController@search_product');
// Delete
    Route::post('/admin/delete_product/{id}', 'adminController@delete_product');

    // Orders
    Route::get('/admin/all_orders','adminController@all_orders')->name('admin.all_orders');

    Route::post('/admin/search_order','adminController@search_order');

    Route::get('/admin/pending_orders','adminController@pending_orders')->name('admin.pending_orders');

    Route::get('/admin/edit_orders/{id}','adminController@edit_orders')->name('admin.edit_orders');
    Route::post('/admin/edit_orders/{id}','adminController@update_pending_orders');

    Route::get('/admin/in_process_orders','adminController@in_process_orders')->name('admin.in_process_orders');

    Route::get('/admin/edit_in_process_orders/{id}','adminController@edit_in_process_orders')->name('admin.edit_in_process_orders');
    Route::post('/admin/edit_in_process_orders/{id}','adminController@update_in_process_orders');

    Route::get('/admin/delivered_orders', 'adminController@delivered_orders')->name('admin.delivered_orders');

    Route::post('/admin/delete_delivered_orders/{id}', 'adminController@delete_delivered_orders');

    // Category
    Route::get('/admin/all_categories','adminController@all_categories')->name('admin.all_categories');

    Route::get('/admin/edit_category/{id}', 'adminController@edit_category')->name('admin.edit_category');
    Route::post('/admin/edit_category/{id}', 'adminController@update_category');

    Route::post('/admin/delete_category/{id}', 'adminController@delete_category');

    Route::get('/admin/all_sub_categories','adminController@all_sub_categories')->name('admin.all_sub_categories');

    Route::get('/admin/edit_sub_category/{id}','adminController@edit_sub_category')->name('admin.edit_sub_category');
    Route::post('/admin/edit_sub_category/{id}','adminController@update_sub_category');

    Route::post('/admin/delete_sub_category/{id}','adminController@delete_sub_category');

    Route::get('/admin/add_category', 'adminController@add_category')->name('admin.add_category');
    Route::post('/admin/add_category', 'adminController@add_category_p');

    Route::get('/admin/add_sub_category', 'adminController@add_sub_category')->name('admin.add_sub_category');
    Route::post('/admin/add_sub_category', 'adminController@add_sub_category_p');


    // Customers
    Route::get('/admin/all_customers', 'adminController@all_customers')->name('admin.all_customers');

    Route::get('/admin/add_new_customer','adminController@add_new_customer' )->name('admin.add_new_customer');
    Route::post('/admin/add_new_customer','adminController@add_new_customer_p' );

    Route::get('/admin/manage_customer', 'adminController@manage_customer')->name('admin.manage_customer');

    Route::get('/admin/edit_customer/{id}', 'adminController@edit_customer')->name('admin.edit_customer');
    Route::post('/admin/edit_customer/{id}', 'adminController@update_customer');
// Delete
    Route::post('/admin/delete_customer/{id}', 'adminController@delete_customer');

    Route::get('/admin/change_picture/{id}', 'adminController@change_picture')->name('admin.change_picture');
    Route::post('/admin/change_picture/{id}', 'adminController@upload_picture');

    Route::post('/admin/all_customers', 'adminController@export_excel');

    // Poster
    Route::get('/admin/all_poster', 'adminController@all_poster')->name('admin.all_poster');

    Route::get('/admin/add_new_poster', 'adminController@add_new_poster')->name('admin.add_new_poster');
    Route::post('/admin/add_new_poster', 'adminController@add_new_poster_p');

    Route::get('/admin/edit_poster/{id}', 'adminController@edit_poster')->name('admin.edit_poster');
    Route::post('/admin/edit_poster/{id}', 'adminController@update_poster');

    Route::post('/admin/delete_poster/{id}', 'adminController@delete_poster');


    // Blog
    Route::get('/admin/all_blog','adminController@all_blog')->name('admin.all_blog');

    Route::get('/admin/read_blog/{id}', 'adminController@read_blog')->name('admin.read_blog');


    Route::get('/admin/edit_blog/{id}', 'adminController@edit_blog')->name('admin.edit_blog');
    Route::post('/admin/edit_blog/{id}', 'adminController@update_blog');

    Route::get('/admin/delete_blog/{id}', 'adminController@delete_blog')->name('admin.delete_blog');
    Route::post('/admin/delete_blog/{id}', 'adminController@delete_blog_p');

    Route::get('/admin/add_new_blog', 'adminController@add_new_blog')->name('admin.add_new_blog');
    Route::post('/admin/add_new_blog', 'adminController@add_new_blog_p');

    // Notice
    Route::get('/admin/all_notice', 'adminController@all_notice')->name('admin.all_notice');
});
// Invoice Delivered
Route::get('/admin/invoice_delivered/{id}', 'adminController@invoice_delivered')->name('admin.invoice_delivered');

Route::get('/admin/download_all_customer', 'adminController@download_all_customer')->name('admin.download_all_customer');

// Logout
Route::get('/live', 'logoutController@logout')->name('logout.logout');


Route::get('/login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
// End Shop Admin



// CUSTOMER START ..............................................................

// registration
Route::get('/{shopName}/customer/register', 'customer\c_registrationController@index')->name('customer.register');
Route::post('/{shopName}/customer/register', 'customer\c_registrationController@fromPost')->name('customer.register');

// login
Route::get('/{shopName}/customer/login','customer\c_loginController@index' )->name('customer.login');
Route::post('/{shopName}/customer/login', 'customer\c_loginController@fromPost')->name('customer.login');






// middleware................................
Route::group(['middleware'=>['varifyCustomer']], function(){
    // product
    Route::get('/{shopName}/product/{id}','customer\productController@index')->name('product');
    Route::post('/{shopName}/product/{id}','customer\productController@fromPost')->name('product');
    Route::post('/{shopName}/rating/{id}','customer\productController@rating')->name('product.rating');

    // wish
    Route::get('/{shopName}/wish','customer\wishController@index')->name('wish');
    Route::get('/{shopName}/wish/{id}','customer\wishController@save')->name('wish.id');

    // cart
    Route::get('/{shopName}/cart','customer\cartController@index')->name('cart');
    Route::get('/{shopName}/cart/delete/{cart_id}','customer\cartController@delete')->name('cart.delete');
    Route::post('/{shopName}/cart/order/{cart_id}','customer\cartController@order')->name('cart.order');

    // blog
    Route::get('/{shopName}/blog','customer\blogController@index')->name('blog');
    Route::post('/{shopName}/blog','customer\blogController@fromPost')->name('blog');

    // blog_Single
    Route::get('/{shopName}/blog/single/{id}', 'customer\blogSingleController@index')->name('blog.single');
    Route::post('/{shopName}/blog/single/{id}', 'customer\blogSingleController@fromPost')->name('blog.single');

    // contct support
    Route::get('/{shopName}/customer/contact', 'customer\contactController@index')->name('customer.contact');

    // logout
    Route::get('/{shopName}/shop/logout', 'customer\logoutController@index')->name('shop.logout');

    // error
    Route::get('/error', 'customer\errorController@index')->name('error');
    
    
    
    // shop
    Route::get('/{shopName}/shop','customer\shopController@index')->name('shop');
    Route::post('/{shopName}/price','customer\shopController@price')->name('shop.price');
    Route::post('/{shopName}/wish','customer\shopController@wish')->name('shop.wish');



    Route::post('/{shopName}/live', 'customer\liveSearchController@index')->name('liveSearch');


    Route::post('/checkout/{shopName}/{cart_id}','CheckoutController@checkout')->name('checkout');
    Route::post('/checkout','CheckoutController@afterpayment')->name('checkout.credit-card');


    Route::get('/{shopName}/order','customer\orderController@index')->name('order');
    Route::get('/{shopName}/order','customer\orderController@download')->name('order.download');
    

});

//customer end ..................................................






