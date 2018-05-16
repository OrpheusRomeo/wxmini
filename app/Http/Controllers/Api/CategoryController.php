<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Cons\ErrorCode;

class CategoryController extends Controller
{
    public function getCategory(){
        $category = Category::all();

        return $this->success($category);
    }

    public function addCategory(Request $request){
        $name = trim($request->input('name'));
        $exist = Category::existCategory($name);
        if($exist == true){
            return $this->failArr(ErrorCode::SHOW_ERRNUM_CATEGORY_EXIST);
        }else{
            $result = Category::addCategory($name);
            return $this->success($result);
        }
    }

    public function updateCategory(Request $request){
        $name = $request->input('name');
        $id = intval($request->input('id'));
        $data = ['id' => $id ,'name' => $name];
        $result = Category::updateCategory($data);

        return $this->success($result);
    }

    public function delCategory(Request $request){
        $ids = $request->input('ids');
        $arr = explode(',', $ids);
        $result = Category::delCategory($arr);

        return $this->success($result);
    }

}
