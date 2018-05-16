<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Article;
use App\Cons\ErrorCode;

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

    public function addArticle(Request $request){
        $title = trim($request->input('title'));
        $pic_url = trim($request->input('pic_url'));
        $content = trim($request->input('content'));
        $article_category = trim($request->input('category_id'));
        $tag = trim($request->input('tag'));

        $data = [
            'author' => 1,
            'title' => $title,
            'pic_url' => $pic_url,
            'content' => $content,
            'article_category' => $article_category,
            'tag' => $tag,
            'created_at' => date('Y-m-d H:i:s', time()),
            'updated_at' => date('Y-m-d H:i:s', time()),
            'article_click' =>  0,
            'is_up' => 0,
        ];

        $articleList = Article::addArticle($data);
        if( !empty($articleList)){
            return $this->success($articleList);
        }else{
            return $this->failArr(ErrorCode::SHOW_ERRNUM_ARTICLE_ADD_ERR);
        }
    }

    public function delArticle(Request $request){
        $ids = trim($request->input('article_ids'));
        $arr = explode(',', $ids);
        $result = Article::delArticle($arr);

        if( !empty($result) ){
            return $this->success($result);
        }else{
            return $this->failArr(ErrorCode::SHOW_ERRNUM_ARTICLE_NOT_FOUND);
        }
    }

}
