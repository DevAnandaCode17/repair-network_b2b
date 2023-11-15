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
                <?php echo form_open('', array('id' => 'add_user_form','class' => 'form-horizontal')); ?>
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">User Details</h3>
                        </div>
                        <div class="box-body">                        
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">User Name <span class="text-red">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="" autocomplete="off" maxlength="20" tabindex="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-red field-example">Eg: johnsales</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">First Name <span class="text-red">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="user_first_name" name="user_first_name" placeholder="" autocomplete="off" maxlength="20" tabindex="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-red field-example">Eg: John</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Last Name</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="user_last_name" name="user_last_name" placeholder="" autocomplete="off" maxlength="20" tabindex="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-red field-example">Eg: Joseph</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Email</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="user_email" name="user_email" placeholder="" autocomplete="off" tabindex="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-red field-example">Eg: josephjohn16@hotmail.com</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Phone</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="" autocomplete="off" tabindex="" onkeypress="return /[0-9]/i.test(event.key)" maxlength="11">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-red field-example">Eg: 9955446621</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">User Group <span class="text-red">*</span></label>
                                        <div class="col-sm-5">
                                            <select class="form-control" id="user_group_id" name="user_group_id">
                                                <option value="">Select User Group</option>
                                                <?php foreach($usergroups as $usergroup){ ?>
                                                    <option value="<?php echo $usergroup['user_group_id'] ?>"><?php echo $usergroup['user_group_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-red field-example">Select the user group to create the user</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-header with-border">
                            <h3 class="box-title">Authentication Details</h3>
                        </div>
                        <div class="box-body">                        
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Password <span class="text-red">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="password" class="form-control" id="user_pass" name="user_pass" placeholder="" autocomplete="off" maxlength="20" tabindex="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-red field-example">Enter the password for the user to be created</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-sm-3 control-label">Confirm Password <span class="text-red">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="password" class="form-control" id="user_pass_confirm" name="user_pass_confirm" placeholder="" autocomplete="off" maxlength="20" tabindex="">
                                        </div>
                                        <div class="col-sm-4">
                                            <p class="text-red field-example">Reenter the above password</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">                            
                            <button type="button" class="btn btn-success" id="create_user">Create user</button>
                            <button type="button" class="btn btn-default pull-right">Cancel</button>
                        </div>
                    </div>
                <?php echo form_close();?>
            </div>
        </div>
    </section>
</div>


 