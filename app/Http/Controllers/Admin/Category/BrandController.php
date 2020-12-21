<?php

namespace App\Http\Controllers\Admin\Category;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Admin\Brand;
class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function brand(){
        $brand = Brand::all();
        return view('admin.category.brand', compact('brand'));
    }

    public function StoreBrand(Request $request){
        $validateData = $request->validate([
            'brand_name' => 'required|unique:brands|max:255',
            'brand_logo' => 'image|mimes:jpg,png,svg,gif,jpeg|max:2048'
        ]);

        $image = $request->file('brand_logo'); 

        if($image){
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/brand/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
       
           
            $data = array(
                'brand_name' => $request->brand_name,
                'brand_logo' => $image_url,
                'created_at' => date('d-m-Y'),
                'updated_at' => date('d-m-Y'),
            );

            $brands = DB::table('brands')->insert($data);

            $notification=array(
                'messege'=>'Marka Eklendi!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $data = array(
                'brand_name' => $request->brand_name,
                'created_at' => date('d-m-Y'),
                'updated_at' => date('d-m-Y'),
            );

            $brands = DB::table('brands')->insert($data);

            $notification=array(
                'messege'=>'Marka Eklendi!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function UpdateBrandPage($id){
        $brand = DB::table('brands')->where('id', $id)->first();
        return view('admin.category.edit_brand', compact('brand'));
    }

    public function UpdateBrand(Request $request, $id){       
        
        $image = $request->file('brand_logo'); 

        if($image){
            $image_name = date('dmy_H_s_i');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'public/media/brand/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
       
           
            $data = array(
                'brand_name' => $request->brand_name,
                'brand_logo' => $image_url,
                'updated_at' => date('d-m-Y'),
            );

            $brands = DB::table('brands')->where('id', $id)->update($data);

            $notification=array(
                'messege'=>'Marka Güncellendi!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $data = array(
                'brand_name' => $request->brand_name,
                'updated_at' => date('d-m-Y'),
            );

            $brands = DB::table('brands')->where('id', $id)->update($data);

            $notification=array(
                'messege'=>'Marka Güncellendi!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function DeleteBrand($id){
        DB::table('brands')->where('id', $id)->delete();
        $notification=array(
            'messege'=>'Marka Silindi!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
