<?php

namespace App\Http\Controllers\Admin\Category;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Admin\Coupon;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function Coupon(){
        $coupon = DB::table('coupons')->get();
        return view('admin.coupon.coupon', compact('coupon'));
    }

    public function StoreCoupon(Request $request){
        $validateData = $request->validate([
            'coupon' => 'required|unique:coupons|max:8',
            'discount' => 'required|max:255',
        ]);

        $data = array(
            'coupon'        => $request->coupon,
            'discount'      => $request->discount,
            'created_at'    => date('d-m-Y'),
            'updated_at'    => date('d-m-Y'),
        );

        DB::table('coupons')->insert($data);

        $notification=array(
            'messege'=>'Kupon Eklendi!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }

    public function UpdateCouponPage($id){
        $coupon = DB::table('coupons')->where('id', $id)->first();
        return view('admin.coupon.edit_coupon', compact('coupon'));
    }

    public function UpdateCoupon(Request $request, $id){
        $validateData = $request->validate([
            'coupon' => 'required|max:8',
            'discount' => 'required|max:255',
        ]);
        
        $data = array(
            'coupon'        => $request->coupon,
            'discount'      => $request->discount,
            'updated_at'    => date('d-m-Y'),
        );

        $update = DB::table('coupons')->where('id', $id)->update($data);

        if($update){
            $notification=array(
                'messege'=>'Kupon Güncellendi!',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $notification=array(
                'messege'=>'Kupon Güncelleme Başarısız!',
                'alert-type'=>'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function DeleteCoupon($id){
        DB::table('coupons')->where('id', $id)->delete();
        $notification=array(
            'messege'=>'Kupon Silindi!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
