<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Login Page</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate icon" type="image/png" href="/Public/assets/vendor/amazeui/i/favicon.png">
    <link rel="stylesheet" href="/Public/assets/vendor/amazeui/css/amazeui.min.css"/>
    <style>
        .header {
            text-align: center;
        }
        .header h1 {
            font-size: 200%;
            color: #333;
            margin-top: 30px;
        }
        .header p {
            font-size: 14px;
        }
        /*验证码*/
        .verify {
            cursor: pointer;
            width: 128px;
            height: 36px;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="am-g">
        <h1>Login Page</h1>
        <p>武汉二手车交易平台</p>
    </div>
    <hr />
</div>
<div class="am-g">
    <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">

        <div class="am-alert am-alert-danger" data-am-alert style="display: none;">
        </div>

        <br>
        <form method="post" class="am-form" id="am-form">
            <div class="am-form-group am-form-icon am-form-feedback">
                <label class="am-form-label" for="email">邮箱: </label>
                <input type="text" id="email" name="email" class="am-form-field" placeholder="输入你的邮箱"
                       minlength="3" required email="true">
            </div>

            <div class="am-form-group am-form-icon am-form-feedback">
                <label class="am-form-label" for="password">密码: </label>
                <input type="password" name="password" id="password" class="am-form-field" placeholder="输入你的密码"
                       required  rangelength="[5,10]">
            </div>


            <div class="am-form-group am-form-icon am-form-feedback">
                <label class="am-form-label" for="code">验证码: </label>

                <div class="am-g doc-am-g">
                    <div class="am-u-sm-9">
                        <input type="text" name="code" id="code" class="am-form-field" placeholder="输入你的验证码"
                               required remote="<?php echo U('check_verify');?>">
                    </div>
                    <div class="am-u-sm-3">
                        <img src="<?php echo U('verify');?>" class="verify"
                             onclick="this.src='<?php echo U('verify');?>?'+ Math.random();">
                    </div>
                </div>
            </div>

            <label for="remember-me">
                <input id="remember-me" type="checkbox" name="remember">
                记住密码
            </label>
            <br>

            <hr>
            <div class="am-cf">
                <input type="submit" name="" value="Login" class="am-btn am-btn-secondary am-btn-sm am-fl am-u-sm-6">
                <input type="submit" name="" value="Forget Password ^_^? "
                       class="am-btn am-btn-default am-btn-sm am-fr">
            </div>
        </form>

        <hr>
        <p>© 2017 AllMobilize, Inc. Seven.</p>
    </div>
</div>

<script src="/Public/assets/js/jquery.min.js"></script>
<script src="/Public/assets/vendor/validation/jquery.validate.min.js"></script>
<script src="/Public/assets/vendor/validation/localization/messages_zh.js"></script>
<script>
    $().ready(function() {
        $("#am-form").validate({
            onfocusout:function(element){
                $(element).valid();
            },

            submitHandler: function(form) {
                $.post('', $(form).serializeArray(), function (data) {

                    if (data.status == 0) {
                        $(".am-alert-danger").text(data.info).fadeIn(200);
                        return false;
                    }

                    location.href = "<?php echo U('Admin/Index/index');?>"
                })
            }
        });
    });
</script>
</body>
</html>