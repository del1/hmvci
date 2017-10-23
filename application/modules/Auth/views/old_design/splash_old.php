<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>Max Pro</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    
    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/animate.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/style_shashi.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/style-responsive.min.css');?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/theme/default.css');?>" id="theme" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?php echo base_url('assets/plugins/pace/pace.min.js');?>"></script>
    <!-- ================== END BASE JS ================== -->
</head>
<body data-spy="scroll" data-target="#header-navbar" data-offset="51">
    <!-- begin #page-container -->
    <div id="page-container" class="fade">
        <!-- begin #header -->
        <div id="header" class="header navbar navbar-transparent navbar-fixed-top">
            <!-- begin container -->
            <div class="container">
                <!-- begin navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">
                        <span class="brand-text">
                            <span class="text-theme">Max Pro</span>
                        </span>
                    </a>
                </div>
                <!-- end navbar-header -->
                <!-- begin navbar-collapse -->
                <div class="collapse navbar-collapse" id="header-navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active dropdown">
                            <a href="#home1" data-click="scroll-to-target" data-toggle="dropdown">HOME <!-- <b class="caret"></b> --></a>
                            <!-- <ul class="dropdown-menu dropdown-menu-left animated fadeInDown">
                                <li><a href="index.html">Page with Transparent Header</a></li>
                                <li><a href="index_inverse_header.html">Page with Inverse Header</a></li>
                                <li><a href="index_default_header.html">Page with White Header</a></li>
                                <li><a href="extra_element.html">Extra Element</a></li>
                            </ul> -->
                        </li>
                        <li><a href="#team" data-click="scroll-to-target">TEAM</a></li>
                        <li><a href="#jobseekers" data-click="scroll-to-target">JOBSEEKER</a></li>
                        <li><a href="#service" data-click="scroll-to-target">SERVICES</a></li>
                        <li><a href="#employer" data-click="scroll-to-target">EMPLOYER</a></li>
                        <li><a href="#contact" data-click="scroll-to-target">CONTACT</a></li>
                    </ul>
                </div>
                <!-- end navbar-collapse -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #header -->
        
        <!-- begin #home -->
        <div id="home" class="content has-bg home">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="<?php echo base_url('assets/img/slide.jpg');?>" alt="Home" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container home-content">
                <h1 class="text-info">LOOKING FOR A JOB</h1>
                <h3>Here is better place to start</h3>
                <p><!-- We have created a multi-purpose theme that take the form of One-Page or Multi-Page Version.<br /> Use our <a href="#">theme panel</a> to select your favorite theme color. -->
                </p>
                <a href="<?php echo base_url('/Register'); ?>" class="btn btn-theme bg-aqua-lighter">Register Here</a> 
                <a href="<?php echo base_url('/Login'); ?>" class="btn btn-outline">Login Here</a><br />
                <br />
                <!-- or <a href="#">subscribe</a> newsletter -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #home -->
        
        <!-- begin #about -->
        <div id="home1" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title text-info ">HOME</h2>
                <p class="content-desc ">We take this opportunity to introduce ourselves as professional consultants in the field of Personnel Manpower recruitments since 2011. We have an excellent data bank cutting across all levels consisting of experienced personnel seeking a change. The objective is to make available the right talent at the right time.</p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 --> 
                    <div class=" col-sm-6 m-t-20">
                        <!-- begin about -->
                        <div class="col-sm-1 col-xs-2">
                            <span class="fa fa-th-large text-info"></span>
                        </div>
                        <div class="col-sm-11 col-xs-10 about">
                            <h3 class="text-info">Our Services</h3>
                            <p>We have been providing placements at Senior, Middle and Junior Management Levels to reputed Multinational and Indian Organizations. & Data Entry Management. 
                            </p>
                            
                        </div>
                        <!-- end about -->
                    </div>
                    <!-- end col-4 -->
                    
                    <div class=" col-sm-6 m-t-20">
                        <div class="col-sm-1 col-xs-2" >
                            <span class="fa fa-th-large text-info"></span>
                        </div>
                        <!-- begin about -->
                        <div class="col-sm-11  col-xs-10 about">
                            <h3 class="text-info">Databank</h3>
                            <p>We have a strong database of biodatas covering most management functions across all industries. A professionally managed structured database help us find the right candidate, faster than our competitors. We are specialized into Sales, Accounts, Back Office, IT & All Types Of Recruitments.</p>
                        </div>
                        <!-- end about -->
                    </div>
                   
                    <div class=" col-sm-6 m-t-20">
                        <div class="col-sm-1 col-xs-2">
                            <span class="fa fa-th-large text-info"></span>
                        </div>
                        <!-- begin about -->
                        <div class="col-sm-11 col-xs-10 about ">
                            <h3 class="text-info">Our database is constantly updated by </h3>
                            <ul>
                                <li>Candidates visiting our website.</li>
                                <li>Interactions with candidates in walk-ins conducted by us.</li>
                                <li>Our team contacting candidates directly.</li>
                                <li>Response to our advertisements in newspapers, frequently used search engines, popular email sites and other websites.</li>
                                <li>Reference from past candidates. & References from network of people who approach us for career advice.</li>
                            </ul>
                        </div>
                        <!-- end about -->
                    </div>
 
                    <div class=" col-sm-6 m-t-20">
                        <div class="col-sm-1 col-xs-2">
                            <span class="fa fa-th-large text-info"></span>
                        </div>
                        <!-- begin about -->
                        <div class="col-sm-11 col-xs-10 about">
                            <h3 class="text-info">We specialize in </h3>
                            <ul>
                                <li>Accounting</li>
                                <li>Administration</li>
                                <li>Finance</li>
                                <li>General Management</li>
                                <li>Human Resources</li>
                                <li>Manufacturing</li>
                                <li>Sales & Marketing</li>
                            </ul>
                        </div>
                        <!-- end about -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->
    
        <!-- begin #milestone -->
        <div id="milestone" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="<?php echo base_url('assets/img/milestone-bg.jpg');?>" alt="Milestone" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="1292">1,292</div>
                            <div class="title">Available Jobs</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="9039">9,039</div>
                            <div class="title">Registered Members</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="89291">9,039</div>
                            <div class="title">Members till date</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-3 milestone-col">
                        <div class="milestone">
                            <div class="number" data-animation="true" data-animation-type="number" data-final-number="129">78</div>
                            <div class="title">Our Recruiters</div>
                        </div>
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #milestone -->
        
        <!-- begin #team -->
        <div id="team" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title text-info">OUR TEAM</h2>
                <p class="content-desc  ">Our Consultants and Recruiters are well trained in the recruitment process. On receiving your requirements, we will have detailed discussion with you to understand the organisation structure, job profile, the type of person you have in mind and the salary package offered. We then carry out the preliminary interview & send those candidates who suit your job profile.</p>
                <p class="content-desc">We take registration fees from our candidates. We thus have a Data Bank rich with people of high caliber and specialization.</p>
                <p class="content-desc">We assure our best services at all times !!!</p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <!-- <div class="col-md-4 col-sm-4">
                        <div class="team">             
                            <div class="image" data-animation="true" data-animation-type="flipInX">
                                <img src="assets/img/user-1.jpg" alt="Ryan Teller" />
                            </div>
                            <div class="info">
                                <h3 class="name">Ryan Teller</h3>
                                <div class="title text-theme">FOUNDER</div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>                     
                        </div> 
                    </div> -->
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                    <!-- <div class="col-md-4 col-sm-4">
                       <div class="team">             
                            <div class="image" data-animation="true" data-animation-type="flipInX">
                                <img src="assets/img/user-2.jpg" alt="Jonny Cash" />
                            </div>
                            <div class="info">
                                <h3 class="name">Johnny Cash</h3>
                                <div class="title text-theme">WEB DEVELOPER</div>
                                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>                     
                        </div>
                    </div> -->
                    <!-- end col-4 -->
                    <!-- begin col-4 -->
                   <!--  <div class="col-md-4 col-sm-4">
                        <div class="team">             
                            <div class="image" data-animation="true" data-animation-type="flipInX">
                                <img src="assets/img/user-3.jpg" alt="Mia Donovan" />
                            </div>
                            <div class="info">
                                <h3 class="name">Mia Donovan</h3>
                                <div class="title text-theme">WEB DESIGNER</div>
                                <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. </p>
                                <div class="social">
                                    <a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                    <a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                </div>
                            </div>                     
                        </div>
                    </div> -->
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #team -->
        
        <!-- begin #quote -->
        <div id="quote" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin <center></center>ontent-bg -->
            <div class="content-bg">
                <img src="<?php echo base_url('assets/img/quote-bg.jpg');?>" alt="Quote" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInLeft">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12 quote">
                        <i class="fa fa-quote-left"></i> Passion leads to design, design leads to performance, <br />
                        performance leads to <span class="text-theme">success</span>!  
                        <i class="fa fa-quote-right"></i>
                        <small>Sean Themes, Developer Teams in Malaysia</small>
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #quote -->
        
        <!-- beign #service -->
        <div id="jobseekers" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title text-info">JOBSEEKERS</h2>
                <p class="content-desc">
                    Your search for right job ends here.
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-12 col-sm-12">
                        <div class="service">
                            <div class="info">
                                <h4 class="title text-center">Our team of professionals are trained to give you the strategic support and advice which you will need in today's competitive jobs market. We help you evaluate opportunities on multiple parameters like :</h4>
                                <ul style="">
                                    <li><p class="desc">Job security & Desired Job Profile</p></li>
                                    <li><p class="desc"> Remuneration at market rate or above</p></li>
                                    <li><p class="desc"> High degree of independence</p></li>
                                    <li><p class="desc"> Interesting work</p></li>
                                    <li><p class="desc">Appreciation of effort </p></li>
                                </ul>
                            </div>
                            <div class="info ">    
                                <p class="desc"> We give 100% free services to jobseekers.</p>
                                <p class="desc">We maintain the highest level of confidentiality and no information about the candidates is released without prior permission. </p>
                                <p class="desc">We have tie-ups with some of the finest companies in the Corporate sector (Indian as well as MNCs). </p>
                                <p class="desc">A relationship with us can open new career avenues for you.</p>
                                <p class="desc">Check your resume for accuracy before you send it.</p>
                                <p class="desc">Your resume should be in ".doc" or ".txt" format only.</p>
                                <p class="desc">Please attach your recent scanned copy of Passport size photograph along with your CV.</p>
                                <p class="desc">Please Submit Your Resume </p>
                                <a href="#" class="btn btn-info">Submit Now</a> 
                            </div>
                            
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->
        
        <!-- begin #quote -->
        <div id="quote" class="content bg-black-darker has-bg" data-scrollview="true">
            <!-- begin <center></center>ontent-bg -->
            <div class="content-bg">
                <img src="<?php echo base_url('assets/img/quote-bg.jpg');?>" alt="Quote" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInLeft">
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-12 -->
                    <div class="col-md-12 quote">
                        <i class="fa fa-quote-left"></i> Passion leads to design, design leads to performance, <br />
                        performance leads to <span class="text-theme">success</span>!  
                        <i class="fa fa-quote-right"></i>
                        <small>Sean Themes, Developer Teams in Malaysia</small>
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #quote -->
        
        <!-- beign #service -->
        <div id="service" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title text-info">OUR SERVICES</h2>
                <p class="content-desc">
                    <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br />
                    sed bibendum turpis luctus eget -->
                </p>
                <!-- begin row -->
                <div class="row">
                    <!-- begin col-4 -->
                    <div class="col-md-12 col-sm-12">
                        <div class="service">
                            <div class="info text-center">
                                <h4 class="title">Form Filling Jobobs</h4>
                                <p class="desc">Online Form Filling Jobs is one of the easiest home Jobs one can have today. The form filling jobs, as the name itself indicates you’ve to purely fill the online forms with specific details given to you.Today internet has become one of the vast market for webmasters. Daily Millions of People visits websites and fill different types of forms like registration forms, job forms, etc.</p>
                                <p>It is a very simple work for all as you have to copy the matters provided by the companies which will you get through us and post them to different forms. You can work any time and from anywhere. We will transfer your payment online to your bank account Monthly (After 10 Days task Submission).</p>


                            </div>
                            <hr class="">
                            <div class="info m-t-30">  <!-- m-l-70 -->
                                <h4 class="title">Frequently Asked Questions</h4>
                                <ul>
                                    <li>
                                        <h5 class="title text-warning">What are the basic requirements to get started? </h5> 
                                        <p>Candidate should have a computer or else can work from any cyber cafe. Internet connection is required. Basic knowledge of operating computer, surfing internet, opening websites etc.</p> 
                                    </li>
                                    <li><h5 class="title text-warning">What exactly is this form filling job? </h5>
                                    <p>This form filling job is very easy. Daily we get millions of form filling orders from different companies. We give the list of all forms & details which you have to input in those forms. You can fill as many forms as you can. Normally it takes less than a 1 minute to fill each form. We also guide you how you can fill form easily.</p></li>
                                    <li><h5 class="title text-warning"> How long one form will be and how much time it will take to submit the form?</h5>
                                    <p>Each form will be of one page only, similar to what you fill regularly on internet like opening an E-mail account. Normally it takes at the most 1 Minute to fill a single form.</p> </li>
                                    <li><h5 class="title text-warning">What’s the procedure of doing form filling job? </h5>
                                    <p>The job is very simple, As soon as you get registered with us, within 1 hrs. your ID will be activated in my website under Form Filling Jobs section. You will get your job details along with full instructions on how to proceed on for the job and forms and their contents. You will get list of online forms, and details which you have to input in forms. Just open each form on internet browser, input the details as instructed by us & click the submit button.</p></li>
                                    <li><h5 class="title text-warning">Is it compulsory to submit a particular no. of forms in a day? </h5>
                                    <p>No. we are not concerned about how many forms you fill in a particular day, whether you fill ‘0’ or ‘100’ forms, it doesn’t matter.</p></li>
                                    <li><h5 class="title text-warning"> Is there any type of accuracy that’s going to counted or checked on each form I submit?</h5>
                                    <p>No. there is no accuracy, but each form should be submitted as per the details given from our side. If you submit forms with wrong details that form will not be counted.</p></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end col-4 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #about -->

        <!-- beign #action-box -->
        <div id="action-box" class="content has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="<?php echo base_url('assets/img/action-bg.jpg');?>" alt="Action" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInRight">
                <!-- begin row -->
                <div class="row action-box">
                    <!-- begin col-9 -->
                    <div class="col-md-12 col-sm-12 text-center">
                         
                        <h4><a href="<?php echo base_url('/Login') ?>"> CLICK HERE TO LOGIN</a></h4>
                    </div>
                    <!-- end col-9 -->
                    
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #action-box -->
        
        <!-- begin #work -->
        <div id="work" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInDown">
                <h2 class="content-title text-info">FORM FILLING PLANS </h2>
                <div class="col-sm-12 table-responsive">
                    <table class="table ">
                        <thead>
                            <tr class="info">
                                <th>Name of Plan</th>
                                <th>Registraion Fees</th>
                                <th>No. per day</th>
                                <th>Plans validity</th>
                                <th>You get monthly Salary </th>
                                <th>Apply Now Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="text-success">*Free Trial </span></td>
                                <td>Free Joining </td>
                                <td>Any form Per Day</td>
                                <td>2 Days</td>
                                <td>Rs.1 Per Form</td>
                                <td>Apply Now </td>
                            </tr>
                            <tr>
                                <td><span class="text-success">*Gold Plan </span></td>
                                <td>Rs 2950 </td>
                                <td>60 form Per Day</td>
                                <td>30 Days</td>
                                <td>Rs.5500 to 25000 </td>
                                <td>Apply Now </td>
                            </tr>
                        </tbody>
                  </table>
                </div>


                <div class="col-sm-12 table-responsive m-t-30">
                    <table class="table ">
                        <thead>
                            <tr class="info">
                                
                                <th>*Gold Plan salary Slab:</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                               
                                <td>1 to 500 Form = 0/- Each Form</td>
                            </tr>
                            <tr class="active">
                                
                                <td>501 to 1300 Form = 1/- Each Form</td>
                            </tr>
                            <tr>
                                <td>1301 to 1800 Form = 1.5/- Each Form</td>
                            </tr>
                            <tr>
                                <td>1801 to 2500 Form = 3/- Each Form</td>
                            </tr>
                            <tr>
                                <td>2501 to 3500 Form = 5/- Each Form</td>
                            </tr>
                            <tr>
                                <td>3501 onwords Form = 8/- Each Form</td>
                            </tr>
                            
                        </tbody>
                  </table>
                  <p>(minimum 1800 by Admin approved company give to another assignment next month)
                    2501+ But 30days = 5 Each Form</p>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #work -->
        
        <div id="action-box" class="content has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="<?php echo base_url('assets/img/action-bg.jpg');?>" alt="Action" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInRight">
                <!-- begin row -->
                <div class="row action-box">
                    <!-- begin col-9 -->
                    <div class="col-md-12 col-sm-12 text-center">
                        
                        <h4><a href="#"> CLICK HERE TO LOGIN</a></h4>
                        
                    </div>
                    <!-- end col-9 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>


        <!-- beign #service -->
        <div id="service" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title text-info">TERM AND CONDITIONS </h2>
                <p class="content-desc">
                    These Terms and Conditions exist for the benefit of uniquesolution.services and its members. uniquesolution.services, at its sole discretion, reserves the right to terminate the account of any member caught in violation of the Terms and Conditions without notice.
                </p>
                <ul>
                    <li>
                        <p>Registration fees are not refundable</p> 
                    </li>
                    <li><h5 class="title">Your Account will be terminated in the below mentioned cases</h5>
                    <p>If you do not log in for more than 7 days your account will be marked as inactive and it might get suspended due to inactivity</p>
                    <p>If your account remains suspended due to inactivity for more than 30 days your account will reset and after that it might get deleted as well.</p>
                    <p>If you are create fack account.</p>
                    </li>
                    <li><p>Members should not share password with others. Violation of this will lead to immediate termination of membership ID.</p> </li>
                    <li><p>You can Work 24x7 anytime anywhere.</p> </li>
                    <li><p>weekly or monthly Payment will be Released on working day</p> </li>
                    <li><p> Members must provide correct bank details like account name and account number with postal address of the branch and IFSC Code. Company will not be responsible for payment in case any wrong information provided by members.</p></li>
                    <li><p>Any doubt in reporting should be sent to info@uniquesolution.services</p></li>
                    <li><p>You are not allowed to create any more than 1 account.</p></li>
                    <li><p>In case we found you are create any more than 1 account then your membership ID will be immediately terminated without any prior notice.</p></li>
                    <li><p>"Terms and Conditions" can be changed as per company requirements at any time. If for any reason you do not accept the changes, you will need to contact us, and your account will be removed.</p></li>
                    <li><p>Before starting work please clear all your doubts later on dispute related to above mentioned points will not be entertained.</p></li>
                   
                </ul>
            </div>
        </div>
        <!-- end #about -->
        
        <div id="action-box" class="content has-bg" data-scrollview="true">
            <!-- begin content-bg -->
            <div class="content-bg">
                <img src="<?php echo base_url('assets/img/action-bg.jpg');?>" alt="Action" />
            </div>
            <!-- end content-bg -->
            <!-- begin container -->
            <div class="container" data-animation="true" data-animation-type="fadeInRight">
                <!-- begin row -->
                <div class="row action-box">
                    <!-- begin col-9 -->
                    <div class="col-md-12 col-sm-12 text-center">
                        
                        <h4><a href="#"> CLICK HERE TO LOGIN</a></h4>
                        
                    </div>
                    <!-- end col-9 -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>


        <!-- beign #service -->
        <div id="employer" class="content" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title text-info">Employer </h2>
                <h4 class="text-center" >About Us</h4>
                <p class="text-center">
                    We are professional consultants in the field of Personnel Manpower recruitments since 2011. We have an excellent data bank cutting across all level, consisting of experienced personnel seeking a change.</p>
                <p class="text-center">As you are aware, it involves time, money and energy for employers to recruit suitable candidates through advertisements. Once you engage us as your retainer, all you have to do is to spell your requirements and specifications and we would do the rest.</p>
                <p class="text-center">We assure our best services at all times !!!</p>
            </div>
        </div>
        <!-- end #about -->

         <!-- begin #contact -->
        <div id="contact" class="content bg-silver-lighter" data-scrollview="true">
            <!-- begin container -->
            <div class="container">
                <h2 class="content-title text-info">CONTACT US </h2>
                <p class="content-desc">
                   Want to chat? Send us a message. We'd love to hear from you!
                </p>
                <!-- begin row -->
                <div class="row " style="padding-top:30px;">
                    <!-- begin col-6 -->
                    <div class="col-md-6 form-col" data-animation="true" data-animation-type="fadeInRight">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-3">Name <span class="text-theme">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email <span class="text-theme">*</span></label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Message <span class="text-theme">*</span></label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3"></label>
                                <div class="col-md-9 text-left">
                                    <button type="submit" class="btn btn-theme btn-block">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- end col-6 -->

                    <!-- begin col-6 -->
                    <div class="col-md-6" data-animation="true" data-animation-type="fadeInLeft">
                        <!-- <h3>If you have a project you would like to discuss, get in touch with us.</h3>
                        <p>
                            Morbi interdum mollis sapien. Sed ac risus. Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero dolor a purus.
                        </p> -->
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                        <p>
                            <strong>Office no-163, Mayur trade center,</strong><br />
                            Mumbai-Pune Road,Chinchwad Station<br />
                            Chinchwad-19,Pune.<br/>
                            P: +91 9922744404<br />
                        </p>
                        <p>
                            <!-- <span class="phone">+11 (0) 123 456 78</span><br />
                            <a href="mailto:hello@emailaddress.com">seanthemes@support.com</a> -->
                        </p>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end #contact -->
        
        <!-- begin #footer -->
        <div id="footer" class="footer">
            <div class="container">
                <p>Copyright &copy; 2016 <a href="#">Max Pro</a> Created by<a href="#"> CWD Solutions.</a></p>
                <p class="social-list">
                    <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                    <a href="#"><i class="fa fa-instagram fa-fw"></i></a>
                    <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                    <a href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                </p>
            </div>
        </div>
        <!-- end #footer -->
        
        
    </div>
    <!-- end #page-container -->
    
    <!-- ================== BEGIN BASE JS ================== -->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery-1.9.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/jquery/jquery-migrate-1.1.0.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
    <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="<?php echo base_url('assets/plugins/jquery-cookie/jquery.cookie.js');?>"></script>
    <script src="<?php echo base_url('assets/plugins/scrollMonitor/scrollMonitor.js');?>"></script>
    <script src="<?php echo base_url('assets/js/apps.min1.js');?>"></script>
    <!-- ================== END BASE JS ================== -->
    
    <script>    
        $(document).ready(function() {
            App.init();
        });
    </script>
</body>
</html>
