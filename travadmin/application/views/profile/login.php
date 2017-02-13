<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>/assets/css/self/auth.css" rel="stylesheet" media="screen">
</head>
<body>
<script src="<?php echo base_url(); ?>/assets/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.full.js"></script>




<div class="container">
    <div class="row">
        <div class="span12 login-logo">
            <div class="logo">
                <img src="<?php echo base_url();?>/assets/images/logo.png" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="span12">
            <div class="auth-form">
                <form class="form-horizontal" method="post" name="login-form">
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">Username</label>
                        <div class="controls">
                            <input type="text" name="username" placeholder="username" value="<?php echo set_value('username'); ?>"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputPassword">Password</label>
                        <div class="controls">
                            <input type="password" name="password"  placeholder="password"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <button type="submit" class="btn">Sign in</button>
                        </div>
                    </div>
                </form>
                <?php
                echo validation_errors();
                echo "<p>".$error_message."</p>";
                ?>
            </div>
        </div>
    </div>

</div>


</body>
</html>

<script>
    $(document).ready(function(){
        $(".logo").click(function(){
            document.location.href = '<?php echo site_url()?>/profile/login';
        });

    })
</script>