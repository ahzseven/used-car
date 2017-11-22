<?php

namespace Admin\Controller;

use Think\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct();
//        if (!$token = $_COOKIE['token']) {
//            $this->error('请登录后再访问', U("User/login"));
//        }
//        $User = M("User");
//        $user = $User->where("token='$token'")->find();
//        if (!$user) {
//            $this->error('请登录后再访问', U("User/login"));
//        }
//        $this->redirect("Index/index");
    }

    /**
     * 登录验证
     */
    public function login()
    {
        if (IS_POST) {
            $success = true;

            $data['email'] = I("post.email");
            $password = I("post.password");

            $User = M("User");
            $LoginFailed = D("LoginFailed");

            // 一个小时内,连续5次登录失败,调用check_failed_times()
            if (!$LoginFailed->check_failed_times()) {
                $this->error('你已经登录错误超过5次,请一个小时后再登录');
            }

            $user = $User->where($data)->find();
            if (!$user) {
                $success = false;
            }

            if ($user['password'] != $password) {
                $success = false;
            }

            // 一个小时内,登录失败,记录账号失败信息
            if (!$success) {
                $LoginFailed->update_failed_times();
                $this->error('信息填写错误');
            }

            // 设置cookie
            if (isset($_POST['remember'])) {
                // 设置cookie
                setcookie('token', $user['token'], time() + 60*60*24*7, '/');
            } else {
                // 清除cookie
                setcookie('token', '', time()-10, '/');
            }

            // 设置session
            $_SESSION['user'] = $user;
            //是超级管理员给个标识
            if($user['user']['name'] == C('AUTH_CONFIG.AUTH_SUPER')){
                $_SESSION['user']['isadmin']=1;
            }
            return;
        }

        $this->display();
    }

    /**
     * 验证码
     */
    public function verify()
    {
        $Verify = new \Think\Verify();
        $Verify->length  = 2;
        $Verify->codeSet = '0123456789';
        $Verify->fontttf = '5.ttf';
        $Verify->entry();
    }

    /**
     * 检查验证码是否匹配
     */
    public function check_verify()
    {
        $code = I("get.code");
        $verify = new \Think\Verify();
        $this->ajaxReturn($verify->check($code));
    }

    /**
     * 注册
     */
    public function register()
    {
        if (IS_POST) {
            $data['name']     = I("post.name");
            $data['email']    = I("post.email");
            $data['phone']    = I("post.phone");
            $data['password'] = I("post.password");

            $user = M("user");

            $result = $user->where('name="' . $data['name'] . '"')->find();
            if ($result) {
                $this->error('用户名重复,请重新填写后,再提交!~~');
            }

            $result2 = $user->where('email="' . $data['email'] . '"')->find();
            if ($result2) {
                $this->error('邮箱重复,请重新填写后,再提交!~~');
            }

            $result3 = $user->where('phone="' . $data['phone'] . '"')->find();
            if ($result3) {
                $this->error('手机号码重复,请重新填写后,再提交!~~');
            }

            $data['created_at'] = time();
            $data['updated_at'] = time();

            // 随机32位字符串
            $string = random_bytes(32);
            $data['token'] = bin2hex($string);

            $user->data($data)->add();
        }
        $this->display();
    }

    /**
     * 用户管理列表
     */
    public function index()
    {
        $user = M("User");
        $data = $user->select();
        $this->assign('list', $data);
        dump($_COOKIE['token']);

        $this->display();
    }

    /**
     * 退出系统
     */
    public function logout()
    {
        //清除session和cookie
        $_SESSION=array();
        if(isset($_COOKIE['token'])) {
            setcookie('token', "", time()-3600, "/");
        }
        session_destroy();

        $this->redirect('Admin/User/login');
    }
}