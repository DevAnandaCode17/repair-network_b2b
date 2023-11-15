<div class="content-wrapper">
    <section class="content-header" style="padding-bottom: 15px;">
        <h1>
            Create User
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Create User</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="display_errors" id="show_userd_error"></div>
                <?php echo form_open('', array('id' => 'add_user_form','class' => 'form-horizontal edit_user_details_ajax')); ?>
                     <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">User Details</h3>
                            <?php if ($_SESSION['user_group_id'] == 'A' || $_SESSION['user_group_id'] == 'B') { ?>
                            <button type="button" id="change_password" class="btn btn-success pull-right" data-toggle="modal" data-target="#exampleModal">Change Password</button>
                        <?php } ?>
                        </div>
                        <div class="box-body">  
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">User Name <span class="text-red">*</span></label>
                                        <input class="hide hidden" id="user_id" name="user_id" value="<?php echo $user->user_id; ?>"  />
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="" autocomplete="off" tabindex="" value="<?php echo $user->user_name ;?>" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-red field-example hide">Eg: johnsales</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">First Name <span class="text-red">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="user_first_name" name="user_first_name" placeholder="" autocomplete="off" value="<?php echo $user->user_first_name;?>" tabindex="" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-red field-example hide">Eg: John</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Last Name</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="user_last_name" name="user_last_name" placeholder="" autocomplete="off" value="<?php echo $user->user_last_name;?>"tabindex="" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-red field-example hide">Eg: Joseph</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="" class="col-sm-3 control-label">User Group <span class="text-red">*</span></label>
                                    <div class="col-sm-5">
                                        <?php if ($_SESSION['user_group_id'] == 'A' || $_SESSION['user_group_id'] == 'B') {
                                            $readonly = "";
                                        } else {
                                            $readonly = "disabled";
                                        } ?>
                                        <select class="form-control" id="user_group_id" name="user_group_id" <?php echo $readonly ?> disabled="true">
                                            <option value="">Select User Group</option>
                                            <?php foreach ($user_group as $users) {
                                            ?>
                                                <option <?php echo $readonly ?> value="<?php echo $users['user_group_id'] ?>" <?php if ($users['user_group_name'] == $user->user_group_name) {
                                                                                                                                    echo 'selected';
                                                                                                                                }
                                                                                                                                ?>>
                                                    <?php echo $users['user_group_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="text-red field-example">Select the user group to create the user</p>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="user_email" name="user_email" placeholder=""  
                                            value="<?php echo $user->user_email;?>"  autocomplete="off" tabindex="" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-red field-example hide">Eg: josephjohn16@hotmail.com</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Phone</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="" value="<?php echo $user->user_phone;?>" onkeypress="return /[0-9]/i.test(event.key)" maxlength="11" autocomplete="off" tabindex="" readonly>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-red field-example hide">Eg: 9955446621</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="button" id="edit_user_dls_via_ajx" class="btn btn-success">Edit</button>
                            <button type="button" id="update_user_dls_via_ajx" class="btn btn-success hide">Update</button>
                            <button type="button" id="cancel_user_dls_via_ajx" class="btn btn-primary hide">Cancel</button>
                        </div>
                    </div>
                <?php echo form_close();?>
                <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Change Password</h4>
                                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button> -->
                            </div>
                            <div class="modal-body">
                                <?php
                                echo form_open(base_url('users/updatePassword'), array('id' => 'change_password_form', 'class' => 'form-horizontal')); ?>

                                <div class="modal-body">

                                    <div class="form-group">
                                        <input class="hide hidden" id="users_id" name="user_id" value="<?php echo $user->user_id; ?>" />

                                        <label>Enter your new Password</label>
                                        <input type="password" class="form-control" id="user_pass" name="user_pass" placeholder="" autocomplete="off" maxlength="20" tabindex="">
                                        <!-- <div class="col-sm-3"> -->
                                        <p class="text-red field-example">Password must be of 6 characters and should contain 1 digit and 1 letter</p>
                                        <!-- </div> -->
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" id="user_pass_confirm" name="user_pass_confirm" placeholder="" autocomplete="off" maxlength="20" tabindex="">

                                    </div>

                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary" onclick="updatenewpassword()" id="update_password">Update Password</button>
                                </div>
                                <?php
                                echo form_close();
                                ?>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </section>
</div>


 