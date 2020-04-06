<?php
/**
 * 该文件主要是存放业务状态码相关的配置
 * Created by PhpStorm.
 * User: jinjunbin <13585687317@163.com>
 * Date: 2020/1/14
 * Time: 11:14
 */

return [
    "success"               => 1,
    "error"                 => 0,
    "not_login"             => -1,
    "user_is_register"      => -2,
    "action_not_found"      => -3,
    "controller_not_found"  => -4,

    // mysql相关的状态配置
    "mysql" => [
        "table_normal"  => 1, //正常
        "table_pedding" => 0, //待审核
        "table_delete"  => 99, //删除
    ],

    // Show::error调用 status 对应的相关错误文字配置
    "error_code" => [
        "999"   => '未知错误 sorry，we make a mistake. (^o^)Y',
        "1"     => '开头为通用错误',
        "10000" => '通用参数错误 invalid parameters',
        "10001" => '资源未找到 global:your required resource are not found',
        "10002" => '未授权（令牌不合法）',
        "10003" => '尝试非法操作（自己的令牌操作其他人数据）',
        "10004" => '授权失败（第三方应用账号登陆失败）',
        "10005" => '授权失败（服务器缓存异常）',
        "2"     => '商品类错误',
        "20000" => '请求商品不存在',
        "3"     => '主题类错误',
        "30000" => '请求主题不存在',
        "4"     => 'Banner类错误',
        "40000" => 'Banner不存在',
        "5"     => '类目类错误',
        "50000" => '类目不存在',
        "6"     => '用户类错误',
        "60000" => '用户不存在',
        "60001" => '用户地址不存在',
        "8"     => '订单类错误',
        "80000" => '订单不存在',
        "80001" => '订单中的商品不存在，可能已被删除',
        "80002" => '订单还未支付，却尝试发货',
        "80003" => '订单已支付过',
    ],
];
