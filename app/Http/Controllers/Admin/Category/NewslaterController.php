<?php

namespace App\Http\Controllers\Admin\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewslaterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function newslater(){
        $newslater = DB::table('newslaters')->get();
        return view('admin.newslater.newslater', compact('newslater'));
    }

    public function StoreNewslater(Request $request){
        $validateData = $request->validate([
            'email'     => 'required|unique:newslaters|max:200',
        ]);

        $data = array(
            'email'         => $request->email,
            'created_at'    => date('d-m-Y'),
            'updated_at'    => date('d-m-Y'),
        );

        DB::table('newslaters')->insert($data);

        $notification=array(
            'messege'=>'Abonelik Eklendi!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function UpdateNewslaterPage($id){
        $newslater = DB::table('newslaters')->where('id', $id)->first();
        return view('admin.newslater.edit_newslater', compact('newslater'));
    }

    public function UpdateNewslater(Request $request, $id){
        $validateData = $request->validate([
            'email'     => 'required|max:200',
        ]);

        $data = array(
            'email'         => $request->email,
            'updated_at'    => date('d-m-Y'),
        );

        $update = DB::table('newslaters')->where('id', $id)->update($data);

        if($update){
            $notification=array(
                'messege'=>'Abonelik Güncellendi!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Abonelik Güncelleme Başarısız!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function DeleteNewslater($id){
        DB::table('newslaters')->where('id', $id)->delete();
        $notification=array(
            'messege'=>'Abonelik Silindi!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
