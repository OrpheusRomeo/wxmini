<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tb_product';
    protected $fillable = [
        'name',
        'upto',
        'minus',
        'pic_url',
        'expiredtime',
        'status',
        'created_at',
        'updated_at',
        'tag',
        'is_up',
    ];

    public static function getList(){
        $result = self::get();

        return $result;
    }

    public static function getOne($id){
        $result = self::find($id);

        return $result;
    }

    public static function addProduct($data){
        $result = self::insert($data);

        return $result;
    }

    public static function delProduct($arr){
        $result = self::destroy($arr);

        return $result;
    }
}
