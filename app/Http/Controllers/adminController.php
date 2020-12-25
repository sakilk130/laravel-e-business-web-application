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
use App\Admin\Notice;
use App\Admin\Admin;
use App\Admin\Poster;
use App\Admin\Customer;
use App\Admin\Category;
use Illuminate\Support\Facades\DB;
use App\Admin\Subcategory;
use App\Admin\Order;
use App\Admin\Product;
use Barryvdh\DomPDF\Facade as PDF;

class adminController extends Controller
{

    public function index(Request $req){

        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();

        $order= DB::table('orders')
                ->join('customers', 'orders.customer_id', '=', 'customers.id')
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->select('orders.id', 'orders.quantity', 'orders.status','orders.created_at','orders.updated_at', 'customers.name', 'customers.email', 'customers.phone', 'customers.address', 'products.product_name', 'products.product_image', 'products.product_description', 'products.product_price')
                ->where('orders.shop_name',$email)
                ->where('orders.status','Pending')
                ->get();
                // return $order;
        $product = Product::where('shop_name',$email)->get();
        $pendingorder = Order::where('shop_name',$email)->where('status','Pending')->get();
        $customer = Customer::where('shop_name',$email)->get();

        return view('admin.index',array('order'=>$order))
              ->with('admin',$admin)
              ->with('product',$product)
              ->with('pendingorder',$pendingorder)
              ->with('customer',$customer);

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

    public function all_products(Request $req) {
        $email=$req->session()->get('email');
        $admin=Admin::where('email',$email)->first();

        $product= DB::table('products')
            ->join('categories', 'products.category_ID', '=', 'categories.id')
            ->join('subcategories', 'products.sub_category_ID', '=', 'subcategories.id')
            ->select('products.id', 'products.product_name', 'products.product_brand','products.product_price','products.product_image', 'products.in_stock', 'products.created_at', 'products.updated_at', 'categories.category_name', 'subcategories.sub_category_name')
            ->where('products.shop_name',$email)
            ->get();

        // return $product;
        return view('admin.all-products',array('product'=>$product))->with('admin',$admin);
    }

    // Search All Product
    public function search_product(Request $req){
        $email=$req->session()->get('email');
        $admin=Admin::where('email',$email)->first();

        $products= DB::table('products')
        ->join('categories', 'products.category_ID', '=', 'categories.id')
        ->join('subcategories', 'products.sub_category_ID', '=', 'subcategories.id')
        ->select('products.id', 'products.product_name', 'products.product_brand','products.product_price','products.product_image', 'products.in_stock', 'products.created_at', 'products.updated_at', 'categories.category_name', 'subcategories.sub_category_name')
        ->where('products.shop_name',$email)
        ->where('products.product_name','like','%' .$req->get('searchQuery') . '%')
        ->get();
        return json_encode($products);
    }

    //Add new product
    public function add_new_product(Request $req) {
        $email=$req->session()->get('email');
        $admin=Admin::where('email',$email)->first();
        $category  = Category::where('shop_name', $email)->get();
        $subcategory= Subcategory::where('shop_name',$email)->get();

        return view('admin.add-new-product')->with('admin',$admin)->with('category',$category)->with('subcategory',$subcategory);

    }
    // post
    public function add_product(ProductRequest $req) {
        $email=$req->session()->get('email');

        if($req->hasFile('product_image')){
            $file = $req->file('product_image');

            if($file->move('upload', $file->getClientOriginalName())){

                $product = new Product();

                $product->category_ID=$req->category;
                $product->sub_category_ID=$req->sub_category;
                $product->product_name=$req->product_name;
                $product->product_brand=$req->product_brand;
                $product->product_description=$req->product_description;
                $product->shipping_cost=$req->shipping_charge;
                $product->product_availability=$req->product_availability;
                $product->in_stock=$req->product_stock;
                $product->product_price=$req->price;
                $product->product_discount=$req->discount;
                $product->product_image=$file->getClientOriginalName();
                $product->created_at=date("Y/m/d");
                $product->shop_name=$email;

                if($product->save()){
                    return redirect()->route('admin.all_products');
                }
            }
        }
    }

    public function manage_product(Request $req) {
        $email=$req->session()->get('email');
        $admin=Admin::where('email',$email)->first();

        $product= DB::table('products')
            ->join('categories', 'products.category_ID', '=', 'categories.id')
            ->join('subcategories', 'products.sub_category_ID', '=', 'subcategories.id')
            ->select('products.id', 'products.product_name', 'products.product_brand','products.product_price','products.product_image', 'products.in_stock', 'products.created_at', 'products.updated_at', 'categories.category_name', 'subcategories.sub_category_name')
            ->where('products.shop_name',$email)
            ->get();
            // return $product;
        return view('admin.manage-product',array('product'=>$product))->with('admin',$admin);

    }

    // Edit Product
    public function edit_product(Request $req, $id) {
        $email=$req->session()->get('email');
        $admin=Admin::where('email',$email)->first();
        $product= DB::table('products')
        ->join('categories', 'products.category_ID', '=', 'categories.id')
        ->join('subcategories', 'products.sub_category_ID', '=', 'subcategories.id')
        ->select('products.id', 'products.product_description', 'products.shipping_cost', 'products.product_discount', 'products.product_name', 'products.product_brand','products.product_price','products.product_image', 'products.in_stock', 'products.created_at', 'products.updated_at', 'categories.category_name', 'subcategories.sub_category_name')
        ->where('products.id',$id)
        ->get();

        $category  = Category::where('shop_name', $email)->get();
        $subcategory= Subcategory::where('shop_name',$email)->get();

        return view('admin.edit-product',array('product'=>$product))->with('admin',$admin)->with('category',$category)->with('subcategory',$subcategory);
    }
    public function update_product(EditProductRequest $req, $id) {
        $product = Product::find($id);

        $product->category_ID=$req->category;
        $product->sub_category_ID=$req->sub_category;
        $product->product_name=$req->product_name;
        $product->product_brand=$req->product_brand;
        $product->product_description=$req->product_description;
        $product->shipping_cost=$req->shipping_charge;
        $product->product_availability=$req->product_availability;
        $product->in_stock=$req->product_stock;
        $product->product_price=$req->price;
        $product->product_discount=$req->discount;
        $product->updated_at=date("Y/m/d");

        if($product->save()){
            return redirect('/admin/manage_product');
        }

    }
    // Update Product Picture
    public function change_product_picture(Request $req){
        $email=$req->session()->get('email');
        $admin=Admin::where('email',$email)->first();
        return view('admin.update-logo')->with('admin',$admin);
    }
    public function upload_product_picture(AddPosterRequest $req, $id){

        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        // return $id;

        if($req->hasFile('poster_image')){
            $file_2 = $req->file('poster_image');

            if($file_2->move('upload', $file_2->getClientOriginalName())){

                $product = Product::find($id);
                $product->product_image=$file_2->getClientOriginalName();
                $product->updated_at=date("Y/m/d");
                if($product->save()){
                    return redirect()->route('admin.manage_product');
                }
            }
        }
    }
    // Delete Product
    public function delete_product($id){
        $task = Product::find($id);
        $task->delete();
        return response()->json('Product deleted', 200);
    }

    // All Order
    public function all_orders(Request $req) {
        $email=$req->session()->get('email');
        $admin=Admin::where('email',$email)->first();
       $order= DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select('orders.id', 'orders.quantity', 'orders.status','orders.created_at','orders.updated_at', 'customers.name', 'customers.email', 'customers.phone', 'customers.address', 'products.product_name', 'products.product_image', 'products.product_description', 'products.product_price')
            ->where('orders.shop_name',$email)
            ->get();
        return view('admin.all-orders',array('order'=>$order))->with('admin',$admin);
    }

    // Pending Order
    public function pending_orders(Request $req) {
            $email=$req->session()->get('email');
            $admin=Admin::where('email',$email)->first();
           $order= DB::table('orders')
                ->join('customers', 'orders.customer_id', '=', 'customers.id')
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->select('orders.id', 'orders.quantity', 'orders.status','orders.created_at','orders.updated_at', 'customers.name', 'customers.email', 'customers.phone', 'customers.address', 'products.product_name', 'products.product_image', 'products.product_description', 'products.product_price')
                ->where('orders.shop_name',$email)
                ->where('orders.status','Pending')
                ->get();

        return view('admin.pending-orders', array('order'=>$order))->with('admin',$admin);
    }

    // Edit Order
    public function edit_orders(Request $req, $id) {
        $email=$req->session()->get('email');
        $admin=Admin::where('email',$email)->first();
        $order= DB::table('orders')
                ->join('customers', 'orders.customer_id', '=', 'customers.id')
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->select('orders.id', 'orders.quantity', 'orders.status','orders.created_at','orders.updated_at', 'customers.name', 'customers.email', 'customers.phone', 'customers.address', 'products.product_name', 'products.product_image', 'products.product_description', 'products.product_price')
                ->where('orders.id',$id)
                ->get();
        return view('admin.edit-orders', array('order'=>$order))->with('admin',$admin);
    }
    public function update_pending_orders(Request $req, $id) {
        $order = Order::find($id);
        $order->status= $req->status;
        $order->updated_at=date("Y/m/d");

        if($order->save()){
            return redirect()->route('admin.pending_orders');
        }
    }

    // In process
    public function in_process_orders(Request $req) {
        $email=$req->session()->get('email');
        $admin=Admin::where('email',$email)->first();
        $order= DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select('orders.id', 'orders.quantity', 'orders.status','orders.created_at','orders.updated_at', 'customers.name', 'customers.email', 'customers.phone', 'customers.address', 'products.product_name', 'products.product_image', 'products.product_description', 'products.product_price')
            ->where('orders.shop_name',$email)
            ->where('orders.status','In Process')
            ->get();

    // return $order;
    return view('admin.in-process-orders', array('order'=>$order))->with('admin',$admin);
    }
     // Edit Order
     public function edit_in_process_orders(Request $req, $id) {
        $email=$req->session()->get('email');
        $admin=Admin::where('email',$email)->first();
        $order= DB::table('orders')
                ->join('customers', 'orders.customer_id', '=', 'customers.id')
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->select('orders.id', 'orders.quantity', 'orders.status','orders.created_at','orders.updated_at', 'customers.name', 'customers.email', 'customers.phone', 'customers.address', 'products.product_name', 'products.product_image', 'products.product_description', 'products.product_price')
                ->where('orders.id',$id)
                ->get();
        return view('admin.edit-in-process-orders', array('order'=>$order))->with('admin',$admin);
    }
    public function update_in_process_orders(Request $req, $id) {
        $order = Order::find($id);
        $order->status= $req->status;
        $order->updated_at=date("Y/m/d");

        if($order->save()){
            return redirect()->route('admin.in_process_orders');
        }
    }

    // Delibered
    public function delivered_orders(Request $req) {
        $email=$req->session()->get('email');
        $admin=Admin::where('email',$email)->first();
        $order= DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select('orders.id', 'orders.quantity', 'orders.status','orders.created_at','orders.updated_at', 'customers.name', 'customers.email', 'customers.phone', 'customers.address', 'products.product_name', 'products.product_image', 'products.product_description', 'products.product_price')
            ->where('orders.shop_name',$email)
            ->where('orders.status','Delivered')
            ->get();

        //  return $order;
         return view('admin.delivered-orders', array('order'=>$order))->with('admin',$admin);
    }
    // Delete
    public function delete_delivered_orders($id){
        //  Customer::destroy($id);
        $task = Order::find($id);
        $task->delete();
        return response()->json('Order deleted', 200);
    }

    // All Categories
    public function all_categories(Request $req) {
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $category  = Category::where('shop_name', $email)->get();
        return view('admin.all-categories')->with('admin',$admin)->with('category',$category);

    }

    // Edit Category
    public function edit_category(Request $req, $id) {
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $category  = Category::where('id', $id)->first();
        return view('admin.edit-category')->with('admin',$admin)->with('category',$category);

    }
    public function update_category(EditCategoryRequest $req, $id) {
        $category = Category::find($id);

        $category->category_name= $req->category_name;
        $category->category_description=$req->category_details;
        $category->updated_at=date("Y/m/d");

        if($category->save()){
            return redirect('/admin/all_categories');
        }
    }

     //Delete Category
     public function delete_category($id){
        //  Category::destroy($id);
        $task = Category::find($id);
        $task->delete();
        return response()->json('Category deleted', 200);
    }
    public function all_sub_categories(Request $req) {
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $subcategory = DB::table('categories')
            ->join('subcategories', 'categories.id', '=', 'subcategories.category_id')
            ->select('categories.category_name', 'subcategories.sub_category_name', 'subcategories.created_at', 'subcategories.updated_at', 'subcategories.id')
            ->where('categories.shop_name',$email)
            ->where('subcategories.shop_name',$email)
            ->get();
        //  return array( 'subcategory' => $subcategory );

        return view('admin.all-sub-categories', array ( 'subcategory' => $subcategory ))->with('admin',$admin);

    }

    // Edit Sub-Category
    public  function edit_sub_category(Request $req, $id) {
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $subcategory= Subcategory::where('id',$id)->first();
        $category  = Category::where('shop_name', $email)->get();
        return view('admin.edit-sub-category')->with('admin',$admin)->with('subcategory',$subcategory)->with('category',$category);
    }
    public  function update_sub_category(EditSubCategoryRequest $req ,$id) {
        $subcategory = Subcategory::find($id);

        $subcategory->sub_category_name= $req->sub_category;
        $subcategory->category_id=$req->category_name;
        $subcategory->updated_at=date("Y/m/d");

        if($subcategory->save()){
            return redirect('/admin/all_sub_categories');
        }

    }
    //Delete Sub Category
    public function delete_sub_category($id){
        //  Customer::destroy($id);

        $task = Subcategory::find($id);
        $task->delete();
        return response()->json('Customer deleted', 200);
    }

    // add category
    public function add_category(Request $req) {
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        return view('admin.add-category')->with('admin',$admin);
    }
    public function add_category_p(EditCategoryRequest $req) {
        $email=$req->session()->get('email');

        $category = new Category();

        $category->category_name=$req->category_name;
        $category->category_description=$req->category_details;
        $category->created_at=date("Y/m/d");
        $category->shop_name=$email;

        if($category->save()){
            return redirect()->route('admin.all_categories');
        }

    }

      // add Sub category
    public function add_sub_category(Request $req) {
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $category=Category::where('shop_name',$email)->get();
        // return $category;
        return view('admin.add-sub-category')->with('admin',$admin)->with('category',$category);
    }

    public function add_sub_category_p(EditSubCategoryRequest $req) {
        $email=$req->session()->get('email');

        $subcategory = new Subcategory();

        $subcategory->category_id=$req->category_name;
        $subcategory->sub_category_name=$req->sub_category;
        $subcategory->created_at=date("Y/m/d");
        $subcategory->shop_name=$email;

        if($subcategory->save()){
            return redirect()->route('admin.all_sub_categories');
        }
    }


    public function all_customers(Request $req) {
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $customer  = Customer::where('shop_name', $email)->get();
        // return $customer;
        return view('admin.all-customers')->with('admin',$admin)->with('customer',$customer);
    }

    // Add New Customer
    public function add_new_customer(Request $req) {
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        return view('admin.add-new-customer')->with('admin',$admin);
    }
    public function add_new_customer_p(NewCustomerRequest $req) {
        $email=$req->session()->get('email');

        if($req->hasFile('image')){
            $file = $req->file('image');

            if($file->move('upload', $file->getClientOriginalName())){

                $customer = new Customer();

                $customer->name=$req->name;
                $customer->email=$req->email;
                $customer->phone=$req->phone;
                $customer->address=$req->address;
                $customer->password=$req->c_password;
                $customer->image=$file->getClientOriginalName();
                $customer->created_at=date("Y/m/d");
                $customer->shop_name=$email;

                if($customer->save()){
                    return redirect()->route('admin.all_customers');
                }
            }
        }

    }

    public function manage_customer(Request $req) {
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $customer  = Customer::where('shop_name', $email)->get();

        return view('admin./manage-customer')->with('admin',$admin)->with('customer',$customer);
    }
    // Edit Customer
    public function edit_customer(Request $req,$id) {

        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $customer  = Customer::where('id',$id)->first();
        // return $customer;
        return view('admin./edit-customer')->with('admin',$admin)->with('customer',$customer);
    }
    public function update_customer(EditCustomerRequest $req, $id) {

        $customer = Customer::find($id);

        $customer->name= $req->name;
        $customer->email=$req->email;
        $customer->phone=$req->phone;
        $customer->address=$req->address;
        $customer->updated_at=date("Y/m/d");

        if($customer->save()){
            return redirect()->route('admin.manage_customer');
        }
    }

     //Delete Customer
     public function delete_customer($id){
        //  Customer::destroy($id);

        $task = Customer::find($id);
        $task->delete();

        return response()->json('Customer deleted', 200);
    }




    //update Picture
    public function change_picture(Request $req){
        $email=$req->session()->get('email');
        $admin=Admin::where('email',$email)->first();
        return view('admin.update-logo')->with('admin',$admin);
    }
     public function upload_picture(AddPosterRequest $req, $id){

        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        // return $id;

        if($req->hasFile('poster_image')){
            $file_2 = $req->file('poster_image');

            if($file_2->move('upload', $file_2->getClientOriginalName())){

                $customer = Customer::find($id);
                $customer->image=$file_2->getClientOriginalName();
                $customer->updated_at=date("Y/m/d");
                if($customer->save()){
                    return redirect()->route('admin.manage_customer');
                }
            }
        }
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


    //Delete Poster
    public function delete_poster($id){
        // Customer::destroy($id);
        $task = POster::find($id);
        $task->delete();

        return response()->json('Poster deleted', 200);
        }



    public function all_blog(Request $req) {

        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();

        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'http://localhost:3000/blogs');
        $blog= json_decode($response->getBody(), true);

        if($blog!=NULL){
        return view('admin.all-blog')->with('admin',$admin)->with('blog',$blog);
        }else{
            return "SERVER IS RESPONDING";
        }
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

    public function invoice_delivered(Request $req, $id){
        $email=$req->session()->get('email');
        $admin  = Admin::where('email',$email)->first();
        $order= DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select('orders.id', 'orders.quantity', 'orders.status','orders.created_at','orders.updated_at', 'customers.name', 'customers.email', 'customers.phone', 'customers.address', 'products.product_name', 'products.product_image', 'products.product_description', 'products.product_price', 'products.product_discount', 'products.shipping_cost')
            ->where('orders.id',$id)
            ->get();
            // return $order;
        // return view('admin.invoice-delivered_1', array('order'=>$order))->with('admin',$admin);

        $pdf = PDF::loadView('admin.invoice-delivered', array('order'=>$order), array('admin'=>$admin));
        return $pdf->download('invoice.pdf');
    }
}
