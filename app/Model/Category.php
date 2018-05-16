<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // 分类
    protected $table = 'tb_category';
    protected $fillable = [
        'name',
        'type',
        'created_at',
        'updated_at',
    ];

    public static function getList(){
        $result = self::get()->toArray();

        return $result;
    }
   
    public static function getOne($id){
        $result = self::find($id);

        return $result;
    }

    public static function addCategory($name){
        $result = self::insert(['name' => $name]);
        
        return $result;
    }

    public static function updateCategory($data){
        $result = self::query()->find($data['id']);
        $result->update($data);

        return $result;
    }

    public static function delCategory($arr){
        $result = self::destroy($arr);
        
        return $result;
    }


    // 确定分类是否存在，返回布尔值
    public static function existCategory($name){
        $arr = self::select()->pluck('name')->toArray();

        return in_array($name, $arr);
    }

}
