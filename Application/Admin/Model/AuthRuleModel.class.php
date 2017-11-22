<?php

namespace Admin\Model;

use Think\Model\RelationModel;

class AuthRuleModel extends RelationModel
{
    public $_db;

    protected $_link = array(
        'AuthRule' => array(                     //关联的模型
            'mapping_type'  => self::HAS_MANY,   //关联的类型
            'mapping_name'  => 'children',       //关联的映射名称
            'parent_key'    => 'parent_id',      //自关联的关联字段(连接自己)
            'mapping_order' => 'sort asc',       //关联查询的排序
        ),
    );

//    $data = $this->rule->order("sort asc")->select();

    // 获取所有菜单
    public function getList($list, $id = 'id', $pid = 'parent_id', $child = 'son', $root = 0)
    {
        // 创建Tree
        $tree = [];
        if (is_array($list)) {
            // 创建基于主键的数组引用
            $refer = [];
            foreach ($list as $key => $data) {
                $refer[$data[$id]] =& $list[$key];
            }
            foreach ($list as $key => $data) {
                // 判断是否存在parent
                $parentId = $data[$pid];
                if ($root == $parentId) {
                    $tree[] =& $list[$key];
                } else {
                    if (isset($refer[$parentId])) {
                        $parent =& $refer[$parentId];
                        $parent[$child][] =& $list[$key];
                    }
                }
            }
        }

        return $tree;
    }
}