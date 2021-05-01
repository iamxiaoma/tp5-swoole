<?php
namespace app\index\controller;

use think\exception\HttpException;

class Index
{
    public function index()
    {
        try {
            // 使用think自带异常类抛出异常
//            throw new \think\Exception('异常消息', 10006);
//            throw new HttpException(10000, '异常信息');
//            exception('asdfasfas', 10000);

            return json_encode('asdfasdfasd', JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);//exit();


//            return 'running on hello tp5 swoole';
        } catch (\Exception $e) {
            echo 'asfasd';
        }
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
