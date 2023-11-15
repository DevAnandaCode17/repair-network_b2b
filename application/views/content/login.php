<div class="login-box">            
    <div class="login-box-body">
        <div class="login-logo">
            <a href=""><img title="" src="vendors/img/logo.png"></a>
        </div>
        <!-- /.login-logo -->
        <p class="login-box-msg">Sign in to start your session</p>

        <!-- <form action="" method="post"> -->
        <?php echo form_open('', array('id' => 'user_login', 'autocomplete' => 'off')); ?>
            <div class="form-group has-feedback">
                <input type="text" name="username" class="form-control" placeholder="User name" autocomplete="off" id="user_name" tabindex="01">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" autocomplete="off" id="user_pass" tabindex="02">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <input type="hidden" name="strcrypt" id="strcrypt" autocomplete="off">
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="button" class="btn btn-primary btn-block btn-flat" id="login_btn" tabindex="03">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        <!-- </form> -->
        <?php echo form_close();?>
    </div>
    <!-- /.login-box-body -->
</div>
