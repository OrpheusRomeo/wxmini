<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    protected $table = 'tb_gallery';
    protected $fillable = [
        'url',
        'belong_to',
        'created',
    ];
}
