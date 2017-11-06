<?php

namespace Admin\Model;

use Think\Model;

class LoginFailedModel extends Model
{
    // 一个小时内, 登录失败次数==5,不允许登录,返回false
    public function check_failed_times()
    {
        $ip = get_client_ip();
        $email = I("post.email");
        $error = $this->where("email = '$email' and ip = '$ip'")->find();

        if ($error['login_at'] + 60 * 60 > time() && $error['error_times'] == 5) {

            return false;
        }

        return true;
    }

    // 一个小时内,登陆失败次数!=5
    public function update_failed_times()
    {
        $ip = get_client_ip();
        $email = I("post.email");
        $error = $this->where("email = '$email' and ip = '$ip'")->find();

        // 第一次登录失败,记录信息
        if (!$error) {
            $data['ip'] = $ip;
            $data['email'] = $email;
            $data['login_at'] = time();
            $data['error_times'] = 1;
            $this->data($data)->add();
        }

        // 存在登录失败记录, 一个小时后登录
        if ($error['login_at'] + 60 * 60 < time()) {
            $array['id'] = $error['id'];
            $array['login_at'] = time();
            $array['error_times'] = 1;
            $this->data($array)->save();
        }

        // 存在记录,一个小时内,连续登录,error_times自增
        if ($error['login_at'] + 60 * 60 > time()) {
            $this->where("id =".$error['id'])->setInc('error_times');
        }
    }
}