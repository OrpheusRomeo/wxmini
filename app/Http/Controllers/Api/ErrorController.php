<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ErrorController extends Controller
{
    // 报错页面
    public function getErrorPage($errorCode){
        
        return view('errors.'. $errorCode);
    }

}
