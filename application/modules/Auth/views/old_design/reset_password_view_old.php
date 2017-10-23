<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>CASS | Reset Password</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/login-bg/favicon.ico'); ?>" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="<?php echo base_url('assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/animate.min.css" rel="stylesheet') ?>" />
    <link href="<?php echo base_url('assets/css/style.min.css" rel="stylesheet'); ?>" />
    <link href="<?php echo base_url('assets/css/style-responsive.min.css'); ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/theme/default.css');  ?>" rel="stylesheet" id="theme" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?php echo base_url('assets/plugins/pace/pace.min.js'); ?>"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-white">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image">
                    <img src="<?php echo base_url('assets/img/login-bg/1.png'); ?>" data-id="login-cover-image" alt="" />
                </div>
                <div class="news-caption">
                    <h4 class="caption-title">College Of Alberta School Supertendents</h4>
                    <p>
                        LeaderShip Excellence For World-Class Education
                    </p>
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin login-header -->
                <div class="login-header">
                    <div class="brand">
                        <span ><img src="<?php echo base_url('assets/img/icons/logo_not.png'); ?>" style="width:15px;display:inline-block;"  class="img-responsive" alt="Cass Logo" /> </span> CASS -Reset Password
                        <small>College Of Alberta School Supertendents</small>
                    </div>
                    <div class="icon">
                        <i class="fa fa-sign-in"></i>
                    </div>
                </div>
                <!-- end login-header -->
                <!-- begin login-content -->
                <div class="login-content">
                    <form action="<?php echo base_url('Auth/resetPassword'); ?>" method="POST" class="margin-bottom-0">
                        <div class="form-group m-b-15">
                            <input type="text" disabled name="email" class="form-control input-lg" value="<?php echo $Email_Address; ?>" placeholder="Email Address" />
                        </div>
                        <div class="form-group m-b-15">
                            <input type="password" name="password" class="form-control input-lg" placeholder="Password" />
                        </div>
                        <div class="form-group m-b-15">
                            <input type="password" name="confirmpassword" class="form-control input-lg" placeholder="Confirm Password" />
                        </div>
                        <div class="login-buttons">
                            <button type="submit" id="resetpassform"  class="btn btn-success btn-block btn-lg">Save</button>
                        </div>
                        <input type="hidden" name="UserId" value="<?php echo $User_Id; ?>">
                    <?php if($this->session->flashdata('error')) { ?>
                        <p class="alert alert-warning"><?php echo $this->session->flashdata('error'); ?></p>
                    <?php } ?>
                    <?php if($this->session->flashdata('success')) { ?>
                        <p class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></p>
                    <?php } ?>
                        <hr />
                        <p class="text-center text-inverse">
                            &copy; CASS All Right Reserved 2016
                        </p>
                    </form>
                </div>
                <!-- end login-content -->
            </div>
            <!-- end right-container -->
        </div>
        <!-- end login -->
        
        <!-- begin theme-panel -->
        <!-- end theme-panel -->
    </div>
    <!-- end page container -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery-1.9.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/jquery/jquery-migrate-1.1.0.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
    <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url('assets/plugins/slimscroll/jquery.slimscroll.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/jquery-cookie/jquery.cookie.js'); ?>"></script>
    <!-- ================== END BASE JS ================== -->
    
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="<?php echo base_url('assets/js/apps.min.js'); ?>"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();


        });
            $("#resetpassform").Click(function(e){
                e.preventdefault();
            })
    </script>
</body>
</html>
