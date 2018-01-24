<?php
/**
 * 入口文件
 * User: myf
 * Date: 2017/12/28
 * Time: 11:44
 */

define('APP_PATH', __DIR__.'/');
define("SYS_PATH",dirname(APP_PATH));
define('COMMON_PATH', SYS_PATH.'/Common/');
define('OP_CONF_DIR','/data/www/opconfig/');
require_once SYS_PATH.'/vendor/autoload.php';