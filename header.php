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

  	<!-- transparent to solid navbar script -->
	  <script type="text/javascript">
		     $(window).on('scroll', function(){
					 if($(window).scrollTop()){
						 $('#desktop-nav').addClass('solid');
						 $('.navbar-brand').addClass('d-flex')
						 $('.navbar-brand').addClass('flex-fill')
					 }
					 else{
						 $('nav').removeClass('solid');
						 $('.navbar-brand').removeClass('d-flex')
						 $('.navbar-brand').removeClass('flex-fill')
					 }
				 })
	  </script>
  </head>
  <body>
<!-- mega menu -->
<header class="site-header" role="banner">
	<nav id="desktop-nav" class="navbar fixed-top navbar-expand-sm">

			<button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbar">
					<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="../index.php"><img id="navbar-logo" src="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/assets/images/logo2.png" width="280" height="60" alt="" style="margin-left:40px;"></a>
			<div class="navbar-collapse collapse" id="navbar">
					<ul class="navbar-nav justify-content-center d-flex flex-fill">
							<li class="nav-item dropdown">
								<a class="nav-link nav-link-outer dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									For me
								</a>
								<div class="dropdown-menu mega-menu " aria-labelledby="navbarDropdown">
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
											<a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/buy-two-wheeler.php"><i class="fas fa-motorcycle"></i>2 Wheeler</a>
											<a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/buy-mobile.php"><i class="fas fa-mobile-alt"></i>Mobile</a>
											<a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/home-loan.php"><i class="fas fa-home"></i>Home Loan</a>
											<a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/buy-pre-owned-car.php"><i class="fas fa-car"></i>Pre-Owned Car</a>
										</div>
									</div>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link nav-link-outer dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									For my business
								</a>
								<div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
									<div class="row">
											<div class="col">
												<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cash In The A/C</a>
												<div class="dropdown-divider"></div>
												<h6 class="nav-sub-heading">Business Loans</h6>
												<a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for_business_pages/business-expansion.php"><i class="fas fa-chart-line"></i>Business Expansion</a>
												<h6 class="nav-sub-heading">Working Capital</h6>
												<a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for_business_pages/merchant-cash-advance.php"><i class="far fa-credit-card"></i>Merchant Cash Advance</a>
											</div>
											<div class="col">
												<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Buy/Lease</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for_business_pages/healthcare-equipment.php"><i class="fas fa-file-medical-alt"></i>Healthcare Equipment</a>
											</div>
										</div>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link nav-link-outer dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
      <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
      <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Contact Us</a>
        <a href="#">Partner With Us</a>
        <a href="#">Careers</a>
        <a href="#">Blogs</a>
      </div>
			<div class="d-flex flex-fill"><!--spacer--> </div>
	</nav>

  <nav id="mobile-nav" class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Aadhya finance</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon justify-content-right"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          For Me
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/travel.php"><i class="fas fa-plane"></i>Travel</a>
          <a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/education.php"><i class="fas fa-graduation-cap"></i>Education</a>
          <a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/wedding.php"><i class="fas fa-heart"></i>Wedding</a>
          <a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/medical-emergency.php"><i class="fas fa-wheelchair"></i>Medical Emergency</a>
          <a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/home-renovation-or-expansion.php"><i class="fas fa-house-damage"></i>Home Renovation/Expansion</a>
          <a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for-me-pages/loan-against-property.php"><i class="far fa-building"></i>Loan Against Property</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          For My Business
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for_business_pages/business-expansion.php"><i class="fas fa-chart-line"></i>Business Expansion</a>
          <a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for_business_pages/merchant-cash-advance.php"><i class="far fa-credit-card"></i>Merchant Cash Advance</a>
          <a class="dropdown-item" href="<?php $_SERVER['DOCUMENT_ROOT']?>/aadhyafinance/for_business_pages/healthcare-equipment.php"><i class="fas fa-file-medical-alt"></i>Healthcare Equipment</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          EMI Calculators
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Contact Us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Partner With Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Career</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
    </ul>

  </div>
</nav>

  <script type="text/javascript">
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    }
  </script>
</header>
