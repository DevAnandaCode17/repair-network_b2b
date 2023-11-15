<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Repair Network - Service Box | Dashboard</title>
    <meta name="google-site-verification" content="XecXOVW0TTQSIiQEXded3W1cVt6OdFnWa09sMQ5MWM0" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/Ionicons/css/ionicons.min.css">
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/bootstrap-daterangepicker/daterangepicker.css">
    <!-- datetime picker -->
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/css/skins/_all-skins.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Custom style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>vendors/css/custom.css?v=0.5">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-black-light sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="<?php echo base_url(); ?>dashboard" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">RN-SB</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">Repair Network - Service Box</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav notification-bar">
                    </ul>
                    <ul class="nav navbar-nav">

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-xs"><?php echo $_SESSION["user_group_name"]; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <p>
                                        <i class="fa fa-user-o" aria-hidden="true"></i>
                                        <?php echo $_SESSION["user_name"]; ?>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="pull-right">
                                        <a href="<?php echo base_url(); ?>logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>

                    <li>
                        <a href="<?php echo base_url(); ?>jobdetails">
                            <i class="fa fa-home"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <?php if(in_array($_SESSION['user_group_id'] ,array('A','B','C','F'))) { ?>
                    <li>
                        <a href="<?php echo base_url(); ?>createjobs"><i class="fa fa-user-plus"></i> Create RNSB Jobs</a>
                    </li>
                    <?php } ?>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-level-down"></i> <span>View RNSB Jobs</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="<?php echo base_url(); ?>jobdetails"><i class="fa fa-circle-o"></i> View Jobs</a></li>
                            </ul>
                        </li>
                       
                        <?php if(in_array($_SESSION['user_group_id'] ,array('A','B'))) { ?>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-users"></i> <span>Users</span>
                                    <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="<?php echo base_url(); ?>users"><i class="fa fa-circle-o"></i> View Users</a></li>
                                    <li><a href="<?php echo base_url(); ?>users/add"><i class="fa fa-circle-o"></i> Add User</a></li>
                                </ul>
                            </li>
                        <?php } ?>
                       
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
