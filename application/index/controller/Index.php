<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        echo 'test';
        exception('错误异常', 10000);
        return 'running on hello tp5 swoole';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
