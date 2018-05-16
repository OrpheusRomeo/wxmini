<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Article;

class ArticleController extends Controller
{
    public function getList(){
        $articleList = Article::all();

        return $this->success($articleList);
    }

    public function getOne(Request $request){
        $id = intval($request->input('article_id'));
        $article = Article::getOne($id);

        return $this->success($article);
    }
}
