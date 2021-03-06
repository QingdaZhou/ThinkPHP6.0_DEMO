<?php
/**
 * apiBase 相当于 wechat模块下的公共控制器, 如果不需要登录场景继承这个控制器
 * 那么如果需要登录场景 那他就需要继承AuthBase
 * Created by PhpStorm.
 * User: jinjunbin <13585687317@163.com>
 * Date: 2020/1/20
 * Time: 15:13
 */
namespace app\wechat\controller;

use app\BaseController;
use think\exception\HttpResponseException;

class WechatBase extends BaseController
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
    }

    public function show(...$args)
    {
        throw new HttpResponseException(show(...$args));
    }
}
