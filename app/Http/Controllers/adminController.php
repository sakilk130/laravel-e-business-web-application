<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function index(Request $req){
        return view('admin.index');
    }
    public function profile(){
        return view("admin.admin-profile");
    }
    public function change_password(){
        return view('admin.admin-chnage-password');
    }
    public function all_products() {
        return view('admin.all-products');
    }
    public function add_new_product() {
        return view('admin.add-new-product');
    }
    public function manage_product() {
        return view('admin.manage-product');
    }
    public function edit_product() {
        return view('admin.edit-product');
    }
    public function all_orders() {
        return view('admin.all-orders');
    }
    public function pending_orders() {
        return view('admin.pending-orders');
    }
    public function edit_orders() {
        return view('admin.edit-orders');
    }
    public function in_process_orders() {
        return view('admin.in-process-orders');
    }
    public function delivered_orders() {
        return view('admin.delivered-orders');
    }
    public function all_categories() {
        return view('admin.all-categories');
    }
    public function edit_category() {
        return view('admin.edit-category');
    }
    public function all_sub_categories() {
        return view('admin.all-sub-categories');
    }
    public  function edit_sub_category() {
        return view('admin.edit-sub-category');
    }
    public function add_category() {
        return view('admin.add-category');
    }
    public function add_sub_category() {
        return view('admin.add-sub-category');
    }
    public function all_customers() {
        return view('admin.all-customers');
    }
    public function add_new_customer() {
        return view('admin.add-new-customer');
    }
    public function manage_customer() {
        return view('admin./manage-customer');
    }
    public function edit_customer() {
        return view('admin./edit-customer');
    }
    public function all_poster() {
        return view('admin.all-poster');
    }
    public function add_new_poster() {
        return view('admin.add-new-poster');
    }
    public function edit_poster() {
        return view('admin.edit-poster');
    }
    public function all_blog() {
        return view('admin.all-blog');
    }
    public function edit_blog() {
        return view('admin.edit-blog');
    }
    public function add_new_blog() {
        return view('admin.add-new-blog');
    }
    public function all_notice() {
        return view('admin.all-notice');
    }
}
