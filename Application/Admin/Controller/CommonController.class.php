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

        // 获取当前的模型 / 控制器 / 方法
        $name = MODULE_NAME . '/' . CONTROLLER_NAME . '/' . ACTION_NAME;

        /**
         * 验证当前用户权限
         * 若为超级管理员不用验证
         */

            if (!$auth->check($name, $user['id'])) {
                $this->error('你没有权限访问, 请与管理员联系!!');
            }

        // 返回用户菜单列表,模板直接输出
        $menus = $this->menus();
        $this->assign("menus", $menus);
    }

    private function menus()
    {
        $user = $_SESSION['user'];
        // 菜单缓存文件名 = 'menus_' + 用户id
        $cache_name = 'menus_' . $user['id'];

        if (!S($cache_name)) {
            $AuthRule = D("AuthRule");
            $menus = $AuthRule->relation(true)->where("parent_id=0")->order("sort asc")->select();
            $auth = new Auth();

            foreach($menus as $key => $value) {
                if (!$auth->check($value['name'], $user['id'])) {
                    unset($menus[$key]);
                    continue;
                }

                foreach ($value['children'] as $k => $v) {
                    if (!$auth->check($v['name'], $user['id'])) {
                        unset($menus[$key]['children'][$k]);
                    }
                }
            }
            S($cache_name, $menus);
        }
//        var_dump($menus);
        return $menus;
        return S($cache_name);
    }


}