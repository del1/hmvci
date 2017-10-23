<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Max Pro | Register</title>
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
</head>
<body class="pace-top">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade in"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    
    <div class="login-cover">
        <div class="login-cover-image"><img src="<?php echo base_url('assets/img/login-bg/bg-5.jpg'); ?>" data-id="login-cover-image" alt="" /></div>
        <div class="login-cover-bg"></div>
    </div>
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                <span><img src="<?php echo base_url('assets/img/spark-logo.jpg'); ?>" style="width:76px;display:inline-block;" class="img-responsive" alt="Cass Logo"> </span>
                     Max Pro
                    <small>Create your Account.</small>
                </div>
                
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form action="<?php echo base_url('/Register'); ?>" method="POST" class="margin-bottom-0">
                    <label class="control-label">Name</label>
                        <div class="row row-space-10">
                            <div class="col-md-6 m-b-15">
                                <input type="text" class="form-control" name="firstName" required placeholder="First name" />
                            </div>
                            <div class="col-md-6 m-b-15">
                                <input type="text" class="form-control" name="lastName" required placeholder="Last name" />
                            </div>
                        </div>
                    <label class="control-label">Username</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="userName" required placeholder="Username" />
                                <div class="usernameerr"></div>
                            </div>
                        </div>
                    <label class="control-label">Email</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" required placeholder="Email address" />
                                <div class="emailerr"></div>
                            </div>
                        </div>
                    <label class="control-label">Phone Number</label>
                    <div class="row m-b-15">
                        <div class="col-md-12">
                            <input type="number" class="form-control" onkeypress='return isNumber(event)' name="phone" required placeholder="Phone Number" />
                            <div class="phonerr"></div>
                        </div>
                    </div>
                    <label class="control-label">Password</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password" required placeholder="Password" />
                            </div>
                        </div>
                    <label class="control-label">Confirm Password</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="cpassword" required placeholder="Confirm Password" />
                                <div class="pswderr"></div>
                            </div>
                        </div>
                        
                    <label class="control-label">Nationality</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <select name="nation" required required class="form-control">
                                <option value="0" hidden="">Select Country</option>
                                    <?php foreach ($countryList as $row) { ?>
                                       <option value="<?php echo  $row['Country_Id']; ?>"><?php echo  $row['Description']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                <label class="control-label">How did you find us?</label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <select name="howfindus" required class="form-control">
                                    <option value="Quicker">Quicker</option>
                                    <option value="NewsPaper">NewsPaper</option>
                                    <option value="Email/SMS">Email/SMS</option>
                                    <option value="Friend">Friend</option>
                                    <option value="www.justdial.com">www.justdial.com</option>
                                </select>

                            </div>
                        </div>
                        <div class="register-buttons">
                            <input type="button" name="submit" value="Sign Up" id="signup" class="btn btn-primary btn-block btn-lg" />
                        </div>

                        <?php if($this->session->flashdata('error')) { ?>
                            <p class="alert alert-warning"><?php echo $this->session->flashdata('error'); ?></p>
                        <?php } ?>
                        <?php if($this->session->flashdata('success')) { ?>
                            <p class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></p>
                        <?php } ?>

                        <div class="m-t-10 m-b-10 p-b-10">
                            Already a member? Click <a href="<?php echo base_url('Login'); ?>">here</a> to login.
                        </div>
                        <hr />
                        <p class="text-center ">
                            &copy; chng:sitename All Right Reserved 2016
                        </p>
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
    var unameFlag,emailFlag,pswdFlag=0;
        $(document).ready(function() {
            App.init();
            LoginV2.init();

            $("input[name='userName']").blur(function(){
                    var username=$(this).val();
                    if(username.length){
                    $.ajax({
                        url: "<?php echo base_url('Auth/checkuserNameToRegister') ?>",
                        type: "POST",
                        data:{username:username},
                        success: function(data, textStatus, jqXHR)
                        {
                            //incomplete:continiue
                            result=parseInt(data);
                            if(result)
                            {
                                $("input[name='userName']").css("border","1px solid red");
                                $(".usernameerr").html("This Username is not avaialble");
                                $(".usernameerr").css("color","red");
                                unameFlag=1;
                            }else{
                                $("input[name='userName']").css("border","1px solid green");
                                $(".usernameerr").empty();
                                $(".usernameerr").css("color","green");
                                unameFlag=0;
                            }
                        }         
                    });
                    }else{
                        console.log("fail");
                    }
            })

            $("input[name='email']").blur(function(){
                var email=$(this).val();

                if(!IsEmail(email)){
                    $(".emailerr").html("Please Enter the correct email address");
                    $("input[name='email']").css("border","1px solid red");
                    $(".emailerr").css("color","red");
                    emailFlag=1;
                }else{
                    if(email.length){
                    $.ajax({
                        url: "<?php echo base_url('Auth/checkEmailToRegister') ?>",
                        type: "POST",
                        data:{email:email},
                        success: function(data, textStatus, jqXHR)
                        {
                            result=parseInt(data);
                            if(!result)
                            {
                                $("input[name='email']").css("border","1px solid red");
                                $(".emailerr").html("This email address is already in use");
                                $(".emailerr").css("color","red");
                                emailFlag=1;
                            }else{
                                $("input[name='email']").css("border","1px solid green");
                                $(".emailerr").empty();
                                emailFlag=0;
                            }
                        }         
                    });
                    }else{
                        console.log("fail");
                    }
                }
            })
            $("input[name='cpassword'],input[name='password']").blur(function(){

                if($(this).val() && $("input[name='password']").val()){
                    if($(this).val()!=$("input[name='password']").val()){
                    $(this).css("border","1px solid red");
                    $("input[name='password']").css("border","1px solid red");
                    $(".pswderr").html("Passoword do not match!");
                    $(".pswderr").css("color","red");
                    pswdFlag=1;
                }else{
                    $(this).css("border","none");
                    $("input[name='password']").css("border","none");
                    $(".pswderr").empty();
                    pswdFlag=0;
                }
                }else{
                    pswdFlag=1;
                }


            });



            $("#signup").click(function(){
                if( emailFlag || unameFlag || pswdFlag ){
                    $(".has-feedback").html("<span style='color:red'>Please Check form</span>");
                }else{
                   $(this).attr("type","submit");
                }
            })
        });

        function IsEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }


        function isNumber(evt) 
        {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
            }
            return true;
        }

    </script>
</body>
</html>
