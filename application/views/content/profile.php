<div class="content-wrapper">
    <section class="content-header" style="padding-bottom: 15px;">
        <h1>
            Profile
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-dashboard"></i>Dashboard</a></li>
            <li class="active">Profile</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" id="add_user_form">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Your Profile</h3>
                        </div>
                        <div class="box-body">
                            <table class="table table-striped">
                                <tr>
                                    <th>Username</th>
                                    <td><?php if(isset($user->user_name)){ echo $user->user_name; } ?></td>
                                </tr>
                                <tr>
                                    <th>User Group</th>
                                    <td><?php if(isset($user->user_group_name)){ echo $user->user_group_name; } ?></td>
                                </tr>
                                <tr>
                                    <th>First Name</th>
                                    <td><?php if(isset($user->user_first_name)){ echo $user->user_first_name; } ?></td>
                                </tr>
                                <tr>
                                    <th>Last Name</th>
                                    <td><?php if(isset($user->user_last_name)){ echo $user->user_last_name; } ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?php if(isset($user->user_email)){ echo $user->user_email; } ?></td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td><?php if(isset($user->user_email)){ echo $user->user_phone; } ?></td>
                                </tr>
                            </table>
                        </div>
                        <?php $user_id = $_SESSION["user_id"]; ?>
                        <div class="box-footer">
                            <a href="updateUser/<?php echo $user_id; ?>">
                            <button type="button" class="btn btn-success" id="">Edit</button></div></a>
                            <button type="button" class="btn btn-default pull-right">Cancel</button>
                        </div>
                    </div>                    
                </form>
            </div>
        </div>
    </section>
</div>


 