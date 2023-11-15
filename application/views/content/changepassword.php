<div class="content-wrapper">
    <section class="content-header" style="padding-bottom: 15px;">
        <h1>
            Change Password
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Change Password</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <?php echo form_open('', array('id' => 'change_password_form','class' => 'form-horizontal')); ?>
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Change Password</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">New Password <span class="text-red">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="password" maxlength="15" class="form-control" id="new_password" name="new_password" placeholder="" autocomplete="off" maxlength="20" tabindex="">
                                        </div>
                                        <div class="col-sm-4">
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Confirm Password <span class="text-red">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="password" maxlength="15" class="form-control" id="confirm_password" name="confirm_password" placeholder="" autocomplete="off" maxlength="20" tabindex="">
                                        </div>
                                        <div class="col-sm-4">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="button" class="btn btn-success" onclick="savenewpassword()" id="update_password">Update password</button>
                            <button type="button" class="btn btn-default pull-right">Cancel</button>
                        </div>
                    </div>
                <?php echo form_close();?>
            </div>
        </div>
    </section>
</div>


 