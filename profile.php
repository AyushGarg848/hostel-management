<?php
		  require 'includes/config.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>User Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Consultancy Profile Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- js -->
<script src="web_profile/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="web_profile/js/sliding.form.js"></script>
<!-- //js -->
<link href="web_profile/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="web_profile/css/font-awesome.min.css" />
<link rel="stylesheet" href="web_profile/css/smoothbox.css" type='text/css' media="all" />
<link href="//fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<script type="application/x-javascript">
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>
<!--// Meta tag Keywords -->

<link href="web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">

<!-- css files -->
<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- testimonials css -->
<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
<!-- //testimonials css -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<!-- //web-fonts -->


</head>
<body style="background-color: white !important;">
	<!-- banner -->
		<div class="banner" id="home">
			<div class="cd-radial-slider-wrapper">

	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<img width="200px" height="120px" src="https://almashines.s3.dualstack.ap-southeast-1.amazonaws.com/assets/images/institutes/logo/170x170/635.jpg?v=1602772429" alt="" style="width: 275px !important; height: 100px !important;">

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="services.php">Hostels</a>
						</li>


						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="dropdown nav-item">
								<li class="nav-item active">
									<a href="includes/logout.inc.php" class="nav-link">Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>

			</nav>
		</div>
	</header>
	<!--Header-->
<br><br><br><br><br>
	<div class="main">
		<div id="navigation" style="display:none;" class="w3_agile">
			<ul>


			</ul>
		</div>
		<div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
			<div id="steps" style="margin:0 auto;" class="agileits w3_steps">
				<form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy">
					<fieldset class="step agileinfo w3ls_fancy_step">
						<legend>Personal Info</legend>
						<div class="abt-agile">
							<div class="abt-agile-right" style="width: 600px !important;">

								<h3><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></h3>
								<h5>Student</h5>
								<ul class="address">
									<li>
										<ul class="address-text">
											<li><b>USN </b></li>
											<li>: <?php echo $_SESSION['roll']; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Phone Number </b></li>
											<li>: <?php echo $_SESSION['mob_no']; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Department </b></li>
											<li>: <?php echo $_SESSION['department']; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Year of Study </b></li>
											<li>: <?php echo $_SESSION['year_of_study']; ?></li>
										</ul>
									</li>
								</ul>
							</div>
								<div class="clear"></div>
						</div>
				</fieldset>
				<fieldset class="step agileinfo w3ls_fancy_step">
					<legend>Hostel Info</legend>
					<div class="abt-agile">
						<div class="abt-agile-left-hostel">
						</div>
						<div class="abt-agile-right">

							<h3><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></h3>
							<h5>Student</h5>
							<ul class="address">
								<li>
									<ul class="address-text">
										<li><b>HOSTEL </b></li>
										<?php
											$hostelId = $_SESSION['hostel_id'];
											if($hostelId == NULL){
												$hostelName = 'None';
											}
											else {
												$sql = "SELECT * FROM Hostel WHERE Hostel_id = '$hostelId'";
												$result = mysqli_query($conn, $sql);
												if($row = mysqli_fetch_assoc($result)){
													$hostelName = $row['Hostel_name'];
												}
												else {
													echo "<script type='text/javascript'>alert('Foreign Key Error-hostenName!!')</script>";
												}
											}
										 ?>


										<li>: <?php echo $hostelName; ?></li>
									</ul>
								</li>
								<li>
									<ul class="address-text">
										<li><b>ROOM NO </b></li>
										<?php
											$roomId = $_SESSION['room_id'];
											if($hostelId == NULL || $roomId == NULL){
												$roomNo = 'None';
											}
											else {
												$sql = "SELECT * FROM Room WHERE Room_id = '$roomId'";
												$result = mysqli_query($conn, $sql);
												if($row = mysqli_fetch_assoc($result)){
													$roomNo = $row['Room_No'];
												}
												else {
													echo "<script type='text/javascript'>alert('Foreign Key Error-roomNo!!')</script>";
												}
											}
										 ?>
										<li>: <?php echo $roomNo; ?></li>
									</ul>
								</li>
							</ul>
						</div>
							<div class="clear"></div>
					</div>
			</fieldset>
					<fieldset class="step agileinfo w3ls_fancy_step">
						<legend>Hostel Manager Info</legend>
						<div class="abt-agile">
							<div class="abt-agile-left">
							</div>
							<div class="abt-agile-right">
								<?php
									$Hid = $_SESSION['hostel_id'];
									$sql1 = "SELECT * FROM Hostel_Manager WHERE Hostel_id = '$Hid'";
									$result1 = mysqli_query($conn, $sql1);
									if($row1 = mysqli_fetch_assoc($result1)){
										$hmfname = $row1['Fname'];
										$hmlname = $row1['Lname'];
										$hmMob  = $row1['Mob_no'];
										$hmemail = $row1['Email'];
									}
									else {
										$hmfname = 'none';
										$hmlname = 'none';
										$hmMob  = 'none';
										$hmemail = 'none';
									}
								 ?>
								<h3><?php echo $hmfname." ".$hmlname; ?></h3>
								<h5>Admin</h5>
								<ul class="address">
									<li>
										<ul class="address-text">
											<li><b>Phone Number </b></li>
											<li>: <?php echo $hmMob; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Email </b></li>
											<li>: <?php echo $hmemail; ?></li>
										</ul>
									</li>
								</ul>
							</div>
								<div class="clear"></div>
						</div>
				</fieldset>
				</form>
			</div>
		</div>

	</div>
	<script type="text/javascript" src="web_profile/js/smoothbox.jquery2.js"></script>
</body>
</html>
