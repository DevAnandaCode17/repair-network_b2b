<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php if ($status != '') {
                echo ucwords(str_replace("_", " ", str_replace("%20", " ", $status)));
            } ?>
            Jobs
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>jobdetails"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="active">Jobs</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php echo form_open('', array('id' => 'jobs_search_form', 'class' => 'form-horizontal')); ?>
        <input type="hidden" id="pagecount" name="pagecount" value="">
        <input type="hidden" id="page" name="page" value="">
        <input type="hidden" id="forcesearch" name="forcesearch" value="0">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Advanced Search</h3>
                    </div>
                    <div class="box-body">
                        <input type="hidden" name="search_status" id="search_status" value="<?php echo $status; ?>">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="col-sm-5 control-label">Job ID</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="job_id_search" name="job_id" placeholder="Job ID" autocomplete="off" tabindex="" value="<?php if (isset($_POST['job_id'])) {
                                                                                                                                                                                    echo $_POST['job_id'];
                                                                                                                                                                                } ?>" maxlength="20">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="col-sm-5 control-label">First Name</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="client_full_name" name="full_name" placeholder="Client's Full Name" autocomplete="off" tabindex="" value="<?php if (isset($_POST['full_name'])) {
                                                                                                                                                                                                            echo $_POST['full_name'];
                                                                                                                                                                                                        } ?>" maxlength="15">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="col-sm-5 control-label">Phone No.</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="client_phone_number" name="phone_number" placeholder="Client's Phone Number" autocomplete="off" onkeypress="return /[0-9]/i.test(event.key)" maxlength="11" tabindex="" value="<?php if (isset($_POST['phone_number'])) {
                                                                                                                                                                                                                    echo $_POST['phone_number'];
                                                                                                                                                                                                                } ?>" maxlength="11">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="col-sm-5 control-label">Post Code</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="post_code" name="post_code" placeholder="Post Code" autocomplete="off" tabindex="" value="<?php if (isset($_POST['customer_post_code'])) {
                                                                                                                                                                                                echo $_POST['customer_post_code'];
                                                                                                                                                                                            } ?>" maxlength="10">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="col-sm-5 control-label">Date Range</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="received_on" name="received_on" placeholder="Date Range" autocomplete="off" tabindex="" value="<?php if (isset($_POST['received_on'])) {
                                                                                                                                                                                    echo $_POST['received_on'];
                                                                                                                                                                                } ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="col-sm-5 control-label">Job Type</label>
                                <div class="col-sm-7">

                                    <select id="job_type" name="job_type" class="form-control">
                                        <option value="">Select Job Type</option>
                                        <?php
                                        if (!empty($job_type)) {
                                            foreach ($job_type as $key => $job) {
                                        ?>
                                                <option value="<?php echo $job['id'] ?>"><?php echo $job['job_type'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="col-sm-5 control-label">Boiler Type</label>
                                <div class="col-sm-7">

                                    <select id="boiler_type" name="boiler_type" class="form-control">
                                        <option value="">Select Boiler Type</option>
                                        <?php
                                        if (!empty($boiler_type)) {
                                            foreach ($boiler_type as $key => $btype) {
                                        ?>
                                                <option value="<?php echo $btype['id'] ?>"><?php echo $btype['boiler_type'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="col-sm-5 control-label">Boiler Make</label>
                                <div class="col-sm-7">

                                    <select id="boiler_make" name="boiler_make" class="form-control">
                                        <option value="">Select Boiler Make</option>
                                        <?php
                                        if (!empty($boiler_make)) {
                                            foreach ($boiler_make as $key => $bmake) {
                                        ?>
                                                <option value="<?php echo $bmake['id'] ?>"><?php echo $bmake['boiler_make'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="col-sm-5 control-label">Keyword</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" id="search" name="search" placeholder="Enter the Keyword" autocomplete="off" tabindex="" value="<?php if (isset($_POST['search'])) {
                                                                                                                                                                                echo $_POST['search'];
                                                                                                                                                                            } ?>">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="" class="col-sm-5 control-label">Job Status</label>
                                <div class="col-sm-7">

                                    <select id="job_status" name="job_status" class="form-control">
                                        <option value="">Select Job Status</option>
                                        <?php
                                        if (!empty($job_status)) {
                                            foreach ($job_status as $key => $status) {
                                        ?>
                                                <option value="<?php echo $status['job_status_id'] ?>"><?php echo $status['job_status'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-4" style="float: none; margin: auto;">
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-block btn-success search_button_en" onclick="viewjobs(20,0,1);">Search</button>
                                    </div>
                                    <?php if(in_array($_SESSION['user_group_id'] ,array('A','B','F'))) { ?>
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-block btn-warning" onclick="exporttoexcel(0);">Export </button>
                                    </div>
                                    <?php } ?>
                                    <div class="col-sm-4">
                                        <button type="button" class="btn btn-block btn-warning" id="reset_forms">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="box" id="view_jobs">

                    <!-- /.box -->
                </div>
            </div>
        </div><!-- /.row -->
        <?php echo form_close(); ?>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->