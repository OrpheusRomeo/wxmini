<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'tb_video';
    protected $fillable = [
        'name',
        'type',
        'description',
        'created_at',
        'updated_at',
    ];

    public static function getVideos(){
        $result = self::get();

        return $result;
    }

    public static function getOne($id){
        $result = self::find($id);

        return $result;
    }

    public static function addVideo($data){
        $result = self::insert($data);

        return $result;
    }

    public static function delVideo($arr){
        $result = self::destory($arr);

        return $result;
    }
    
    public static function updateVideo($data){
        $result = self::query()->find($data['id']);
        $result->update([$data]);

        return $result;
    }

}
