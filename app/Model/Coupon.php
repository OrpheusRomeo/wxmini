<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Coupon extends Model
{
    //
    protected $table = 'tb_userbindproduct';
    protected $fillable = [
        'userid',
        'productid',
        'status',
        'created_at',
        'updated_at',
    ];

    public  function getUserCoupons($userId){
        $result = DB::table('tb_userbindproduct as b')
            ->select('b.*', 'u.user_name as user_name', 'u.nickname as nickname', 'u.wxopenid as wxopenid', 'p.name as pname', 'p.expiredtime as expiredtime')
            ->leftJoin('tb_user as u','u.id','=','b.userid')
            ->leftJoin('tb_product as p', 'p.id', '=', 'b.productid')
            ->where('b.userid', '=', $userId)
            ->where('b.status', 1)
            ->get();
        return $result;
    }
}
