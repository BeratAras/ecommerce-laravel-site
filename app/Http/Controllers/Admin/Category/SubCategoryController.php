<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\SubCategory;
use DB;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function SubCategory(){
        $category = DB::table('categories')->get();
        $subcat = 
        DB::table('subcategories')
        ->join('categories', 'subcategories.category_id', 'categories.id')
        ->select('subcategories.*', 'categories.category_name')
        ->get();

        return view('admin.category.subcategory', compact('category', 'subcat'));
    }

    public function StoreSubCategory(Request $request){
        $validateData = $request->validate([
            'subcategory_name' => 'required|unique:subcategories|max:255',
        ]);

        $data = array(
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'created_at'    => date('d-m-Y'),
            'updated_at'    => date('d-m-Y'),
        );

        DB::table('subcategories')->insert($data);

        $notification=array(
            'messege'=>'Kategori Eklendi!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function UpdateSubCategoryPage($id){
        $category = DB::table('categories')->get();
     
        $subcategory = DB::table('subcategories')->where('id', $id)->first();
        return view('admin.category.edit_subcategory', compact('subcategory', 'category'));
    }

    public function UpdateSubCategory(Request $request, $id){
        $validateData = $request->validate([
            'subcategory_name' => 'required|max:255',
        ]);
        
        $data = array(
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'updated_at'    => date('d-m-Y')
        );

        $update = DB::table('subcategories')->where('id', $id)->update($data);

        if($update){
            $notification=array(
                'messege'=>'Kategori Güncellendi!',
                'alert-type'=>'success'
            );
            return Redirect()->route('sub.categories')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Kategori Güncelleme Başarısız!',
                'alert-type'=>'error'
            );
            return Redirect()->route('sub.categories')->with($notification);
        }
    }

    public function DeleteSubCategory($id){
        DB::table('subcategories')->where('id', $id)->delete();
        $notification=array(
            'messege'=>'Alt Kategori Silindi!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
