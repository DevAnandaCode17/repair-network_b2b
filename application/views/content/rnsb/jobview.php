<table class="table table-bordered">
    <tbody>
    <tr>
        <th class="bg-gray disabled" width="500" colspan="2">Job ID</th>
        <td class="" width="500"><?php echo (isset($job_id) ? sprintf('RNSB%05d', $job_id) : ''); ?></td>
    </tr>
    <tr>
        <th class="bg-gray disabled" width="500" colspan="2">Job Reference Number</th>
        <td class="" width="500"><?php echo (isset($job_details['reference_number']) ?  $job_details['reference_number'] : ''); ?></td>
    </tr>
    <tr>
        <th class='bg-gray disabled' colspan='2'>Client's Full Name</th>
        <td class=""><?php if($edit_job){ ?>
        <input id="client_full_name" name="client_full_name" class="form-control" placeholder="Enter the fullname of the client" type="text" value="<?php echo (isset($job_details['full_name']) ? $job_details['full_name'] : '');?>">
        <?php }else{ 
            echo (isset($job_details['full_name']) ? $job_details['full_name'] : '');
            } ?>
        </td>
    </tr>
    <tr>
        <th class='bg-gray disabled' colspan='2'>Client's Phone Number</th>
        <td class=""><?php if($edit_job){ ?>
            <input id="client_phone_number" name="client_phone_number" class="form-control" placeholder="Enter the phone number of the client" type="text" value="<?php echo (isset($job_details['phone_number']) ? $job_details['phone_number'] : ''); ?>" onkeypress="return /[0-9]/i.test(event.key)" maxlength="11">
        <?php }else{ 
            echo (isset($job_details['phone_number']) ? $job_details['phone_number'] : '') ;
            } ?></td>
    </tr>
    <tr>
        <th class='bg-gray disabled' colspan='2'>Client's Alternate Phone Number</th>
        <td class=""><?php if($edit_job){ ?>
            <input id="client_alternate_phone_number" name="client_alternate_phone_number" class="form-control" placeholder="Enter the alternate phone number of the client" type="text" value="<?php echo (isset($job_details['alternate_phone_number']) ? $job_details['alternate_phone_number'] : '') ?>" onkeypress="return /[0-9]/i.test(event.key)" maxlength="11">
            <?php }else{ 
                echo (isset($job_details['alternate_phone_number']) ? $job_details['alternate_phone_number'] : '');
                } ?></td>
    </tr>
    <tr>
        <th class='bg-gray disabled' colspan='2'>Client's Post Code</th>
        <td class=""><?php if($edit_job){ ?>
            <input id="client_post_code" name="client_post_code" class="form-control" placeholder="Enter the post code of the client" type="text" value="<?php echo (isset($job_details['post_code']) ? $job_details['post_code'] : '') ?>">
            <?php }else{ 
                echo (isset($job_details['post_code']) ? $job_details['post_code'] : '');
                } ?></td>
    </tr>
    <tr>
        <th class='bg-gray disabled' colspan='2'>Client's Address</th>
        <td class=""><?php if($edit_job){ ?>
            <input id="client_address" name="client_address" class="form-control" placeholder="Enter the address of the client" type="text" value="<?php echo (isset($job_details['address']) ? $job_details['address'] : '') ?>">
            <?php }else{ echo 
                (isset($job_details['address']) ? $job_details['address'] : '');
                } ?></td>
    </tr>
    <tr>
        <th class='bg-gray disabled' colspan='2'>Client's Email</th>
        <td class=""><?php if($edit_job){ ?>
            <input id="client_email" name="client_email" class="form-control" placeholder="Enter the email of the client" type="text" value="<?php echo (isset($job_details['email']) ? $job_details['email'] : '') ?>">
            <?php }else{ 
                echo (isset($job_details['email']) ? $job_details['email'] : '');
                } ?></td>
    </tr>
    <?php if($edit_job){ ?>
    <tr>
        <th class="bg-gray disabled" colspan="2">Please click on the update button to save the details of the job</th>
        <td class="">
        <button id="save-job-customer" type="button" class="btn btn-success btn-xs">Update</button>
        &nbsp;
        <button id="cancel-job-customer" type="button" class="btn btn-warning btn-xs">Cancel</button>
        </td>
    </tr>
    <?php } ?>
    <tr>
        <th class="bg-gray disabled" colspan="2">Job Type</th>
        <td class="">
        <?php if(!empty($job_type)){
            foreach ($job_type as $key => $job){
                if($job_details['job_type'] !='' && $job_details['job_type'] == $job['id']){
                    echo $job['job_type'];
                }
            }
        }?>
        </td>
    </tr>
    <tr>
        <th class="bg-gray disabled" colspan="2">Boiler Type</th>
        <td class="">
        <?php if(!empty($boiler_type)){
            foreach ($boiler_type as $key => $boiler){
                if($job_details['boiler_type'] !='' && $job_details['boiler_type'] == $boiler['id']){
                    echo $boiler['boiler_type'];
                }
            }
        }?>
        </td>
    </tr>
    <tr>
    <th class="bg-gray disabled" colspan="2">Boiler Make</th>
        <td class="">
        <?php if(!empty($boiler_make)){
            foreach ($boiler_make as $key => $make){
                if($job_details['boiler_make'] !='' && $job_details['boiler_make'] == $make['id']){
                    echo $make['boiler_make'];
                }
            }
        }?>
        </td>
    </tr>
    <tr>
        <th class="bg-gray disabled" colspan="2">Fuel Type</th>
        <td class=""><?php echo (isset($job_details["fuel_type"]) ? $job_details["fuel_type"] :"");?></td>
    </tr>
    <?php if(!$edit_job){ ?>
    <tr>
        <th class="bg-gray disabled" colspan="2">Do you want to edit the details of this job?</th>
        <td class=""><button id="edit-job-customer" type="button" class="btn btn-warning btn-xs">Edit</button></td>
    </tr>
    <?php } ?>
    </tbody>
</table><br>
<table class="status-update-log table table-bordered">
    <thead class="bg-gray disabled">
    <tr>
    <th colspan="4" style="text-align: center;">Status Updates (On Descending Order)</th>
    </tr>
    </thead>
    <tbody>
        <tr class="">
            <th>Sl no.</th>
            <th>Status</th>
            <th>User</th>
            <th>Status Changed On</th>
        </tr>
        <?php if (!empty($job_status_log)) {
        foreach ($job_status_log as $key => $status_log) { ?>
        <tr class="">
            <td><?php echo ($key + 1) ?></td>
            <td><?php echo $status_log['job_status'] ?></td>
            <td><?php echo ($status_log['user_first_name'] .' '. $status_log['user_last_name']) ?></td>
            <td><?php echo (date("d F Y H:i:s", strtotime($status_log['created_at']))) ?></td>
        </tr>
        <?php }
        } else { ?>
        <tr>
            <th colspan="4" style="text-align: center;">No Status Updates</th>
        </tr>
        <?php } ?>
    </tbody>
</table>