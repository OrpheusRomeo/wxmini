<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;

class ProductController extends Controller
{
    public function getList(){
        $productList = Product::all();

        return $this->success($productList);
    }

    public function getOne(Request $request){
        $id = intval($request->input('product_id'));
        $product = Product::getOne($id);

        return $this->success($product);
    }
}
