<?php

namespace Admin\Controller;

use Think\Controller;
use Think\Auth;

class AuthController extends CommonController
{
    public $rule;
    public $group;

    public function __construct()
    {
        parent::__construct();
        $this->rule = D("AuthRule");
        $this->group = M("AuthGroup");
//        $this->lists = D("AuthRule")->order("sort asc")->select();
    }

    // 权限管理列表
    public function rule_index()
    {
        $data = $this->rule->order("sort asc")->select();
        $list = $this->getList($data);

        $this->assign('lists', $list);
        $this->display();
    }

    /**
     * 循环三层菜单列表
     * @param $list    所有菜单
     * @param string $id   id
     * @param string $pid   父id
     * @param string $child   映射的键名
     * @param int $root
     * @return array
     */
    public function getList($list, $id = 'id', $pid = 'parent_id', $child = 'son', $root = 0)
    {
        // 创建Tree
        $tree = [];
        if (is_array($list)) {
            // 创建基于主键的数组引用
            $refer = [];
            foreach ($list as $key => $data) {
                $refer[$data[$id]] = &$list[$key];
            }
            foreach ($list as $key => $data) {
                // 判断是否存在parent
                $parentId = $data[$pid];
                if ($root == $parentId) {
                    $tree[] = &$list[$key];
                } else {
                    if (isset($refer[$parentId])) {
                        $parent = &$refer[$parentId];
                        $parent[$child][] = &$list[$key];
                    }
                }
            }
        }

        return $tree;
    }


    // 增加权限
    public function rule_add()
    {
        // 添加权限菜单
        if (IS_POST) {
            // 创建数据对象
            if($this->rule->create()){
                $this->rule->add(); // 写入数据到数据库
            }
        }

        $data = $this->rule->where("parent_id = 0")->order("sort asc")->select();
        foreach ($data as $key =>$value){
            $list = $this->rule->where("parent_id = '$value[id]'")->order("sort asc")->select();
            $data[$key]['children'] = $list;
        }
        $this->assign('list', $data);

        $this->display();
    }

    // 编辑权限
    public function rule_edit()
    {
        $this->display();
    }

    // 删除权限
    public function rule_delete()
    {

    }

    // 用户组管理列表
    public function group_index()
    {
        $lists = $this->group->select();
        $this->assign("lists", $lists);

        $this->display();
    }

    // 增加用户组
    public function group_add()
    {
        // 权限列表
        $data = $this->rule->order("sort asc")->select();
        $lists = $this->getList($data);
        $this->assign('lists', $lists);

        $this->display();
    }

    // 用户组权限写入数据库
    public function group_store()
    {
        if(IS_POST){
            $rules = $_POST['rule_id'];
            $data['rules'] = implode(",", $rules);
            $data['title'] = $_POST['title'];

            $this->group->data($data)->add();

            $this->success("新增用户组成功", U("Auth/group_index"));
        }
    }

    // 编辑用户组权限
    public function group_edit()
    {
        // 权限列表
        $data = $this->rule->order("sort asc")->select();
        $lists = $this->getList($data);
        $this->assign('lists', $lists);

        if (IS_GET) {
            $id = I("get.id");
            $data = $this->group->find($id);
            $rules = explode(",", $data['rules']);   // 拆分为一个数组
            $this->assign("rules", $rules);
            $this->assign("data", $data);
        }

        $this->display();
    }

    // 更新用户组权限
    public function group_update()
    {
        if (IS_POST) {
            $rules = $_POST['rule_id'];
            $data['id'] = $_POST['id'];
            $data['rules'] = implode(",", $rules);  // 逗号拼接成字符串
            $data['title'] = $_POST['title'];

            $this->group->save($data);

            $this->success("编辑用户组成功", U("Auth/group_index"));
        }
    }

    // 删除用户组
    public function group_delete()
    {

    }

    // 用户管理列表
    public function user_index()
    {
        $user = M("User");
        $data = $user->select();
        $this->assign('list', $data);

        $this->display();
    }
}