<?php

namespace Controller;

use Model\UserModel;
use Myf\Libs\Controller;

/**
 * remark
 * User: myf
 * Date: 2017/12/28
 * Time: 14:18
 */
class IndexController extends Controller
{

    public function indexAction(){
        echo "hello world";
    }

    public function testAction(){
        $this->assign('title',"MyfMVC DEMO");

        $userModel = new UserModel();
        $users = $userModel->findAll();
        $this->assign('users',$users);

        $this->display();
    }

}