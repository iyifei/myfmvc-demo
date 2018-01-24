<?php
use Common\Model\UserModel;
use Myf\Libs\Task;

/**
 * remark
 * User: myf
 * Date: 2017/12/28
 * Time: 15:29
 */
class TestTask extends Task
{

    public function abcAction() {
        $model = new UserModel();
        $users = $model->findAll();
        print_r($users);
    }

}