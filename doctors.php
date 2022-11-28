<?php
include('class/Appointment.php');
$object = new Appointment;

if(isset($_SESSION['patient_id']))
{
	header('location:dashboard.php');
}
$object->query = "SELECT doctor_expert_in, count(doctor_expert_in) as doctor_in_department FROM `doctor_table` GROUP by doctor_expert_in";
$result = $object->get_result();

?>

<!DOCTYPE html>
 <html lang="en">

<!-- Mirrored from expert-themes.com/html/eventrox/speakers.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Jun 2021 22:49:33 GMT -->
<head>
<meta charset="utf-8">
<title>Doctors</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/mainstyle.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	<!-- Header span -->

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->

    <header class="main-header header-style-two">

        <div class="main-box">

            <div class="auto-container clearfix">

                

                

                <!--Nav Box-->

                <div class="nav-outer clearfix">

                    <!--Mobile Navigation Toggler-->

                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>

                    <!-- Main Menu -->

                    <nav class="main-menu navbar-expand-md navbar-light">

                        <div class="navbar-header">

                            <!-- Togg le Button -->      

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                                <span class="icon flaticon-menu-button"></span>

                            </button>

                        </div>



                        <?php include('nav.php');?>

                    </nav>

                    <!-- Main Menu End-->



                    <!-- Outer box -->

                    <div class="outer-box">

                        <!--Search Box-->

                        <div class="search-box-btn"><span class="flaticon-search"></span></div>



                        <!-- Button Box -->

                        <div class="btn-box">

                            <a href="https://testing.ashik.pw/createMeeting" class="theme-btn btn-style-one"><span class="btn-title">Emergency First Aid</span></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!-- Mobile Menu  -->

        <div class="mobile-menu">

            <div class="menu-backdrop"></div>

            <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

            

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->

            <nav class="menu-box">

                <div class="nav-logo"><a href="index.php"><img src="images/logo-2.png" alt="" title=""></a></div>

                

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>

            </nav>

        </div><!-- End Mobile Menu -->

    </header>

    <!--End Main Header -->


    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/5.jpg);">
        <div class="auto-container">
            <h1>Doctors</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li>Doctors</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <?php
        foreach($result as $row)
        {
            
            for($i=0; $i<strlen($row['doctor_in_department']); $i++){?>
                <!-- Speakers Section -->
                <section class="speakers-section-two">
                    <div class="anim-icons">
                        <span class="icon icon-circle-4 wow zoomIn"></span>
                        <span class="icon icon-circle-3 wow zoomIn"></span>
                    </div>
            
                    <div class="auto-container">
                        <div class="sec-title text-center">
                            <span class="title">Doctors </span>
                            <h2><?php echo $object->GetDepartmentName($row['doctor_expert_in']) ?> </h2>
                        </div>
            
                        <div class="row">
                            <?php 
                                $data = $object->GetDoctorListByDepartment($row['doctor_expert_in']);
                                $package = json_decode($data, true);
                                foreach($package as $datarow)
                                {
                                echo '
                                <!-- Speaker Block -->
                                    <div class="speaker-block-two col-xl-3 col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                                        <div class="inner-box">
                                            <div class="info-box">
                                                <h4 class="name"><a href="speakers-detail.html">'.$datarow['doctor_name'].'</a></h4>
                                                <span class="designation">'.$datarow['doctor_degree'].'</span>
                                            </div>
                                            <div class="image-box">
                                                <figure class="image"><a href="speakers-detail.html"><img src="'.$datarow['doctor_profile_image'].'" alt=""></a></figure> 
                                            </div>
                                            <div class="social-box">                            
                                                <ul class="social-links social-icon-colored">
                                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                                    <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                 ?>
                        </div>
                    </div>
                </section>
                <!-- End Speakers Section -->
              <?php  $object->GetDepartmentName($row['doctor_expert_in']);
            }
        }
    ?>


    


    <!-- Main Footer -->

    <footer class="main-footer">

        <!--Widgets Section-->

        <div class="widgets-section">

            <div class="auto-container">

                <div class="row">

                    <!--Big Column-->

                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">

                        <div class="row">

                            <!--Footer Column-->

                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">

                                <div class="footer-widget about-widget">

                                    <div class="logo">

                                   

                                    </div>

                                    <div class="text">

                                        <p>Bangladesh University of Business and Technology or BUBT is a private university in Bangladesh, located in Mirpur, Dhaka, Bangladesh. The university was established under the Private University Act 1992. BUBT is regulated by the Bangladesh University Grants Commission.</p>           

                                    </div>

                                    <ul class="social-icon-one social-icon-colored">

                                    

                                    </ul>

                                </div>

                            </div>



                            <!--Footer Column-->

                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">

                                <div class="footer-widget useful-links">

                                    <h2 class="widget-title">Useful Links</h2>

                                    <ul class="user-links">

                                        <li><a href="index-2.html">Home</a></li>

                                        <li><a href="about-us.html">About Us</a></li>

                                        <li><a href="services.html">Doctors</a></li>

                                        <li><a href="projects.html">Appoinment Schedule</a></li>

                                        <li><a href="blog.html">Doctors Blogs</a></li>

                                        <li><a href="login.php">Log in / Register </a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!--Big Column-->

                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">

                        <div class="row">

                            <!--Footer Column-->

                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">

                                <!--Footer Column-->

                                <div class="footer-widget contact-widget">

                                    <h2 class="widget-title">Contact Us</h2>

                                     <!--Footer Column-->

                                    <div class="widget-content">

                                        <ul class="contact-list">

                                            <li>

                                                <span class="icon flaticon-clock"></span>

                                                <div class="text">Sat - Fri: 09:00 - 22:00</div>

                                            </li>



                                            <li>

                                                <span class="icon flaticon-phone"></span>

                                                <div class="text"><a href="tel:+1-345-5678-77">+880100000000</a></div>

                                            </li>



                                            <li>

                                                <span class="icon flaticon-paper-plane"></span>

                                                <div class="text"><a href="mailto:support@example.com">support@onlinedoctorsportal.com</a></div>

                                            </li>



                                            <li>

                                                <span class="icon flaticon-worldwide"></span>

                                                <div class="text">Rupnagar, Mirpur 2<br> Dhaka 1216</div>

                                            </li>

                                        </ul>

                                    </div>

                                </div>

                            </div>



                            <!--Footer Column-->

                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">

                                

                                

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>



        <!--Footer Bottom-->

        <div class="footer-bottom">                    

            <div class="auto-container">

                <div class="inner-container clearfix">

                    <div class="copyright-text">

                        <p>© Copyright 2022 All Rights Reserved by <a href="index.html">Online Doctors Portal</a></p>

                    </div>

                </div>

            </div>

        </div>

    </footer>

    <!-- End Footer -->



</div>

<!--End pagewrapper-->





<!--Search Popup-->

<div id="search-popup" class="search-popup">

	<div class="close-search theme-btn"><span class="fas fa-window-close"></span></div>

	<div class="popup-inner">

		<div class="overlay-layer"></div>

    	<div class="search-form">


            

            <br>

            <h3>Recent Search Keywords</h3>

            <ul class="recent-searches">

                <li><a href="#">Medicine</a></li>

                <li><a href="#">Neurology</a></li>

                <li><a href="#">Psyciatrict</a></li>

                <li><a href="#">Dental</a></li>

                <li><a href="#">Surgery</a></li>

            </ul>

        

        </div>

        

    </div>

</div>



<!--Scroll to top-->

<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="js/jquery.js"></script>

<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery-ui.js"></script>

<script src="js/jquery.fancybox.js"></script>

<script src="js/appear.js"></script>

<script src="js/owl.js"></script>

<script src="js/jquery.countdown.js"></script>

<script src="js/wow.js"></script>

<script src="js/script.js"></script>

<!-- Color Setting -->

<script src="js/color-settings.js"></script>

</body>


<!--     -->
</html>