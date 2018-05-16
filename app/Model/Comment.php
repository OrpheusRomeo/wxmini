<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'tb_comment';
    protected $fillable = [
        'article_id',
        'user_id',
        'guest_comment',
        'guest_name',
        'guest_email',
        'created_at',
    ];

    public static function getList($id){
        $result =  self::where('article_id', $id)->get();

        return $result;
    }

    // 需要? 单独的评论?
    public static function getOne($id){
        $result = self::find($id);

        return $result; 
    }
}
