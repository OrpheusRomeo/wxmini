<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cons\ErrorCode; 
use App\Model\Coupon;

class CouponController extends Controller
{
    public function getUserCoupons(Request $request){
        $id = intval($request->input('id'));
        if(empty($id)){
           return  $this->failArr(ErrorCode::SHOW_ERRNUM_USERID_NOEXIST);
        }
        $coupon = new Coupon;
        $result = $coupon->getUserCoupons($id);

        return $this->success($result); 
    }
}
