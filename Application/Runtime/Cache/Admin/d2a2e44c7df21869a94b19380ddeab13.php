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
        <div class="am-cf am-padding am-padding-bottom-0">
            <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">注册用户</strong> / <small>Register</small></div>
        </div>

        <hr>

        <div class="am-g">
            <div id="alert-danger" class="am-alert am-alert-danger" data-am-alert style="display: none;">
            </div>
            <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-12">
                <form id="form-register" class="am-form am-form-horizontal" action="" method="post">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">姓名</label>
                        <div class="am-u-sm-9">
                            <input type="text" id="user-name" placeholder="Name" name="name" minlength="4" required>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-email" class="am-u-sm-3 am-form-label">邮箱</label>
                        <div class="am-u-sm-9">
                            <input type="email" id="user-email" placeholder="Email" name="email" minlength="3" required email="true">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-phone" class="am-u-sm-3 am-form-label">电话</label>
                        <div class="am-u-sm-9">
                            <input type="text" id="user-phone" placeholder="Phone" name="phone" required digits="true" minlength="11" maxlength="11">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-QQ" class="am-u-sm-3 am-form-label">密码</label>
                        <div class="am-u-sm-9">
                            <input type="password" id="user-QQ" placeholder="Password" name="password" required  rangelength="[5,10]">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-weibo" class="am-u-sm-3 am-form-label">确认密码</label>
                        <div class="am-u-sm-9">
                            <input type="password" id="user-weibo" placeholder="Confirm Password" name="confirm_pwd" required equalTo="#user-QQ">
                        </div>
                    </div>


                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button type="submit" class="am-btn am-btn-primary">提交保存</button>
                        </div>
                    </div>
                </form>
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
        $().ready(function() {
            $("#form-register").validate({
                onfocusout: function (element) {
                  $(element).valid();
                },

                submitHandler: function(form){
//                    console.log($(form).serializeArray());
                    $.post('<?php echo U(register);?>', $(form).serializeArray(), function (data) {

                        if (data.status == 0) {
                            $("#alert-danger").text(data.info).fadeIn(200);
                            return false;
                        }

//                        location.href = "<?php echo U('Admin/Index/index');?>"
                    })
                }
            });
        });
    </script>


</body>
</html>