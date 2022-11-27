<?php

//login.php

include('class/Appointment.php');

$object = new Appointment;

?>

<head>
<link href="css/bootstrap.css" rel="stylesheet">

<link href="css/mainstyle.css" rel="stylesheet">

<link href="css/responsive.css" rel="stylesheet">
<!--Color Switcher Mockup-->

<link href="css/color-switcher-design.css" rel="stylesheet">
</head>

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



					<?php include('nav.php'); ?>

				</nav>

				<!-- Main Menu End-->



				<!-- Outer box -->

				<div class="outer-box">

					<!--Search Box-->

					<div class="search-box-btn"><span class="flaticon-search"></span></div>



					<!-- Button Box -->

					<div class="btn-box">

						<a href="#" class="theme-btn btn-style-one"><span class="btn-title">Emergency First Aid</span></a>

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

			<div class="nav-logo"><a href="index.html"><img src="images/logo-2.png" alt="" title=""></a></div>

			

			<ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>

		</nav>

	</div><!-- End Mobile Menu -->

</header>

<!--End Main Header -->

</div>
<div style="margin-top: 20px">

<div class="container">
	<div class="row justify-content-md-center">
		<div class="col col-md-4">
			<?php
			if(isset($_SESSION["success_message"]))
			{
				echo $_SESSION["success_message"];
				unset($_SESSION["success_message"]);
			}
			?>
			<span id="message"></span>
			<div class="card">
				<div class="card-header">Login</div>
				<div class="card-body">
					<form method="post" id="patient_login_form">
						<div class="form-group">
							<label>Patient Email Address</label>
							<input type="text" name="patient_email_address" id="patient_email_address" class="form-control" required autofocus data-parsley-type="email" data-parsley-trigger="keyup" placeholder="Email Address" />
						</div>
						<div class="form-group">
							<label>Patient Password</label>
							<input type="password" name="patient_password" id="patient_password" class="form-control" required  data-parsley-trigger="keyup" placeholder="Password" />
						</div>
						<div class="form-group text-center">
							<input type="hidden" name="action" value="patient_login" />
							<input type="submit" name="patient_login_button" id="patient_login_button" class="btn btn-primary" value="Login" />
						</div>

						<div class="form-group text-center">
							<p><a href="register.php">Register</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
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

<script>

$(document).ready(function(){

	$('#patient_login_form').parsley();

	$('#patient_login_form').on('submit', function(event){

		event.preventDefault();

		if($('#patient_login_form').parsley().isValid())
		{
			$.ajax({

				url:"action.php",
				method:"POST",
				data:$(this).serialize(),
				dataType:"json",
				beforeSend:function()
				{
					$('#patient_login_button').attr('disabled', 'disabled');
				},
				success:function(data)
				{
					$('#patient_login_button').attr('disabled', false);

					if(data.error != '')
					{
						$('#message').html(data.error);
					}
					else
					{
						window.location.href="dashboard.php";
					}
				}
			});
		}

	});

});



</script>

<?php include "footer.php"?>