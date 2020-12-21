<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $product = 
        DB::table('products')
        ->join('categories', 'products.category_id', 'categories.id')
        ->join('subcategories', 'products.category_id', 'subcategories.category_id')
        ->join('brands', 'products.brand_id', 'brands.id')
        ->select('products.*', 'categories.category_name', 'brands.brand_name', 'subcategories.subcategory_name')
        ->get();

        return view('admin.product.index', compact('product'));
                            
    }

    public function create(){

        $category = DB::table('categories')->get();
        $brand = DB::table('brands')->get();
        return view('admin.product.create', compact('category', 'brand'));
    }

    public function store(Request $request){

        $validateData = $request->validate([
            'image_one' => 'image|mimes:jpg,png,svg,gif,jpeg|max:2048',
            'image_two' => 'image|mimes:jpg,png,svg,gif,jpeg|max:2048',
            'image_three' => 'image|mimes:jpg,png,svg,gif,jpeg|max:2048',
        ]);

        $image_one = $request->file('image_one'); 
        $image_two = $request->file('image_two'); 
        $image_three = $request->file('image_three'); 

        if($image_one && $image_two && $image_three){
            $path = 'public/media/product/';

            $image_one_name = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(300,300)->save($path.$image_one_name);
            $image_path_one = $path.$image_one_name;

            $image_two_name = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(300,300)->save($path.$image_two_name);
            $image_path_two = $path.$image_two_name;

            $image_three_name = hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
            Image::make($image_three)->resize(300,300)->save($path.$image_three_name);
            $image_path_three = $path.$image_three_name;

            $data = array(
                'category_id'       =>  $request->category_id,
                'subcategory_id'    =>  $request->subcategory_id,
                'brand_id'          =>  $request->brand_id,
                'product_name'      =>  $request->product_name,
                'product_code'      =>  $request->product_code,  
                'product_quantity'  =>  $request->product_quantity,  
                'product_detail'    =>  $request->product_details,  
                'product_color'     =>  $request->product_color,  
                'product_size'      =>  $request->product_size,  
                'selling_price'     =>  $request->selling_price,  
                'discount_price'    =>  $request->discount_price,  
                'video_link'        =>  $request->video_link,  
                'main_slider'       =>  1,
                'hot_deal'          =>  1,
                'best_rated'        =>  1,
                'mid_slider'        =>  1,
                'hot_new'           =>  1,
                'trend'             =>  1,
                'image_one'         =>  $image_path_one, 
                'image_two'         =>  $image_path_two,  
                'image_three'       =>  $image_path_three,  
                'status'            =>  1,
                'created_at'        =>  date('d-m-Y'),
                'updated_at'        =>  date('d-m-Y'),
            );
                

            $product = DB::table('products')->insert($data);

            $notification=array(
                'messege'=>'Ürün Eklendi!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Ürün Eklenemedi!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
           
    }

    public function ViewProduct($id){
        $product = 
        DB::table('products')
        ->join('categories', 'products.category_id', 'categories.id')
        ->join('subcategories', 'products.category_id', 'subcategories.category_id')
        ->join('brands', 'products.brand_id', 'brands.id')
        ->select('products.*', 'categories.*', 'brands.*', 'subcategories.*')
        ->where('products.id', $id)
        ->first();

        return view('admin.product.show', compact('product'));
    }

    public function UpdateProductPage($id){
        $product = DB::table('products')->where('id', $id)->first();
        $category = DB::table('categories')->get();
        $subcategory = DB::table('subcategories')->get();
        $brand = DB::table('brands')->get();

        return view('admin.product.edit', compact('product', 'category', 'subcategory', 'brand'));
    }

    public function UpdateProduct(Request $request, $id){
        print_r($request->main_slider); die;
        $data = array(
            'category_id'       =>  $request->category_id,
            'subcategory_id'    =>  $request->subcategory_id,
            'brand_id'          =>  $request->brand_id,
            'product_name'      =>  $request->product_name,
            'product_code'      =>  $request->product_code,  
            'product_quantity'  =>  $request->product_quantity,  
            'product_detail'    =>  $request->product_details,  
            'product_color'     =>  $request->product_color,  
            'product_size'      =>  $request->product_size,  
            'selling_price'     =>  $request->selling_price,  
            'discount_price'    =>  $request->discount_price,  
            'video_link'        =>  $request->video_link,  
            'main_slider'       =>  1,
            'hot_deal'          =>  1,
            'best_rated'        =>  1,
            'mid_slider'        =>  1,
            'hot_new'           =>  1,
            'trend'             =>  1,
            'status'            =>  1,
            'updated_at'        =>  date('d-m-Y'),
        );
            

        $product = DB::table('products')->where('id', $id)->update($data);

        $notification=array(
            'messege'=>'Ürün Güncellendi!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function UpdateImageProduct(Request $request, $id){
        $validateData = $request->validate([
            'image_one' => 'image|mimes:jpg,png,svg,gif,jpeg|max:2048',
            'image_two' => 'image|mimes:jpg,png,svg,gif,jpeg|max:2048',
            'image_three' => 'image|mimes:jpg,png,svg,gif,jpeg|max:2048',
        ]);

        $image_one = $request->file('image_one'); 
        $image_two = $request->file('image_two'); 
        $image_three = $request->file('image_three'); 

        if($image_one){
            $path = 'public/media/product/';

            $image_one_name = hexdec(uniqid()).'.'.$image_one->getClientOriginalExtension();
            Image::make($image_one)->resize(300,300)->save($path.$image_one_name);
            $image_path_one = $path.$image_one_name;

            $data = array(
                'image_one'         =>  $image_path_one, 
            );
            
            $product = DB::table('products')->where('id', $id)->update($data);

            $notification=array(
                'messege'=>'Ürün Fotoğrafları Güncellendi!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        if($image_two){
            $path = 'public/media/product/';

            $image_two_name = hexdec(uniqid()).'.'.$image_two->getClientOriginalExtension();
            Image::make($image_two)->resize(300,300)->save($path.$image_two_name);
            $image_path_two = $path.$image_two_name;

            $data = array(
                'image_two'         =>  $image_path_two,  
            );
                

            $product = DB::table('products')->where('id', $id)->update($data);

            $notification=array(
                'messege'=>'Ürün Fotoğrafları Güncellendi!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
        if($image_three){
            $path = 'public/media/product/';

            $image_three_name = hexdec(uniqid()).'.'.$image_three->getClientOriginalExtension();
            Image::make($image_three)->resize(300,300)->save($path.$image_three_name);
            $image_path_three = $path.$image_three_name;

            $data = array(
                'image_three'       =>  $image_path_three,  
            );

            $product = DB::table('products')->where('id', $id)->update($data);

            $notification=array(
                'messege'=>'Ürün Fotoğrafları Güncellendi!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Ürün Fotoğrafları Güncellenemedi!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function GetSubcat($category_id){
        $cat = DB::table('subcategories')->where('category_id', $category_id)->get();
        return json_encode($cat);
    }

    public function inactive($id){
        DB::table('products')->where('id', $id)->update(['status' => 0]);

        $notification=array(
            'messege'=>'Ürün Pasif!',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
    }

    public function active($id){
        DB::table('products')->where('id', $id)->update(['status' => 1]);

        $notification=array(
            'messege'=>'Ürün Aktif!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function DeleteProduct($id){
        DB::table('products')->where('id', $id)->delete();
        $notification=array(
            'messege'=>'Ürün Silindi!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
