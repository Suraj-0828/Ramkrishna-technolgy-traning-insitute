<!DOCTYPE html>
<html lang="zxx">

<head>
	<!-- meta tag -->
	<meta charset="utf-8">
	<title>Successfully</title>
	<meta name="description" content="Construction Companies, Construction Consultancy, Construction Technology, Builders, Developers, Builders Developers, Highrise Building, Tall Building, Building Architectures, Trade promotion, Trade promotion organisation">
	<!-- responsive tag -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon -->
	<link rel="apple-touch-icon" href="apple-touch-icon.html">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/home/fevicon.png">
	<!-- Bootstrap v5.0.2 css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- font-awesome css -->
	<link rel="stylesheet" type="text/css" href="assets/fonts/font/font-awesome.min.css">
	<!-- Uicons Regular Rounded css -->
	<link rel="stylesheet" type="text/css" href="assets/css/uicons-regular-rounded.css">
	<!-- flaticon css -->
	<link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<!-- owl.carousel css -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<!-- slick slider css -->
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<!-- odometer css -->
	<link rel="stylesheet" type="text/css" href="assets/css/odometer.min.css">
	<!-- off canvas css -->
	<link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
	<!-- magnific popup css -->
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<!-- Main Menu css -->
	<link rel="stylesheet" type="text/css" href="assets/css/rsmenu-main.css">
	<!-- spacing css -->
	<link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
	<!-- responsive css -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

	<style>
		.success {
			text-align: center;
			margin: auto;
			background-color: gray;
			color: black;
		}

		.successful {
			text-align: center;
			margin: auto;
			padding: 60px 50px 20px 50px;
			font-size: 45px !important;
			color: black;
		}

		.imgg {
			max-width: 100%;
		}

		.img-size {
			width: 100px;
			height: 100px;
			margin: auto;
			margin-top: 25px;
			margin-bottom: -20px;
		}

		.text-black {
			padding-bottom: 30px;
		}

		.color-success {
			color: #6BC839;
		}

		.bold-name {
			font-weight: bold;
		}

		.pp {
			text-align: center;
		}

		@media (max-width: 576px) {

			/* Extra small devices (phones) */
			.successful {
				font-size: 15px !important;
			}
		}
	</style>

</head>

<body class="defult-home">

	<?php
	// Check if the 'name' parameter is set in the URL
	if (isset($_GET['name'])) {
		// Get the name from the URL parameter
		$name = htmlspecialchars($_GET['name']);
	} else {
		$name = "Guest";  // Default value if no name is provided
	}
	?>

	<div class="offwrap"></div>

	<!-- Main content Start -->
	<div class="main-content">

		<!-- Header Pages -->
		<?php include 'header.php'; ?>
		<!-- Header Pages -->

		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs img1">
			<div class="container">
				<div class="breadcrumbs-inner">
					<h1 class="page-title">
						Success
						<span class="watermark">success</span>
					</h1>
					<span class="sub-text">Thank you for reaching out! Your message was successfully sent. Our team will review it and get back to you shortly. We appreciate your interest!</span>
				</div>
			</div>
		</div>
		<!-- Breadcrumbs End -->


		<div class="container pt-5 pb-4">
			<div class="img-size">
				<img class="imgg" src="assets/images/success-failed/success.png" />
			</div>
			<div class="successful text-black">
				Thank you, <span class="font-weight-bold"><?php echo $name; ?>,</span> for your inquiry!<br>
				Your Request Has Been <span class="bold-name">Successfully</span> Submited
			</div>
			<div class="pp text-black">
				Our dedicated care coordinator will reach out to you as soon as possible to assist you further.
			</div>
		</div>



	</div>
	<!-- Main content End -->

	<!-- Footer Pages -->
	<?php include 'footer.php'; ?>
	<!-- Footer Pages -->