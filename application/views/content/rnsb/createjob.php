<div class="content-wrapper">
    <section class="content-header" style="padding-bottom: 15px;">
        <h1>
            Create Job
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Create Job</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="quote-details box">
                    <div class="box-body">  
                        <div class="row">
                            <div class="col-md-12">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="quotedetails">
                                        <?php echo form_open('', array('id' => 'create_job','class' => 'form-horizontal')); ?>
                                            <div class="box-body assign-engineer-wrapper col-md-7">
                                                <table class="table table-bordered">
                                                    <tbody class="bg-gray disabled">
                                                        <tr>
                                                            <th>Job Reference Number<span class="required">*</span></th>
                                                            <td>
                                                                <input id="job_reference_number" name="job_reference_number" class="form-control" placeholder="Enter Job Reference Number" value="" type="text">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Client (Full Name)<span class="required">*</span></th>
                                                            <td>
                                                                <input id="client_full_name" name="client_full_name" class="form-control" placeholder="Enter Client Full Name" value="" type="text">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Client's Phone Number<span class="required">*</span></th>
                                                            <td>
                                                                <input id="client_phone_number" name="client_phone_number" class="form-control" placeholder="Enter Client's Phone Number" value="" type="text" onkeypress="return /[0-9]/i.test(event.key)" maxlength="11">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        <th>Client's Alternative Phone Number</th>
                                                           <td>
                                                                <input id="client_alternate_phone_number" name="client_alternate_phone_number" class="form-control" placeholder="Enter Client's Alternate Phone Number" value="" type="text" onkeypress="return /[0-9]/i.test(event.key)" maxlength="11">
                                                           </td>
                                                       </tr>
                                                        <tr>
                                                            <th>Client's Post Code<span class="required">*</span></th>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-md-12 col-lg-4 mg-b">
                                                                        <input id="client_post_code" name="client_post_code" class="form-control text-uppercase" placeholder="Post Code" type="text">
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4 mg-b">
                                                                        <button id="get-client-address" type="button" class="btn btn-warning btn-block">Get Address</button>
                                                                    </div>
                                                                    <div class="col-sm-6 col-lg-4 mg-b">
                                                                        <button id="get-address-cancel" type="button" class="btn btn-danger btn-block">Reset</button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="address-w">Client's Address<span class="required">*</span></th>
                                                            <td id="get-address-wrap">
                                                                <input id="client_address" name="client_address" class="form-control" placeholder="Enter Client's Address" value="" type="text" maxlength="50">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Client's Email<span class="required">*</span></th>
                                                            <td>
                                                                <input id="client_email" name="client_email" class="form-control" placeholder="Enter Client's Email" value="" type="text" maxlength="50">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Job Type<span class="required">*</span></th>
                                                            <td>
                                                                <select id="job_type" name="job_type" class="form-control">
                                                                    <option value="">Select Job Type</option>
                                                                    <?php 
                                                                    if(!empty($job_type))
                                                                    {
                                                                        foreach ($job_type as $key => $job) 
                                                                        {
                                                                    ?>
                                                                            <option value="<?php echo $job['id']; ?>"><?php echo $job['job_type']; ?></option>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Boiler Type<span class="required">*</span></th>
                                                            <td>
                                                                <select id="boiler_type" name="boiler_type" class="form-control">
                                                                    <option value="">Select Boiler Type</option>
                                                                    <?php 
                                                                    if(!empty($boiler_type))
                                                                    {
                                                                        foreach ($boiler_type as $key => $boiler) 
                                                                        {
                                                                    ?>
                                                                            <option value="<?php echo $boiler['id']; ?>"><?php echo $boiler['boiler_type']; ?></option>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Boiler Make<span class="required">*</span></th>
                                                            <td>
                                                                <select id="boiler_make" name="boiler_make" class="form-control">
                                                                    <option value="">Select Boiler Make</option>
                                                                    <?php 
                                                                    if(!empty($boiler_make))
                                                                    {
                                                                        foreach ($boiler_make as $key => $make) 
                                                                        {
                                                                    ?>
                                                                            <option value="<?php echo $make['id']; ?>"><?php echo $make['boiler_make']; ?></option>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Fuel Type<span class="required">*</span></th>
                                                            <td>
                                                                <select id="fuel_type" name="fuel_type" class="form-control">
                                                                    <option value="">Select Fuel Type</option>
                                                                    <option value="Gas">Gas</option>
                                                                    <option value="Electric">Electric</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">Comments (Please enter important details about this job)<span class="required">*</span></th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">
                                                                <textarea id="job_comments" name="job_comments" class="form-control" style="height: 250px !important" maxlength="1000"></textarea>
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">
                                                                <button id="save-job" type="button" class="btn btn-success">Save Job</button>
                                                            </th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        <?php echo form_close();?>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>