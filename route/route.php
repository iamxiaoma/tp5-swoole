<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Request;

/**
 * 路由没有匹配时返回错误信息
 */
Route::miss(function(Request $request){
    $baseUrl = $request->baseUrl(true);
    return '访问的路由 '. $baseUrl .' 不存在';
});


return [

];
