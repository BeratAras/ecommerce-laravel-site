<?php

namespace App\Http\Controllers\Admin\Category;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Admin\Category;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function category(){
        $category = Category::all();
        return view('admin.category.category', compact('category'));
    }

    public function StoreCategory(Request $request){
        $validateData = $request->validate([
            'category_name' => 'required|unique:categories|max:255',
        ]);

        $data = array(
            'category_name' => $request->category_name,
            'created_at'    => date('d-m-Y'),
            'updated_at'    => date('d-m-Y'),
        );

        DB::table('categories')->insert($data);

        $notification=array(
            'messege'=>'Kategori Eklendi!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function UpdateCategoryPage($id){
        $category = DB::table('categories')->where('id', $id)->first();
        return view('admin.category.edit_category', compact('category'));
    }

    public function UpdateCategory(Request $request, $id){
        $validateData = $request->validate([
            'category_name' => 'required|max:255',
        ]);
        
        $data = array(
            'category_name' => $request->category_name,
            'updated_at'    => date('d-m-Y')
        );

        $update = DB::table('categories')->where('id', $id)->update($data);

        if($update){
            $notification=array(
                'messege'=>'Kategori Güncellendi!',
                'alert-type'=>'success'
            );
            return Redirect()->route('categories')->with($notification);
        }else{
            $notification=array(
                'messege'=>'Kategori Güncelleme Başarısız!',
                'alert-type'=>'error'
            );
            return Redirect()->route('categories')->with($notification);
        }
    }

    public function DeleteCategory($id){
        DB::table('categories')->where('id', $id)->delete();
        $notification=array(
            'messege'=>'Kategori Silindi!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
