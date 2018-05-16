<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $pageSize = 20;
    protected function success($data = 'success'){
        return response()->json(['code' => '0', 'data' => $data]);
    }

    protected function fail($code, $data = 'fail'){
        return response()->json(['code' => $code, 'data' => $data]);
    }
    
    protected function failArr(array $arr) {
       return response()->json(['code' => $arr[0], 'data' => $arr[1]]);
    }

    protected function anyEmpty(array $arr) {
        foreach ($arr as $val) {
            if (empty($val)) {
                return false;
            }
        }
        return true;
    }
    protected function ajaxRedirect($url, $tip ='') {
        if (empty($tip)) $tip = "即将跳转至 $url";
        return response()->json(
            ['code'=>'302','data'=>$tip],
            200,
            ['REDIRECT'=>'REDIRECT','CONTENTPATH'=>$url]
        );
    }
    protected function pageSize(Request $request) {
        $pageSize = (int)$request->input('pageSize');
        if (empty($pageSize) || $pageSize <=0 ) {
            return $this->pageSize;
        }
        return $pageSize;
    }
}
