<?php
return array(
	//'配置项'=>'配置值'

    'DB_TYPE'   => 'mysql',     // 数据库类型
    'DB_HOST'   => 'localhost', // 服务器地址
    'DB_NAME'   => 'car',       // 数据库名
    'DB_USER'   => 'root',      // 用户名
    'DB_PWD'    => '',          // 密码
    'DB_PORT'   => 3306,        // 端口
    'DB_PREFIX' => '',          // 数据库表前缀
    'DB_CHARSET'=> 'utf8',      // 字符集
    'DB_DEBUG'  =>  TRUE,       // 数据库调试模式 开启后可以记录SQL日志 3.2.3新增

    // 显示页面Trace信息
    'SHOW_PAGE_TRACE' => true,

    // URL不区分大小写
    'URL_CASE_INSENSITIVE'  =>  true,
    // REWRITE模式
    'URL_MODEL' => 2,

    // 定界符
    'TMPL_L_DELIM'    =>    '{{',
    'TMPL_R_DELIM'    =>    '}}',

    // 关闭伪静态
    'URL_HTML_SUFFIX' =>'',

    // 缓存配置
    'DATA_CACHE_TYPE' => 'Memcache',

    // 权限配置
    'AUTH_CONFIG' => array(
        'AUTH_ON' => true,             //认证开关
        'AUTH_TYPE' => 1,              // 认证方式，1为时时认证；2为登录认证。
        'AUTH_GROUP' => 'auth_group',                //用户组数据表名
        'AUTH_GROUP_ACCESS' => 'auth_group_access',  //用户组明细表
        'AUTH_RULE' => 'auth_rule',                  //权限规则表
        'AUTH_USER' => 'user',                       //用户信息表
        'AUTH_SUPER' => 'admin'                      //指定超级管理员
    )
);