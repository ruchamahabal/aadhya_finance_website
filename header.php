<!doctype html>
<html lang="en">
  <head>
    <title>Aadhya Finance</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/css/bootstrap.min.css">



    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

		<!-- Optional JavaScript -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script type="text/javascript" src="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/js/jquery.min.js"></script>

	<!-- popover jquery -->
	<script>
		$(function () {
			$('[data-toggle="popover"]').popover()
			});
	</script>

  <!-- custom css -->
  <link rel="stylesheet" href= "<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/css/custom.css">
  
  </head>
  <body>
<!-- mega menu -->
<header class="site-header" role="banner">
	<nav class="navbar navbar-expand-sm">
		<!-- <img id="navbar-logo" src="assets/images/logo.jpeg" width="100" height="80" alt=""> -->
			<button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbar">
					<span class="navbar-toggler-icon"></span>
			</button>
			<span class="navbar-brand d-flex flex-fill">Brand</span>
			<div class="navbar-collapse collapse" id="navbar">
					<ul class="navbar-nav justify-content-center d-flex flex-fill">
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									For me
								</a>
								<div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
								<div class="row">
										<div class="col">
											<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cash In My Account</a>
											<div class="dropdown-divider"></div>
											<h6 class="nav-sub-heading">Personal Loan</h6>
											<a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/travel.php"><i class="fas fa-plane"></i>Travel</a>
											<a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/education.php"><i class="fas fa-graduation-cap"></i>Education</a>
											<a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/wedding.php"><i class="fas fa-heart"></i>Wedding</a>
											<a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/medical-emergency.php"><i class="fas fa-wheelchair"></i>Medical Emergency</a>
											<a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/home-renovation-or-expansion.php"><i class="fas fa-house-damage"></i>Home Renovation/Expansion</a>
											<a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/loan-against-property.php"><i class="far fa-building"></i>Loan Against Property</a>
										</div>
										<div class="col">
											<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Buy</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="#"><i class="fas fa-motorcycle"></i>2 Wheeler</a>
											<a class="dropdown-item" href="#"><i class="fas fa-mobile-alt"></i>Mobile</a>
											<a class="dropdown-item" href="#"><i class="fas fa-home"></i>Home Loan</a>
											<a class="dropdown-item" href="#"><i class="fas fa-car"></i>Pre-Owned Car</a>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									For my business
								</a>
								<div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
									<div class="row">
											<div class="col">
												<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cash In The A/C</a>
												<div class="dropdown-divider"></div>
												<h6 class="nav-sub-heading">Business Loans</h6>
												<a class="dropdown-item" href="#"><i class="fas fa-chart-line"></i>Business Expansion</a>
												<h6 class="nav-sub-heading">Working Capital</h6>
												<a class="dropdown-item" href="#"><i class="far fa-credit-card"></i>Merchant Cash Advance</a>
											</div>
											<div class="col">
												<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Buy/Lease</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#"><i class="fas fa-file-medical-alt"></i>Healthcare Equipment</a>
											</div>
										</div>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							 			EMI Calculators
								</a>
								<div class="dropdown-menu dropdown-menu-right mega-menu" aria-labelledby="navbarDropdown">
										<div class="row">
											<div class="col">
												<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">EMI Calculators</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#"><i class="fas fa-hand-holding-usd"></i>Personal Loan Calculator</a>
												<a class="dropdown-item" href="#"><i class="fas fa-home"></i>Home Loan Calculator</a>
												<a class="dropdown-item" href="#"><i class="fas fa-car"></i>Vehicle Loan Calculator</a>
												<a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i>Business Loan Calculator</a>
											</div>
										</div>
								</div>
							</li>
					</ul>
			</div>
			<div class="d-flex flex-fill"><!--spacer--> </div>
	</nav>
</header>
