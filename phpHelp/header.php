<?php
	error_reporting (0);
	$currentSection = $_GET['section'];
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#02b5ff">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#02b5ff">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#02b5ff">

		<title><?php
			if ($currentSection==aboutUs) {
				echo "Haqqımızda";
			}
			elseif ($currentSection==news) {
				echo "Xəbərlər";
			}
			elseif ($currentSection==photoGallery) {
				echo "Fotoqalereya";
			}
			elseif ($currentSection==videoGallery) {
				echo "Videoqalereya";
			}
			elseif ($currentSection==contact) {
				echo "Əlaqə";
			}
			elseif ($currentSection==achievements) {
				echo "Nailiyyətlərimiz";
			}
			elseif ($currentSection==press) {
				echo "Kütləvi İnformasiya Vasitələri";
			}
			elseif ($currentSection==volunteers) {
				echo "Könüllülərimiz";
			}
			elseif ($currentSection==doctors) {
				echo "Həkimlərimiz";
			}
			else {
				echo "Azərbaycan Diabet Liqası - ADL";
			}
		?></title>

		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="images/fav-icon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="images/fav-icon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/fav-icon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/fav-icon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/fav-icon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/fav-icon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="images/fav-icon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="images/fav-icon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="images/fav-icon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="images/fav-icon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/fav-icon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="images/fav-icon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/fav-icon/favicon-16x16.png">
		<link rel="manifest" href="images/fav-icon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="images/fav-icon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- Responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
			
	<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/C5FF57B9-36F8-5F43-B6FE-4F657ABE4789/main.js" charset="UTF-8"></script></head>

	<body class="charity-theme">
		<div class="main-page-wrapper">

			<!-- ===================================================
				Loading Transition
			==================================================== -->
			<div id="loader-wrapper">
				<div id="loader"></div>
			</div>


			<!-- 
			=============================================
				Theme Header
			============================================== 
			-->
			<header class="charity-header">
				<!-- ============================ Theme Menu ========================= -->
				<div class="theme-main-menu">
				<div class="container">
						<div class="main-container clearfix">
							<div class="logo float-left"><a href="index.php?section=home"><img src="images/logo/logo5.png" alt="Logo"></a></div>

							<div class="right-content float-right">
								<div class="language-select">
									<select class="selectpicker">
										<option>AZ</option>
										<option>EN</option>
										<option>RU</option>
									</select>
								</div> <!-- /.language-select -->
								<button class="search ch-p-bg-color round-border tran3s" id="search-button"><i class="fa fa-search" aria-hidden="true"></i></button>
								<div class="search-box tran5s" id="searchWrapper">
									<button id="close-button" class="ch-p-color"><i class="flaticon-cross"></i></button>
									<div class="container">
													
										<form action="#">
											<input type="text" placeholder="Axtar">
											<button class="ch-p-bg-color"><i class="fa fa-search" aria-hidden="true"></i></button>
										</form>
									</div>
								</div> <!-- /.search-box -->
							</div> <!-- /.right-content -->

							<!-- ============== Menu Warpper ================ -->
							<div class="menu-wrapper float-right">
								<nav id="mega-menu-holder" class="clearfix">
									<ul class="clearfix">
										<li <?php if($currentSection==home || $currentSection==false){echo 'class="active"';}?>><a href="index.php?section=home">Ana Səhifə</a></li>
										<li <?php if($currentSection==aboutUs){echo 'class="active"';}?>><a href="index.php?section=aboutUs">Haqqımızda</a></li>
										<li <?php if($currentSection==news){echo 'class="active"';}?>><a href="index.php?section=news">Xəbərlər</a></li>
										<li <?php if($currentSection==photoGallery || $currentSection==videoGallery){echo 'class="active"';}?>><a href="#">Qalereya</a>
										<ul class="dropdown">
											<li><a href="index.php?section=photoGallery">Fotoqalereya</a></li>
											<li><a href="index.php?section=videoGallery">Videoqalereya</a></li>
											</ul>
										</li>
										<li <?php if($currentSection==contact){echo 'class="active"';}?>><a href="index.php?section=contact">Əlaqə</a></li>
									</ul>
								</nav> <!-- /#mega-menu-holder -->
							</div> <!-- /.menu-wrapper -->
						</div> <!-- /.main-container -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-main-menu -->
			</header> <!-- /.charity-header -->
			
			