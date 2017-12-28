<?php
/**
 * 数据库配置
 * User: myf
 * Date: 16/9/21
 * Time: 下午4:22
 */
return array(
    //数据库链接配置
    'database' => array(
        'default' => array(
            'host' => 'localhost',
            'port' => '3306',
            'username' => 'root',
            'password' => '123456',
            'dbname' => 'myfmvc',
            'charset' => 'utf8',
            'prefix' => ''
        ),
    ),
    //默认db
    'default_db' => 'default',
);
