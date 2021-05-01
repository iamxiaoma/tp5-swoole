<?php


namespace app\common\exception;

use Exception;
use think\exception\Handle;
use think\exception\HttpException;
use think\exception\ValidateException;

class Http extends Handle
{

    public function render(Exception $e){

        // 参数验证错误
        if($e instanceof ValidateException){
            return json($e->getError(), 422);
        }

        // 请求异常
        if($e instanceof HttpException && request()->isAjax()){
            return response($e->getMessage(), $e->getStatusCode());
        }


        // return json('fasfas', 2000);

        return json_encode('asdfasdfasd', JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);//exit();

        // 其他错误交给系统处理
//        return parent::render($e);
    }

}