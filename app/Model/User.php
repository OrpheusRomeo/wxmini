<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\DB;

class User extends Model
{
    //
    protected $table = 'tb_user';
    protected $fillable = [
        'user_name',
        'gender',
        'avatar',
        'password',
        'token',
        'nickname',
        'email',
    ];

    // 我的想法是只有一个用户,这是一个个人博客，并且不支持其他人注册
    static function getUser(){
        $user = self::all();

        return $user;
    }
}
