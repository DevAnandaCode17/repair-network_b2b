<div class="box-header with-border">
    <h3 class="box-title">View jobs</h3>
</div>
<div class="box-body">
    <table class="table table-bordered">
        <tr>
            <th style="width: 10px">#</th>
            <th>JobID</th>
            <th>Client Name</th>
            <th>Job Type</th>
            <th>Boiler Type</th>
            <th>Boiler Make</th>
            <th>Notes</th>
            <th>Status</th>
            <th>Date Added</th>
            <th>Manage</th>
        </tr>
        <?php if (!empty($jobs)) {
            foreach ($jobs as $key => $job) {
                $job->job_created = date("d F Y H:i:s", strtotime($job->job_created)); ?>
                <tr>
                    <td><?php echo ($offset + $key + 1); ?></td>
                    <td>
                        <a href="<?php echo base_url(); ?>rnsbjobdetailsingle/<?php echo sprintf('RNSB%05d', $job->job_id); ?>/">
                            <?php echo (isset($job->job_id) ? sprintf('RNSB%05d', $job->job_id) : ''); ?>
                        </a>
                    </td>
                    <td>
                        <?php echo ((isset($job->full_name)) ? ($job->full_name) : ''); ?>
                    </td>
                    <td>
                        <?php echo ((isset($job->job_type)) ? ($job->job_type) : ''); ?>
                    </td>
                    <td>
                        <?php echo ((isset($job->boiler_type)) ? ($job->boiler_type) : ''); ?>
                    </td>
                    <td>
                        <?php echo ((isset($job->boiler_make)) ? ($job->boiler_make) : ''); ?>
                    </td>
                    <td>
                        <?php echo ((isset($job->notes)) ? ($job->notes) : ''); ?>
                    </td>
                    <td><?php echo isset($job->job_status) ? $job->job_status : ''; ?></td>
                    <td><?php echo $job->job_created; ?></td>
                    <td style="width: 150px">
                        <a href=" <?php echo base_url() ?>rnsbjobdetailsingle/<?php echo sprintf('RNSB%05d', $job->job_id); ?>/">
                            <button type="button" class="btn btn-xs btn-flat btn-success">View</button>
                        </a>
                        <?php if(in_array($_SESSION['user_group_id'] ,array('A','B','F'))) { ?>
                            <button type="button" class="btn btn-xs btn-flat btn-danger" onclick="deletejob('<?php echo $job->job_del_id; ?>')">Delete</button>
                        <?php } ?>
                    </td>
                </tr>
            <?php } ?>
        <?php } else { ?>
            <tr>
                <td colspan="11" style="text-align: center">No Jobs Found</td>
            </tr>
        <?php } ?>

    </table>
    <?php echo $pagination; ?>
</div>