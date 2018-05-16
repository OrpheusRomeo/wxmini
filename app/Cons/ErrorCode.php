<?php

/* 返回状态值
 * created by vim
 * user Peter.R.Orpheus
 * time 2018-02-08 10:42
 */


namespace App\Cons;

class ErrorCode 
{
    // 成功 0
    const ERRNUM_SUCCESS = 0;

    // 用户类 1XX
    const ERRNUM_USER_INFO_ERROR = 101;

    // 文章类 2XX
    const ERRNUM_ARTICLE_NOT_FOUND = 201; 
    const ERRNUM_ARTICLE_EXIST = 202;
    const ERRNUM_ARTICLE_ADD_ERR = 203;


    // 图片视频类  3XX
    const ERRNUM_RESOURCE_NOT_FOUND = 301;
    const ERRNUM_RESOURCE_EXIST = 302;

    // 分类
    const ERRNUM_CATEGORY_EXIST = 401;



    // success
    const SHOW_ERRNUM_SUCCESS  = [self::ERRNUM_SUCCESS, '请求成功'];

    // user
    const SHOW_ERRNUM_USER_INFO_ERROR = [self::ERRNUM_USER_INFO_ERROR, '用户信息错误'];
    
    // article
    const SHOW_ERRNUM_ARTICLE_NOT_FOUND = [self::ERRNUM_ARTICLE_NOT_FOUND, '文章不存在或已被删除'];
    const SHOW_ERRNUM_ARTICLE_EXIST = [self::ERRNUM_ARTICLE_EXIST, '文章已存在'];
    const SHOW_ERRNUM_ARTICLE_ADD_ERR = [self::ERRNUM_ARTICLE_ADD_ERR, '文章创建失败'];

    // resource
    const SHOW_ERRNUM_RESOURCE_NOT_FOUND = [self::ERRNUM_RESOURCE_NOT_FOUND, '资源不存在'];
    const SHOW_ERRNUM_RESOURCE_EXIST = [self::ERRNUM_RESOURCE_EXIST, '资源已存在'];

    // category 
    const SHOW_ERRNUM_CATEGORY_EXIST = [self::ERRNUM_CATEGORY_EXIST, '分类已存在'];

}






