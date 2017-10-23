<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Max Pro | Login</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/spark-logo.ico'); ?>" />
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo base_url('assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/animate.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/style.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/style-responsive.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/theme/default.css'); ?>" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('assets/plugins/pace/pace.min.js'); ?>"></script>
	<!-- ================== END BASE JS ================== -->
	<style type="text/css">
		.resetpassword{
			display: none;
		}
	</style>
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<div class="login-cover">
	    <div class="login-cover-image"><img src="<?php echo base_url('assets/img/login-bg/bg-6.jpg'); ?>" data-id="login-cover-image" alt="" /></div>
	    <div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                <span><img src="<?php echo base_url('assets/img/spark-logo.jpg'); ?>" style="width:76px;height:50px;display:inline-block;" class="img-responsive" alt="Cass Logo"> </span>
                     Max Pro
                    <small>Work from home and get paid</small>
                </div>
                <div class="icon">
                    <i class="fa fa-sign-in"></i>
                </div>
            </div>
            <!-- end brand -->
            <?php //print_r($this->_ci_cached_vars); ?>
            <div class="login-content">
                <form action="<?php echo base_url('/Login'); ?>" method="POST" class="margin-bottom-0">
                    <div class="form-group m-b-20">
                        <input type="text" class="form-control input-lg" name="email" value ="<?php echo @$this->input->cookie('email',true); ?>" placeholder="Username or Email Address" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" name="password" value ="<?php echo @$this->input->cookie('password',true); ?>" class="form-control input-lg" placeholder="Password" />
                    </div>
                    <div class="checkbox m-b-20">
                        <label>
                            <input type="checkbox" name="rememberme" /> Remember Me
                        </label>
                    </div>
                    <div class="row row-space-10">
                        <div class="col-md-6 m-b-15">
		                    <div class="login-buttons">
	                    	    <input  name="submit" type="submit" value="Sign me in" class="btn btn-success btn-block btn-lg" />
		                    </div>
                        </div>
                        <div class="col-md-6 m-b-15">
		                    <div class="register-buttons">
	                        	<a href="<?php echo base_url('Register'); ?>" class="btn btn-primary btn-block btn-lg">Register</a>
		                    </div>
                        </div>
                    </div>

                    <?php if($this->session->flashdata('error')) { ?>
                        <?php echo $this->session->flashdata('error'); ?>
                    <?php } ?>
                    <?php if($this->session->flashdata('success')) { ?>
                        <?php echo $this->session->flashdata('success'); ?>
                    <?php } ?>
                    <div class="m-t-20">
                        Forgot password? Click <a href="javascript:void(0)" id="reset">here</a> to reset your password.
                    </div>
				 	<div class="form-group m-t-20 resetpassword">
	                    <div class="form-group">
	                        <input type="text" class="form-control input-lg" name="resetemail" placeholder="Enter email address to reset password" />
	                    </div>
	                    <div class="login-buttons">
	                        <input  name="submit" type="button" value="Reset" class="btn btn-success btn-block btn-lg" />
	                    </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- end login -->
    
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
	<script src="<?php echo base_url('assets/js/login-v2.demo.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/apps.min.js'); ?>"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			LoginV2.init();
			$("#reset").click(function(){
				$(".resetpassword").toggle();
			})
		});
	</script>
</body>
</html>
