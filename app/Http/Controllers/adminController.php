<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\ProductRequest;
use App\Http\Requests\Admin\AdminProfileRequest;
use App\Http\Requests\Admin\AdminPassChangeRequest;
use App\Http\Requests\Admin\EditProductRequest;
use App\Http\Requests\Admin\EditCategoryRequest;
use App\Http\Requests\Admin\EditSubCategoryRequest;
use App\Http\Requests\Admin\NewCustomerRequest;
use App\Http\Requests\Admin\EditCustomerRequest;
use App\Http\Requests\Admin\AddPosterRequest;
use App\Http\Requests\Admin\EditBlogRequest;
use App\Notice;
use App\Admin;
use App\Poster;

class adminController extends Controller
{

    public function index(Request $req){

        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        return view('admin.index')->with('admin',$admin);
    }

    // admin_profile
    public function profile(Request $req){
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        return view("admin.admin-profile")->with('admin',$admin);
    }
    public function edit_profile(AdminProfileRequest $req){
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $id=$admin->id;


             $admin = Admin::find($id);
            $admin->username= $req->name;
            $admin->email=$req->email;
            $admin->phone=$req->phone;
            $admin->address=$req->address;
            $admin->shop_name=$req->store_name;

            if($admin->save()){
                return redirect()->route('admin.profile');
            }
    }

    //Update Picture
      public function update_picture(Request $req){
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        return view("admin.update-logo")->with('admin',$admin);
    }
    public function update_picture_p(AddPosterRequest $req){

        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $id=$admin->id;
        // return $id;

        if($req->hasFile('poster_image')){
            $file_2 = $req->file('poster_image');

            if($file_2->move('upload', $file_2->getClientOriginalName())){

                $admin = Admin::find($id);

                $admin->image_profile=$file_2->getClientOriginalName();

                if($admin->save()){
                    return redirect()->route('admin.profile');
                }
            }
        }

    }

    // Update Logo
    public function update_logo(Request $req){
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        return view("admin.update-logo")->with('admin',$admin);
    }
    public function update_logo_p(AddPosterRequest $req){

        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $id=$admin->id;
        // return $id;

        if($req->hasFile('poster_image')){
            $file_2 = $req->file('poster_image');

            if($file_2->move('upload', $file_2->getClientOriginalName())){

                $admin = Admin::find($id);

                $admin->shop_logo=$file_2->getClientOriginalName();

                if($admin->save()){
                    return redirect()->route('admin.profile');
                }
            }
        }

    }



    // Chnage_password
    public function change_password(Request $req){
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        return view('admin.admin-chnage-password')->with('admin',$admin);
    }
    public function edit_password(AdminPassChangeRequest $req){
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();

        $id=$admin->id;

        if($id){
            $verify  = Admin::where('id', $id)->where('password', $req->old_password)->first();

            if($verify){
                $admin = Admin::find($id);
                $admin->password= $req->c_new_password;

                if($admin->save()){
                    $req->session()->flash('success','Password Change Successfull');
                    return redirect()->route('admin.change_password');
                }else{
                    $req->session()->flash('msg','Update Failed !!!');
                    return redirect()->route('admin.change_password');
                }

            }else{
                $req->session()->flash('msg','Old Password Not Match !!!');
                return redirect()->route('admin.change_password');
            }
        }
        else{
           $req->session()->flash('msg','User Not Found !!!');
           return redirect()->route('admin.change_password');
        }





    }

    public function all_products() {
        return view('admin.all-products');
    }
    //Add new product
    public function add_new_product() {

        return view('admin.add-new-product');
    }
    // post
    public function add_product(ProductRequest $req) {
        return redirect()->route('admin.all_products');
    }

    public function manage_product() {
        return view('admin.manage-product');
    }

    // Edit Product
    public function edit_product() {
        return view('admin.edit-product');
    }
    public function update_product(EditProductRequest $req) {
        return redirect('/admin/edit_product');
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

    // Edit Category
    public function edit_category() {
        return view('admin.edit-category');
    }
    public function update_category(EditCategoryRequest $req) {
        return redirect('/admin/all_categories');
    }

    public function all_sub_categories() {
        return view('admin.all-sub-categories');
    }

    // Edit Sub-Category
    public  function edit_sub_category() {
        return view('admin.edit-sub-category');
    }
    public  function update_sub_category(EditSubCategoryRequest $req) {
        return redirect('/admin/all_sub_categories');
    }

    // add category
    public function add_category() {
        return view('admin.add-category');
    }
    public function add_category_p(EditCategoryRequest $req) {
        return redirect()->route('admin.all_sub_categories');
    }

      // add Sub category
    public function add_sub_category() {
        return view('admin.add-sub-category');
    }
    public function add_sub_category_p(EditSubCategoryRequest $req) {
        return redirect()->route('admin.all_sub_category');
    }

    public function all_customers() {
        return view('admin.all-customers');
    }

    // Add New Customer
    public function add_new_customer() {
        return view('admin.add-new-customer');
    }
    public function add_new_customer_p(NewCustomerRequest $req) {
        return redirect()->route('admin.all_customers');
    }

    public function manage_customer() {
        return view('admin./manage-customer');
    }
    // Edit Customer
    public function edit_customer() {
        return view('admin./edit-customer');
    }
    public function update_customer(EditCustomerRequest $req) {
        return redirect()->route('admin.manage_customer');
    }

    public function all_poster(Request $req) {
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $poster  = Poster::where('shop_name', $email)->get();
        // return $poster;
        return view('admin.all-poster')->with('admin',$admin)->with('poster',$poster);
    }

    // Add new poster
    public function add_new_poster(Request $req) {

        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $poster  = Poster::where('shop_name', $email)->get();

        return view('admin.add-new-poster')->with('admin',$admin)->with('poster',$poster);
    }
    public function add_new_poster_p(AddPosterRequest $req) {
        $email=$req->session()->get('email');

        if($req->hasFile('poster_image')){
            $file = $req->file('poster_image');

            if($file->move('upload', $file->getClientOriginalName())){

                $poster = new Poster();
                $poster->image=$file->getClientOriginalName();
                $poster->created_at=date("Y/m/d");
                $poster->shop_name=$email;

                if($poster->save()){
                    return redirect()->route('admin.add_new_poster');
                }
            }
        }

    }

    // Edit Poster
    public function edit_poster(Request $req, $id) {
        $email=$req->session()->get('email');
        $admin=Admin::where('email',$email)->first();
        return view('admin.edit-poster')->with('admin',$admin);
    }
    public function update_poster(AddPosterRequest $req,$id) {
        $email=$req->session()->get('email');

        if($req->hasFile('poster_image')){
            $file = $req->file('poster_image');

            if($file->move('upload', $file->getClientOriginalName())){

                $poster = Poster::find($id);
                $poster->image=$file->getClientOriginalName();
                $poster->updated_at=date("Y/m/d");

                if($poster->save()){
                    return redirect()->route('admin.add_new_poster');
                }
            }
        }
        return redirect()->route('admin.add_new_poster');
    }

    public function all_blog() {
        return view('admin.all-blog');
    }

    // Edit Blog
    public function edit_blog() {
        return view('admin.edit-blog');
    }
    public function update_blog(EditBlogRequest $req ) {
        return redirect()->route('admin.all_blog');
    }

    public function add_new_blog() {
        return view('admin.add-new-blog');
    }
    public function add_new_blog_p(EditBlogRequest $req) {
        return redirect()->route('admin.all_blog');
    }
    public function all_notice(Request $req) {
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();

        $notice=Notice::all();
        return view('admin.all-notice')->with('notice',$notice)->with('admin',$admin);
    }
}
