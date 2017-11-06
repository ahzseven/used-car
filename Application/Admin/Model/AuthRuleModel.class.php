<?php

namespace Admin\Model;

use Think\Model\RelationModel;

class AuthRuleModel extends RelationModel
{
    protected $_link = array(
        'AuthRule' => array(                     //关联的模型
            'mapping_type'  => self::HAS_MANY,   //关联的类型
            'mapping_name'  => 'children',       //关联的映射名称
            'parent_key'    => 'parent_id',      //自关联的关联字段(连接自己)
            'mapping_order' => 'sort asc',       //关联查询的排序
        ),
    );
}