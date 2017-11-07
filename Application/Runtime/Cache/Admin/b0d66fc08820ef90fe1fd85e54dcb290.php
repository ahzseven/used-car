<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js fixed-layout">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>二手车商城</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/Public/assets/vendor/amazeui/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/Public/assets/vendor/amazeui/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/Public/assets/vendor/amazeui/css/amazeui.min.css"/>
    <link rel="stylesheet" href="/Public/assets/vendor/amazeui/css/admin.css">
    <script src="/Public/assets/js/jquery.min.js"></script>
</head>
<body>

<header class="am-topbar am-topbar-inverse admin-header">
    <div class="am-topbar-brand">
        <strong>二手车商城</strong> <small>后台管理系统</small>
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    <span class="am-icon-user"></span> 管理员  <?php echo $_SESSION['user']['name'] ?> <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
                    <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
                    <li><a href="<?php echo U('User/logout');?>"><span class="am-icon-power-off"></span> 退出</a></li>
                </ul>
            </li>
            <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
        </ul>
    </div>
</header>

<div class="am-cf admin-main">
    <!--侧边栏-->
    <!-- sidebar start -->
<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
        <ul class="am-list admin-sidebar-list">
            <li><a href="<?php echo U('Admin/Index/index');?>"><span class="am-icon-home"></span> 首页</a></li>
            <li class="admin-parent">
                <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span> 商城管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav">
                    <li><a href="admin-user.html" class="am-cf"><span class="am-icon-check"></span> 个人资料<span class="am-icon-star am-fr am-margin-right admin-icon-yellow"></span></a></li>
                    <li><a href="admin-help.html"><span class="am-icon-puzzle-piece"></span> 帮助页</a></li>
                    <li><a href="admin-gallery.html"><span class="am-icon-th"></span> 相册页面<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
                    <li><a href="admin-log.html"><span class="am-icon-calendar"></span> 系统日志</a></li>
                    <li><a href="admin-404.html"><span class="am-icon-bug"></span> 404</a></li>
                </ul>
            </li>
            <li class="admin-parent">
                <a class="am-cf" data-am-collapse="{target: '#collapse-nav-1'}"><span class="am-icon-file"></span> 系统管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
                <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav-1">
                    <li><a href="<?php echo U('Admin/Auth/rule_index');?>"><span class="am-icon-th"></span> 权限管理<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>
                    <li><a href="<?php echo U('Admin/Auth/group_index');?>"><span class="am-icon-calendar"></span> 用户组管理</a></li>
                    <li><a href="<?php echo U('Admin/User/index');?>"><span class="am-icon-bug"></span> 用户管理</a></li>
                </ul>
            </li>
            <!--<li><a href="admin-table.html"><span class="am-icon-table"></span> 表格</a></li>-->
            <!--<li><a href="admin-form.html"><span class="am-icon-pencil-square-o"></span> 表单</a></li>-->
            <!--<li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li>-->
        </ul>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p><span class="am-icon-bookmark"></span> 公告</p>
                <p>时光静好，与君语；细水流年，与君同。—— Amaze UI</p>
            </div>
        </div>

        <div class="am-panel am-panel-default admin-sidebar-panel">
            <div class="am-panel-bd">
                <p><span class="am-icon-tag"></span> wiki</p>
                <p>Welcome to the Amaze UI wiki!</p>
            </div>
        </div>
    </div>
