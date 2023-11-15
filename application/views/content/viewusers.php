<div class="content-wrapper">
    <section class="content-header" style="padding-bottom: 15px;">
        <h1>
            View Users
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">View Users</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Advanced Search</h3>
                    </div>
                    <div class="box-body">
                        <?php echo form_open('', array('id' => 'view_users_form','class' => 'form-horizontal')); ?>
                            <input type="hidden" id="pagecount" name="pagecount" value="">
                            <input type="hidden" id="page" name="page" value="">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="col-sm-7 control-label">User Name/First Name/Last Name</label>
                                    <div class="col-sm-5">
                                        <input type="text" class="form-control" id="search_name" name="search_name" placeholder="Enter name" autocomplete="off" tabindex="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="" class="col-sm-5 control-label">User Group</label>
                                    <div class="col-sm-7">
                                        <select class="form-control" id="user_group_id" name="user_group_id">
                                            <option value="">All</option>
                                            <?php foreach($usergroups as $usergroup){ ?>
                                                <option value="<?php echo $usergroup['user_group_id'] ?>"><?php echo $usergroup['user_group_name'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-sm-12 button-wrapper">
                                        <button type="button" class="btn btn-success" onclick="viewusers(10,0)">Search</button>
                                        <button type="button" id="reset_user" class="btn btn-warning">Reset</button>
                                    </div>                                            
                                </div>
                            </div> 
                        <?php echo form_close();?>                   
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box fc_reorder_views" id="view_users">
                    
                </div>
            </div>
        </div>
    </section>
</div>


 