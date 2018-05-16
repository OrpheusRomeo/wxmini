<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Comment;

class CommentsController extends Controller
{
    public function getComments(Request $request){
        $article_id = intval($request->input('article_id'));
        $commentList = Comment::getList($article_id);

        return $this->success($commentList); 
    }

    public function addComments(Request $request){
        $article_id = intval($request->input('article_id'));
        $comment = trim($request->input('comment'));
        $email = trim($request->input('email'));
        $nickname = trim($request->input('nickname'));
        $data = [
            'article_id' => $article_id,
            'guest_comment' => $comment,
            'guest_name' => $nickname,
            'guest_email' => $email,
        ];
        $commentList = Comment::addComment($data);

        return $this->success($commentList); 
    }

    public function delComments(Request $request){
        $article_id = intval($request->input('article_id'));
        $commentList = Comment::getList($article_id);

        return $this->success($commentList); 
    }

}