</div>
<!-- sidebar end -->
    <!--end 侧边栏-->

    <div class="admin-content">
    <!-- 模板布局 -->
    <div class="row">
        <!--主体内容-->
        
    <!-- content start -->

    <div class="admin-content-body">
        <div class="am-cf am-padding">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">编辑用户组</strong> /
                <small>Edit Role</small>
            </div>
        </div>

        <div class="am-g">
            <div class="am-u-sm-12 am-u-md-12">

                <div class="am-tab-panel">
                    <form class="am-form " action="<?php echo U('Admin/Auth/group_update');?>" method="post">
                        <input type="hidden" name="id" value="<?php echo ($id); ?>">

                        <div class="am-g am-margin-top">
                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                用户组名
                            </div>
                            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
                                <input type="text" class="am-input-sm" name="title" placeholder="请输入用户组名">
                            </div>
                        </div>

                        <div class="am-g am-margin-top">
                            <div class="am-u-sm-4 am-u-md-2 am-text-right">
                                权限列表
                            </div>

                            <div class="am-u-sm-8 am-u-md-8 am-u-end col-end">

                                <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><div class="am-panel am-panel-default">


                                        <div class="am-panel-hd">
                                            <label class="am-checkbox-inline am-danger">
                                                <input data-am-ucheck="" type="checkbox" value="<?php echo ($list["id"]); ?>" name="rule_id[]" class="permission1 am-ucheck-checkbox" <?php if(in_array(($list["id"]), is_array($rules)?$rules:explode(',',$rules))): ?>checked<?php endif; ?>><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                <span class="am-badge am-badge-secondary am-text-sm am-radius"><?php echo ($list["title"]); ?></span>
                                            </label>
                                        </div>


                                        <?php if(is_array($list["son"])): $i = 0; $__LIST__ = $list["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="am-panel-bd">
                                                <div class="am-g am-margin-top ">
                                                    <div class="am-u-sm-4 am-u-md-3 am-text-right permission-div2">
                                                        <label class="am-checkbox-inline am-danger">
                                                            <input data-am-ucheck="" type="checkbox" value="<?php echo ($vo["id"]); ?>" name="rule_id[]" class="permission2 am-ucheck-checkbox" <?php if(in_array(($vo["id"]), is_array($rules)?$rules:explode(',',$rules))): ?>checked<?php endif; ?>><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                            <span class="am-badge am-badge-success am-radius"><?php echo ($vo["title"]); ?></span>
                                                        </label>
                                                    </div>
                                                    <div class="am-u-sm-8 am-u-md-9 am-u-end col-end permission-div3">

                                                        <?php if(is_array($vo["son"])): $i = 0; $__LIST__ = $vo["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><label class="am-checkbox-inline  am-danger">
                                                                <input data-am-ucheck="" type="checkbox" value="<?php echo ($child["id"]); ?>" class="permissions3 am-ucheck-checkbox" name="rule_id[]" <?php if(in_array(($child["id"]), is_array($rules)?$rules:explode(',',$rules))): ?>checked<?php endif; ?>><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span>
                                                                <?php echo ($child["title"]); ?>
                                                            </label><?php endforeach; endif; else: echo "" ;endif; ?>

                                                    </div>
                                                </div>
                                            </div><?php endforeach; endif; else: echo "" ;endif; ?>

                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>

                            </div>
                        </div>

                        <div class="am-margin">
                            <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- content end -->

        <!--end 主体内容-->
    </div>
    <!-- end 模板布局 -->
        <footer class="admin-content-footer">
        <hr>
        <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
    </footer>
    </div>

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>


<script src="/Public/assets/vendor/amazeui/js/amazeui.min.js"></script>
<script src="/Public/assets/vendor/amazeui/js/app.js"></script>


    <script src="/Public/assets/vendor/validation/jquery.validate.min.js"></script>
    <script src="/Public/assets/vendor/validation/localization/messages_zh.js"></script>
    <script>
        $(function () {
            /**
             * 一级分类选中,所属之类都选中
             */
            $('.permission1').click(function(){
                var checked = $(this).prop('checked');
                $(this).parents('.am-panel-hd').next().find('input').prop('checked', checked);
            });

            $('.permission2').click(function(){
                var checked = $(this).prop('checked');
                $(this).parents('.permission-div2').next().find('input').prop('checked', checked);

                //如果所有子类全部选中,自动选中所属一级分类
                var $body  = $(this).parents('.am-panel-bd');
                $panel = $(this).parents('.am-panel');
                length_checked = $body.find('.permission2:checked').length;
                //一个子类被选中,所属一级分类自动选中
                if (length_checked > 0) {
                    $panel.find('.permission1').prop('checked', true);
                } else {
                    $panel.find('.permission1').prop('checked', false);
                }
            });

            //三级子类被选中,自动选中一级和二级分类
            $('.permission3').click(function(){
                var $permission_div3 = $(this).parents('.permission-div3');
                $permission_div2 = $permission_div3.siblings('.permission-div2');
                $body = $(this).parents('.am-panel-bd');
                $panel = $(this).parents('.am-panel');

                length3_checked = $permission_div3.find("input:checked").length;
                //一个三级被选中,自动选中二级
                if (length3_checked > 0) {
                    $permission_div2.find('.permission2').prop('checked', true);
                } else {
                    $permission_div2.find('.permission2').prop('checked', false);
                }

                //一个二级被选中,自动选中一级
                length2_checked = $body.find('.permission2:checked').length;
                if (length2_checked > 0) {
                    $panel.find('.permisssion1').prop('checked', true);
                } else {
                    $panel.find('.permisssion1').prop('checked', false);
                }
            });


        });
    </script>


</body>
</html>