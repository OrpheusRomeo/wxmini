<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User;

class UserController extends Controller
{
    public function getUserInfo(){
        $user = User::getUser();

        return $user; 
    }
}
