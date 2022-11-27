<?php
include('class/Appointment.php');
$object = new Appointment;

if(isset($_SESSION['patient_id']))
{
	header('location:dashboard.php');
}
$object->query = "
SELECT * FROM doctor_schedule_table 
INNER JOIN doctor_table 
ON doctor_table.doctor_id = doctor_schedule_table.doctor_id
INNER JOIN doctor_department
ON doctor_department.department_id = doctor_table.doctor_expert_in
WHERE doctor_schedule_table.doctor_schedule_date >= '%%' 
AND doctor_schedule_table.doctor_schedule_status = 'Active' 
AND doctor_table.doctor_status = 'Active' 
ORDER BY doctor_schedule_table.doctor_schedule_date ASC
";
$result = $object->get_result();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Homepage</title>
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
  </head>
  <body>
    <div class="page-wrapper">
      <!-- Preloader -->
      <div class="preloader"></div>
      <!-- Header span -->
      <!-- Main Header-->
      <header class="main-header">
        <div class="main-box">
          <div class="auto-container clearfix">
            <!--Nav Box-->
            <div class="nav-outer clearfix">
              <!--Mobile Navigation Toggler-->
              <div class="mobile-nav-toggler">
                <span class="icon flaticon-menu"></span>
              </div>
              <!-- Main Menu -->
              <nav class="main-menu navbar-expand-md navbar-light">
                <div class="navbar-header">
                  <!-- Togg le Button -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon flaticon-menu-button"></span>
                  </button>
                </div>
                <?php include('nav.php'); ?>
              </nav>
              <!-- Main Menu End-->
              <!-- Outer box -->
              <div class="outer-box">
                <!--Search Box-->
                <div class="search-box-outer">
                  <div class="search-box-btn">
                    <span class="flaticon-search"></span>
                  </div>
                </div>
                <!-- Button Box -->
                <div class="btn-box">
                  <a href="#" class="theme-btn btn-style-one">
                    <span class="btn-title">Emergency First Aid</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
          <div class="menu-backdrop"></div>
          <div class="close-btn">
            <span class="icon flaticon-cancel-1"></span>
          </div>
          <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
          <nav class="menu-box">
            <div class="nav-logo">
              <a href="index.html">
                <img src="images/logo-2.png" alt="" title="">
              </a>
            </div>
            <ul class="navigation clearfix">
              <!--Keep This Empty / Menu will come through Javascript-->
            </ul>
          </nav>
        </div>
        <!-- End Mobile Menu -->
      </header>
      <!--End Main Header -->
      <!-- Banner Section -->
      <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
          <!-- Slide Item -->
          <div class="slide-item" style="background-image: url(images/main-slider/1.jpg);">
            <div class="auto-container">
              <div class="content-box">
                <h2> Contactless Consultency </h2>
                <ul class="info-list"></ul>
                <div class="btn-box">
                  <a href="schedule.html" class="theme-btn btn-style-two">
                    <span class="btn-title">Book Appoinment Now</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide Item -->
          <div class="slide-item" style="background-image: url(images/main-slider/2.jpg);">
            <div class="auto-container">
              <div class="content-box">
                <h2> Specialist Doctors</h2>
                <ul class="info-list"></ul>
                <div class="btn-box">
                  <a href="schedule.html" class="theme-btn btn-style-two">
                    <span class="btn-title">Book appointment Now</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide Item -->
          <div class="slide-item" style="background-image: url(images/main-slider/3.jpg);">
            <div class="auto-container">
              <div class="content-box">
                <h2> Easy Appoinment booking </h2>
                <ul class="info-list"></ul>
                <div class="btn-box">
                  <a href="schedule.html" class="theme-btn btn-style-two">
                    <span class="btn-title">Book appointment Now</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide Item -->
          <div class="slide-item" style="background-image: url(images/main-slider/4.jpg);">
            <div class="auto-container">
              <div class="content-box">
                <h2> Consult when you need </h2>
                <ul class="info-list"></ul>
                <div class="btn-box">
                  <a href="schedule.html" class="theme-btn btn-style-two">
                    <span class="btn-title">Book appointment Now</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Banner Section -->
      <!-- About Section -->
      <section class="about-section">
        <div class="anim-icons full-width">
          <span class="icon icon-circle-blue wow fadeIn"></span>
          <span class="icon icon-dots wow fadeInleft"></span>
          <span class="icon icon-circle-1 wow zoomIn"></span>
        </div>
        <div class="auto-container">
          <div class="row">
            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
              <div class="inner-column">
                <div class="sec-title">
                  <span class="title">Online Doctors Portal</span>
                  <h2>Welcome to BUBT Online Doctors portal System</h2>
                  <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd idunt labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat.</div>
                </div>
                <ul class="list-style-one">
                  <li>Multiple Announcements before schedule appoinment .</li>
                  <li>Contactless Consultency for infectious Patient</li>
                  <li>Specialized Doctors from various departments</li>
                  <li>Easy appoinment booking system</li>
                </ul>
                <div class="btn-box">
                  <a href="login.php" class="theme-btn btn-style-three">
                    <span class="btn-title">Register Now</span>
                  </a>
                </div>
              </div>
            </div>
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
              <div class="image-box">
                <figure class="image wow fadeIn">
                  <img src="images/resource/about-img-1.jpg" alt="">
                </figure>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End About Section -->
      <!-- Features Section Two -->
      <section class="features-section-two">
        <div class="auto-container">
          <div class="anim-icons">
            <span class="icon twist-line-1 wow zoomIn"></span>
            <span class="icon twist-line-2 wow zoomIn" data-wow-delay="1s"></span>
            <span class="icon twist-line-3 wow zoomIn" data-wow-delay="2s"></span>
          </div>
          <div class="row">
            <!-- Title Block -->
            <div class="title-block col-lg-4 col-md-12 col-sm-12 wow fadeInUp">
              <div class="inner-box">
                <div class="sec-title">
                  <span class="title">Features</span>
                  <h2>Our Feature</h2>
                </div>
              </div>
            </div>
            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="icon flaticon-lecture"></span>
                </div>
                <h4>
                  <a href="about.html">Specialist Doctors</a>
                </h4>
                <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
              </div>
            </div>
            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="icon flaticon-search"></span>
                </div>
                <h4>
                  <a href="about.html">Experience</a>
                </h4>
                <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
              </div>
            </div>
            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="icon flaticon-diamond-1"></span>
                </div>
                <h4>
                  <a href="about.html">Reasonable Fees</a>
                </h4>
                <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
              </div>
            </div>
            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="icon flaticon-success"></span>
                </div>
                <h4>
                  <a href="about.html">Happy Patients</a>
                </h4>
                <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
              </div>
            </div>
            <!-- Feature Block -->
            <div class="feature-block-two col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
              <div class="inner-box">
                <div class="icon-box">
                  <span class="icon flaticon-employee"></span>
                </div>
                <h4>
                  <a href="about.html"> Team of Specialist </a>
                </h4>
                <div class="text">Dolor sit amet consectetur elit sed do eiusmod tempor incd.</div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Features Section -->
      <!-- Fun Fact Section -->
      <section class="fun-fact-section">
        <div class="auto-container">
          <div class="fact-counter">
            <div class="row clearfix">
              <!--Column-->
              <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                <div class="count-box">
                  <span class="icon icon_headphones"></span>
                  <span class="count-text" data-speed="3000" data-stop="121">0</span>
                  <h4 class="counter-title">First Aid Provided</h4>
                </div>
              </div>
              <!--Column-->
              <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="count-box">
                  <span class="icon icon_ribbon_alt"></span>
                  <span class="count-text" data-speed="3000" data-stop="2564">0</span>
                  <h4 class="counter-title">Patient treated</h4>
                </div>
              </div>
              <!--Column-->
              <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="count-box">
                  <span class="icon icon_like"></span>
                  <span class="count-text" data-speed="3000" data-stop="65">0</span>
                  <h4 class="counter-title">Specialist Doctors</h4>
                </div>
              </div>
              <!--Column-->
              <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                <div class="count-box">
                  <span class="icon icon_book_alt"></span>
                  <span class="count-text" data-speed="3000" data-stop="38">6</span>
                  <h4 class="counter-title">Departments</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Fun Fact Section -->
      <!-- schedule Section -->
      <section class="schedule-section">
        <div class="anim-icons">
          <span class="icon icon-circle-4 wow zoomIn"></span>
          <span class="icon icon-circle-3 wow zoomIn"></span>
        </div>
        <div class="auto-container">
          <div class="sec-title text-center">
            <span class="title">Doctors' </span>
            <h2>Schedule Plan</h2>
          </div>
          <div class="schedule-tabs tabs-box">
            <div class="btns-box">
				<ul class="tab-buttons clearfix">
					<?php
						// Get Days for next 7 days
						$days = array();
						//get today
						$today = date('d');
						// get week name
						$week = date('D');

						for ($i = 0; $i < 6; $i++) {

							echo '
							<li class="tab-btn active-btn" data-tab="#tab-'.$i.'">
								<span class="day">Day 0'.$i.'</span>
								<span class="date">'.(($i == 0)? $today : date('d', strtotime('+' . $i . ' days'))).'</span>
								<span class="month">'.(($i == 0)? $week : date('D', strtotime('+' . $i . ' days'))).'</span>
							</li>
							';
							$days[] = date('Y-m-d', strtotime('+' . $i . ' days'));
						}
						?>
				</ul>
              <!--Tabs Box-->
            </div>
            <div class="tabs-content">

              <!--Tab-->

					<?php
						$j = 0;
						for ($i = 0; $i < 6; $i++) { ?>
							<div class="tab <?php if($i == 0){ echo 'active-tab animated fadeIn';}else{echo '';} ?>" id="tab-<?php echo $i; ?>">
							<div class="schedule-timeline">
							<?php	foreach($result as $row)
								{
										if($row['doctor_schedule_date'] == date('Y-m-d')){
												$count = $j++;
												if($j % 2 == 1){
													echo '
														<!-- schedule Block -->
														<div class="schedule-block">
															<div class="inner-box">
															<div class="inner">
																<div class="date">'.$row["doctor_schedule_start_time"].' <br> '.$row["doctor_schedule_end_time"].' </div>
																<div class="speaker-info">
																<figure class="thumb">
																	<img src="'.$row["doctor_profile_image"].'" alt="">
																</figure>
																<h5 class="name">'.$row["doctor_name"].'</h5>
																<span class="designation">Professor</span>
																</div>
																<h4>
																<a href="#">'.$row["department_name"].'</a>
																</h4>
																<div class="text">'.$row["doctor_degree"].'</div>
																<div class="btn-box">
																<a href="javascript:{}" name="get_appointment" class="theme-btn get_appointment" data-id="'.$row["doctor_schedule_id"].'">Book Appoinment</a>
																</div>
															</div>
															</div>
														</div>';
												}else{
													echo '
													<!-- schedule Block -->
													<div class="schedule-block even">
														<div class="inner-box">
														<div class="inner">
															<div class="date">'.$row["doctor_schedule_start_time"].' <br> '.$row["doctor_schedule_end_time"].' </div>
															<div class="speaker-info">
															<figure class="thumb">
																<img src="'.$row["doctor_profile_image"].'" alt="">
															</figure>
															<h5 class="name">'.$row["doctor_name"].'</h5>
															<span class="designation">Professor</span>
															</div>
															<h4>
															<a href="#">'.$row["department_name"].'</a>
															</h4>
															<div class="text">'.$row["doctor_degree"].'</div>
															<div class="btn-box">
															<a href="javascript:{}" name="get_appointment" class="theme-btn get_appointment" data-id="'.$row["doctor_schedule_id"].'">Book Appoinment</a>
															</div>
														</div>
														</div>
													</div>';

												}
										}
								
									
								}
							?>
							</div>
							</div>
						<?php } 
					?>
            </div>
          </div>
        </div>
      </section>
      <!--End schedule Section -->
      <!-- Pricing Section -->
      <section class="pricing-section">
        <div class="anim-icons">
          <span class="icon icon-circle-green wow fadeIn"></span>
          <span class="icon icon-circle-blue wow fadeIn"></span>
          <span class="icon icon-circle-pink wow fadeIn"></span>
        </div>
        <div class="auto-container">
          <div class="sec-title text-center">
            <span class="title">Get Well Soon</span>
            <h2> Average Consultency Fees </h2>
          </div>
          <div class="outer-box">
            <div class="row">
              <!-- Pricing Block -->
              <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                <div class="inner-box">
                  <div class="icon-box">
                    <div class="icon-outer">
                      <span class="icon flaticon-paper-plane"></span>
                    </div>
                  </div>
                  <div class="price-box">
                    <div class="title"> Medical Officer </div>
                    <h4 class="price">BDT 400</h4>
                  </div>
                  <ul class="features">
                    <li class="true">In person Consultency</li>
                    <li class="true">Contactless Consultency</li>
                    <li class="true">Emergency Support</li>
                  </ul>
                  <div class="btn-box">
                    <a href="#" class="theme-btn">Book appointment</a>
                  </div>
                </div>
              </div>
              <!-- Pricing Block -->
              <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                <div class="inner-box">
                  <div class="icon-box">
                    <div class="icon-outer">
                      <span class="icon flaticon-diamond-1"></span>
                    </div>
                  </div>
                  <div class="price-box">
                    <div class="title">Assistant/Associate Professor</div>
                    <h4 class="price">BDT 600-800</h4>
                  </div>
                  <ul class="features">
                    <li class="true">In person Consultency</li>
                    <li class="true">Contactless Consultency</li>
                    <li class="true">Emergency Support</li>
                  </ul>
                  <div class="btn-box">
                    <a href="schedule.html" class="theme-btn">Book Appoinment</a>
                  </div>
                </div>
              </div>
              <!-- Pricing Block -->
              <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                <div class="inner-box">
                  <div class="icon-box">
                    <div class="icon-outer">
                      <span class="icon flaticon-rocket-ship"></span>
                    </div>
                  </div>
                  <div class="price-box">
                    <div class="title">Professor </div>
                    <h4 class="price">BDT 1000</h4>
                  </div>
                  <ul class="features">
                    <li class="true">In person Consultency</li>
                    <li class="true">Contactless Consultency</li>
                    <li class="true">Emergency Support</li>
                  </ul>
                  <div class="btn-box">
                    <a href="schedule.html" class="theme-btn">Book appoinment</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Pricing Section -->
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
                      <div class="logo"></div>
                      <div class="text">
                        <p>Bangladesh University of Business and Technology or BUBT is a private university in Bangladesh, located in Mirpur, Dhaka, Bangladesh. The university was established under the Private University Act 1992. BUBT is regulated by the Bangladesh University Grants Commission.</p>
                      </div>
                      <ul class="social-icon-one social-icon-colored"></ul>
                    </div>
                  </div>
                  <!--Footer Column-->
                  <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                    <div class="footer-widget useful-links">
                      <h2 class="widget-title">Useful Links</h2>
                      <ul class="user-links">
                        <li>
                          <a href="index-2.html">Home</a>
                        </li>
                        <li>
                          <a href="about-us.html">About Us</a>
                        </li>
                        <li>
                          <a href="services.html">Doctors</a>
                        </li>
                        <li>
                          <a href="projects.html">Appoinment Schedule</a>
                        </li>
                        <li>
                          <a href="blog.html">Doctors Blogs</a>
                        </li>
                        <li>
                          <a href="contact.html">Log in / Register </a>
                        </li>
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
                            <div class="text">
                              <a href="tel:+1-345-5678-77">+880100000000</a>
                            </div>
                          </li>
                          <li>
                            <span class="icon flaticon-paper-plane"></span>
                            <div class="text">
                              <a href="mailto:support@example.com">support@onlinedoctorsportal.com</a>
                            </div>
                          </li>
                          <li>
                            <span class="icon flaticon-worldwide"></span>
                            <div class="text">Rupnagar, Mirpur 2 <br> Dhaka 1216 </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--Footer Column-->
                  <div class="footer-column col-lg-6 col-md-6 col-sm-12"></div>
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
                <p>© Copyright 2022 All Rights Reserved by <a href="index.html">Online Doctors Portal</a>
                </p>
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
      <div class="close-search theme-btn">
        <span class="fas fa-window-close"></span>
      </div>
      <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
          <br>
          <h3>Recent Search Keywords</h3>
          <ul class="recent-searches">
            <li>
              <a href="#">Medicine</a>
            </li>
            <li>
              <a href="#">Neurology</a>
            </li>
            <li>
              <a href="#">Psyciatrict</a>
            </li>
            <li>
              <a href="#">Dental</a>
            </li>
            <li>
              <a href="#">Surgery</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html">
      <span class="fa fa-angle-double-up"></span>
    </div>
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
	<script>

			$(document).ready(function(){
				$(document).on('click', '.get_appointment', function(){
					var action = 'check_login';
					var doctor_schedule_id = $(this).data('id');
					$.ajax({
						url:"action.php",
						method:"POST",
						data:{action:action, doctor_schedule_id:doctor_schedule_id},
						success:function(data)
						{
							window.location.href=data;
						}
					})
				});
			});

	</script>
  </body>
</html>