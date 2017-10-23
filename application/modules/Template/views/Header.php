<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Impression Bridal</title>
  <!-- <link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon"> -->
  <!-- <link rel="icon" href="image/favicon.ico" type="image/x-icon"> -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0" />
  <meta property="og:url" content="www.impressionbridalstore.com" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Impression Bridal Store" />
  <meta property="og:description" content="Impression Bridal Store presents a wide variety of designs, from bridal wear, bridesmaid dresses, prom dresses, quinceneara gowns, to special occassion dresses. Each are made with its own unique style to show the glamour and elegance that you will need on your special day." />
  <meta property="og:image" content="http://demo.cbil360.com/impressionbridal/images/img2.jpg" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i|Playfair+Display:400,700" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
  <!-- Custom styles  -->
  <link href="<?php echo base_url('assets/css/global.css'); ?>" rel="stylesheet">
  <!-- Custom font & icons  -->
  <link href="<?php echo base_url('assets/css/fonts.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/font-icons.css'); ?>" rel="stylesheet">
  <script src="<?php echo base_url('assets/js/modernizr.custom.js'); ?>"></script>
  <script>
  var token = '1362124742.3ad74ca.6df307b8ac184c2d830f6bd7c2ac5644',
      hashtag='mountains',
      num_photos = 9;

  $.ajax({
  	url: 'https://api.instagram.com/v1/tags/' + hashtag + '/media/recent',
  	dataType: 'jsonp',
  	type: 'GET',
  	data: {access_token: token, count: num_photos},
  	success: function(data){
      console.log(data);

  		for(x in data.data){
  		    $('#grid').append('<li class="shown"><a href="'+ data.data[x].link +'"><img src="'+data.data[x].images.standard_resolution.url+'"></span></a></li>');
      }
  	},
  	error: function(data){
  		console.log(data);
  	}
  });
  </script>
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="social-icon">
            <ul>
              <li>
                <a href="https://www.facebook.com/impressionbridal/" target="_blank">
                   <span class="icon-facebook-logo"></span>
                 </a>
              </li>
              <li>
                <a href="https://twitter.com/impressionstore?lang=en" target="_blank">
                   <span class="icon-twitter-logo"></span>
               </a>
              </li>
              <li>
                <a href="https://www.instagram.com/impressionbridalstore/" target="_blank">
                   <span class="icon-instagram-logo"></span>
               </a>
              </li>
              <li>
                <a href="mailto:info@impressionbridal.com" target="_blank">
                   <span class="icon-new-email-outline-symbol-in-black-circular-button"></span>
               </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4">
          <a href="./" class="logo"><img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="Impression Bridal" class="img-responsive" align="center"></a>
        </div>
        <div class="col-lg-4">
          <div class="sign-in-up">
            <a href="#" data-toggle="modal" data-target="#login-modal">sign in / sign up</a>
          </div>
          <div class="fev">
            <a href="favorites.php" class="active">
              <span class="icon icon-favorite-heart-button"></span>
              <span class="text">favorites</span>
            </a>
          </div>
          <div class="appointment text-right">
            <a href="appointment.php" class="text-anchor">Make an Appointment</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <nav id="#primary_nav_wrap">
            <label for="drop" class="toggle">Menu</label>
            <input type="checkbox" id="drop" />
            <ul class="menu">
              <li><a href="<?php echo base_url('Impression');?>">Home</a></li>
              <li>
                <!-- First Drop Down -->
                <label for="drop-1" class="toggle">Collections</label>
                <a href="<?php echo base_url('Impression/collection');?>">Collections</a>
                <input type="checkbox" id="drop-1" />
                <ul>
                  <?php foreach ($collection_list as $key => $value) { ?>
                  <li><a href="<?php echo base_url('Impression/collection/'.$value->collection_id); ?>"><?php echo $value->collection_name; ?></a></li>
                  <?php } ?>
                </ul>
              </li>
              <li><a href="<?php echo base_url('Impression/about_us');?>">About Us</a></li>
              <li>
                <!-- Second Drop Down -->
                <label for="drop-2" class="toggle">Stores</label>
                <a href="#">Stores</a>
                <input type="checkbox" id="drop-2" />
                <ul>
                  <?php foreach ($store_list as $key => $value) { ?>
                     <li><a href="<?php echo base_url('Impression/stores/'.$value->store_id); ?>"><?php echo $value->store_name; ?></a></li>
                  <?php } ?>
                  
                </ul>
              </li>
              <li><a href="<?php echo base_url('Impression/real_brides');?>">Real Brides</a></li>
              <li><a href="<?php echo base_url('Impression/event_trunkshow');?>">Events & Trunkshows</a></li>
              <li><a href="<?php echo base_url('Impression/careers');?>">Careers</a></li>
              <li><a href="<?php echo base_url('Impression/contact_us');?>">Contact Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <!-- /container -->
  </header>

