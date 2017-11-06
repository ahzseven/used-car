<?php

namespace Admin\Controller;

use Think\Controller;
use Think\Auth;

class CommonController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        if (!$user = $_SESSION['user']) {
            $this->error('请登录后再访问', U("User/login"));
        }

        $auth = new Auth;

        $name = MODULE_NAME . '/' . CONTROLLER_NAME . '/' . ACTION_NAME;
//        echo $name;
    }
}