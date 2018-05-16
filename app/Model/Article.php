<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'tb_article';
    protected $fillable = [
        'title',
        'author',
        'comment',
        'pic_url',
        'content',
        'article_click',
        'article_category',
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

    public static function addArticle($data){
        $result = self::insert($data);

        return $result;
    }

    public static function delArticle($arr){
        $result = self::destroy($arr);

        return $result;
    }
}