<!-- Subscription Modal -->
<div class="container">
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#subscribe-modal">Open Modal</button> -->
  <!-- Subscription Modal -->
  <div id="subscribe-modal" class="modal fade subscribe-modal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
          <h4>Join our subscription list!</h4>
          <div class="image-wrap">
            <img src="<?php echo base_url('assets/images/subscribe.jpg'); ?>">
          </div>
          <form>
            <input type="text" placeholder="Email">
            <button class="btn btn-primary">Subscribe</button>
          </form>
          <a data-dismiss="modal" class="close-modal"><span class="icon-cancel"></span></a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Login Signup Modal -->
<div class="container">
  <div id="login-modal" class="modal fade subscribe-modal login-modal" role="dialog">
    <div class="modal-dialog modal-md">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">

          <div class="sign-in">
            <h4>SIGN IN</h4>
            <form action="<?php echo base_url('Auth/login'); ?>" id="LoginForm" method="post" accept-charset="utf-8">
              <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
              <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
              <div class="pull-left">
                <button type="submit" class="btn btn-primary">Login</button>
                <a class="sign-up-wnd">Sign Up</a>
              </div>
              <div class="pull-right">
                <a class="forgot-pwd">Forgot password?</a>
              </div>
              <div class="clearfix"></div>
            </form>
          </div>

          <div class="sign-up">
            <h4>SIGN UP</h4>
            <form action="<?php echo base_url('Auth/register'); ?>" id="registerForm" method="post" accept-charset="utf-8">
              <input type="email" class="form-control" value="<?php echo set_value('email'); ?>" id="inputEmail" required="" name="email" placeholder="Email">
              <input type="phone" class="form-control" value="<?php echo set_value('phone_number'); ?>" id="inputPhone" required="" name="phone_number" placeholder="Phone Number">
              <input type="password" class="form-control" value="<?php echo set_value('password'); ?>" id="inputPassword" required="" name="password" placeholder="Password">
              <input type="password" class="form-control" value="<?php echo set_value('confirm_password'); ?>" id="inputPasswordCheck" required="" name="confirm_password" placeholder="Confirm Password">
              <div class="pull-left">
                <button type="submit" class="btn btn-primary">Sign Up</button>
                <a class="login-wnd">Login</a>
              </div>
              <div class="pull-right">
                <a class="forgot-pwd">Forgot password?</a>
              </div>
              <div class="clearfix"></div>
            </form>
          </div>

          <div class="forgot-password">
            <h4>FORGOT PASSWORD</h4>
            <form>
              <input type="email" placeholder="Email">
              <div class="pull-left">
                <button class="btn btn-primary">Update login</button>
              </div>
              <div class="pull-right">
                <a id="" class="login-wnd">Back to Login</a>
              </div>
              <div class="clearfix"></div>
            </form>
          </div>
          <a data-dismiss="modal" class="close-modal"><span class="icon-cancel"></span></a>
        </div>

      </div>
    </div>
  </div>
</div>
