<div class="content-wrapper">
    <section class="content-header" style="padding-bottom: 15px;">
        <h1>
            Job Details (<?php echo isset($job_id)?$job_id:'' ?>)
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>jobdetails"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li><a href="<?php echo base_url() ?>jobdetails"><i class="fa fa-level-down"></i>Jobs</a></li>
            <li class="active">Job Details (<?php echo isset($job_id)?$job_id:'' ?>)</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="quote-details box">
                    <div class="box-body">  
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo form_open('', array('id' => 'global-form','class' => 'form-horizontal')); ?>
                                    <input type="hidden" name="quote_en" value="<?php echo $quote_en; ?>">
                                    <div id="quote-tabs" class="nav-tabs-custom">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#quotedetails" data-toggle="tab">Job Details</a></li>
                                            <li><a href="#attempts" data-toggle="tab" onclick="">Job Status</a></li>
                                            <li><a href="#note" data-toggle="tab" onclick="">Notes</a></li>
                                            <?php if(in_array($_SESSION['user_group_id'] ,array('A'))) { ?>
                                            <li><a href="#logs" data-toggle="tab" onclick="">Logs</a></li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                <?php echo form_close();?>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="quotedetails">
                                        <?php echo form_open('', array('id' => 'view_quote','class' => 'form-horizontal')); ?>
                                            <input type="hidden" name="quote_en" value="<?php echo $quote_en; ?>">
                                            <div class="box-body">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <th class="bg-gray disabled" width="500" colspan="2">Job ID</th>
                                                            <td class="" width="500"><?php echo isset($job_id)?$job_id:'' ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="bg-gray disabled" width="500" colspan="2">Job Reference Number</th>
                                                            <td class="" width="500"><?php echo isset($job_details['reference_number'])?$job_details['reference_number']:'' ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="bg-gray disabled" colspan="2">Client's Full Name</th>
                                                            <td class=""><?php echo isset($job_details['full_name'])?$job_details['full_name']:'' ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="bg-gray disabled" colspan="2">Client's Phone Number</th>
                                                            <td class=""><span><?php echo isset($job_details['phone_number'])?$job_details['phone_number']:'' ?></span></td>
                                                        </tr>
                                                        <tr>
                                                        <th class="bg-gray disabled" colspan="2">Client's Alternate Phone Number</th>
                                                           <td class=""><span><?php echo isset($job_details['alternate_phone_number'])?$job_details['alternate_phone_number']:'' ?></span></td>
                                                       </tr>
                                                        <tr>
                                                            <th class="bg-gray disabled" colspan="2">Client's Post Code</th>
                                                            <td class=""><?php echo isset($job_details['post_code'])?$job_details['post_code']:'' ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="bg-gray disabled" colspan="2">Client's Address</th>
                                                            <td class=""><?php echo isset($job_details['address'])?$job_details['address']:'' ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="bg-gray disabled" colspan="2">Client's Email</th>
                                                            <td class=""><?php echo isset($job_details['email'])?$job_details['email']:'' ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="bg-gray disabled" colspan="2">Job Type</th>
                                                            <td class="">
                                                                <?php 
                                                                    if(!empty($job_type)){
                                                                        foreach ($job_type as $key => $job){
                                                                            if($job_details['job_type'] !='' && $job_details['job_type'] == $job['id']){
                                                                                echo $job['job_type'];
                                                                            }
                                                                        }
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="bg-gray disabled" colspan="2">Boiler Type</th>
                                                            <td class="">
                                                                <?php 
                                                                    if(!empty($boiler_type)){
                                                                        foreach ($boiler_type as $key => $boiler){
                                                                            if($job_details['boiler_type'] !='' && $job_details['boiler_type'] == $boiler['id']){
                                                                                echo $boiler['boiler_type'];
                                                                            }
                                                                        }
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="bg-gray disabled" colspan="2">Boiler Make</th>
                                                            <td class="">
                                                                <?php 
                                                                    if(!empty($boiler_make)){
                                                                        foreach ($boiler_make as $key => $make){
                                                                            if($job_details['boiler_make'] !='' && $job_details['boiler_make'] == $make['id']){
                                                                                echo $make['boiler_make'];
                                                                            }
                                                                        }
                                                                    }
                                                                ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="bg-gray disabled" colspan="2">Fuel Type</th>
                                                            <td class=""><?php echo isset($job_details['fuel_type']) ? $job_details['fuel_type'] :''; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="bg-gray disabled" colspan="2">Do you want to edit the details of this job?</th>
                                                            <td class=""><button id="edit-job-customer" type="button" class="btn btn-warning btn-xs">Edit</button></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="bg-gray disabled" colspan="2">Added on</th>
                                                            <td class=""><?php echo isset($job_details['created_at']) ? date('d-m-Y H:i:s' ,strtotime($job_details['created_at'])) :''; ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <table class="status-update-log table table-bordered">
                                                    <thead class="bg-gray disabled">
                                                        <tr>
                                                            <th colspan="4" style="text-align: center;">Status Updates (On Descending Order)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="status_updates">
                                                    </tbody>
                                                </table>
                                                <br>
                                            </div>
                                        <?php echo form_close();?>
                                    </div>
                                    <div class="tab-pane " id="problem">
                                        <?php echo form_open('', array('id' => 'appliance_problem','class' => 'form-horizontal')); ?>
                                        
                                        <?php echo form_close();?>
                                    </div>
                                    <div class="tab-pane " id="attempts">
                                        <?php echo form_open('', array('id' => 'managejobstatus','class' => 'form-horizontal')); ?>
                                        <input type="hidden" name="quote_en" value="<?php echo $quote_en; ?>">
                                        <div class="box-body">
                                            <div class="box-body">
                                                <div class="assign-engineer-wrapper col-md-7">
                                                    <table class="table table-bordered">
                                                        <tbody>
                                                            <tr>
                                                                <th class="bg-gray disabled" width="50%">Select Job Status</th>
                                                                <th class="">
                                                                    <select id="job_status" name="job_status">
                                                                        <option value="">Select Job Status</option>
                                                                        <?php 
                                                                        if(!empty($job_status)){ 
                                                                            foreach ($job_status as $key => $jstatus){
                                                                        ?>
                                                                            <option value="<?php echo $jstatus['job_status_id']; ?>"><?php echo $jstatus['job_status']; ?></option>
                                                                        <?php
                                                                            }
                                                                        } 
                                                                        ?>
                                                                    </select>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                            <td class="disabled" width="500" colspan="2">
                                                                <button id="add-job-status" type="button" class="btn btn-success btn-xs">Add Job Status</button>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>                                                    
                                                </div>
                                                <table id="view-job-status" class="table table-bordered">
                                                </table>
                                            </div>
                                        </div>
                                        <?php echo form_close();?>
                                    </div>
                                    <div class="tab-pane " id="note">
                                        <?php echo form_open('', array('id' => 'managenotes','class' => 'form-horizontal', 'enctype'=>'multipart/form-data', 'method'=>'post')); ?>
                                        <input type="hidden" name="quote_en" value="<?php echo $quote_en; ?>">
                                        <div class="box-body">
                                            <div class="box-body">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td class="disabled" width="500" colspan="2">
                                                                <textarea id="job_notes" name="job_notes" class="form-control" placeholder="Enter notes here" rows="5"></textarea>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                             <td class="disabled" width="500" colspan="2">
                                                            <input type="file" name="files[]" id="personal" class="form-control" placeholder="">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="disabled" width="500" colspan="2">
                                                                <button id="add-note" type="button" class="btn btn-success btn-xs">Add Note</button>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <br>
                                                <table id="view-quote-notes" class="table table-bordered">
                                                </table>
                                            </div>
                                        </div>
                                        <?php echo form_close();?>
                                    </div>
                                    <?php if($_SESSION['user_group_id'] == 'A' || $_SESSION['user_group_id'] == 'B'){ ?>
                                    <div class="tab-pane" id="logs">
                                        <div class="box-body">
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th class="bg-gray disabled">Sl No.</th>
                                                        <th class="bg-gray disabled">Log Description</th>
                                                        <th class="bg-gray disabled">Log Date & Time</th>
                                                    </tr>
                                                    <?php 
                                                    if(!empty($logs)){
                                                        foreach ($logs as $key => $log){
                                                    ?>
                                                            <tr>
                                                                
                                                                <td class=""><?php echo ($key+1); ?></td>
                                                                <td class=""><?php echo isset($log['job_log_desc'])?$log['job_log_desc']:'' ?></td>
                                                                <td class=""><?php echo isset($log['job_log_timestamp'])?date("d F Y H:m:s", strtotime($log['job_log_timestamp'])):'' ?></td>
                                                            </tr>
                                                    <?php
                                                        }
                                                    }
                                                    else 
                                                    {
                                                    ?>
                                                        <tr>
                                                            <th class="bg-gray disabled" colspan="4">No logs added</th>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    <?php 
                                    }
                                    ?> 
                                </div>
                                <div class="modal fade" id="modal-enter-close-reason">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Enter the reason for changing the status</h4>
                                            </div>
                                            <div class="modal-body">
                                                <?php echo form_open('', array('id' => 'close-reason','class' => 'form-horizontal')); ?>
                                                    <input type="hidden" name="quote_en" value="<?php echo $quote_en; ?>">
                                                    <div class="box">
                                                        <div class="box-body">                        
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <textarea class="form-control" id="close_reason" name="close_reason" rows="5"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="box-footer">                            
                                                            <button type="button" class="btn btn-success" id="update_status_to_close">Change Status</button>
                                                        </div>
                                                    </div>
                                                <?php echo form_close();?>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                               
                                <!-- /.modal -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/masking-input.js" data-autoinit="true"></script>
 