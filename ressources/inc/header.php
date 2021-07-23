<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Citations</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="public/images/logo.png">
	<link rel="stylesheet" href="public/css/bootstrap.css">	
    <link rel="stylesheet" href="public/css/font-awesome.css">
	<link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="public/css/responsive.css">
    <link rel="stylesheet" href="public/css/magnific-popup.min.css')}}">
	<link rel="stylesheet" href="public/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="public/css/themify-icons.css">
    <link rel="stylesheet" href="public/css/niceselect.css">
    <link rel="stylesheet" href="public/css/animate.css">
    <link rel="stylesheet" href="public/css/flex-slider.min.css">
    <link rel="stylesheet" href="public/css/owl-carousel.css">
    <link rel="stylesheet" href="public/css/slicknav.min.css">
	<link rel="stylesheet" href="public/css/reset.css">

	
	
</head>
<body class="js">	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="#"></i> +243 999 539 100</li>
								<li><i class="#"></i> nos.citations@gmail.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<?php
									if(isset($_SESSION["nom"])){
										?>
										<li><i class="#"></i> <a href="index.php?kay=x-users.compte">Mon compte</a></li>
										<li><i class="#"></i><li><a href="index.php?kay=x-users.deconnexion">Déconnexion (<?= $_SESSION["nom"];?>)</a></li>
										<?php
									}else{
										?>
										<li><a href="index.php?kay=x-users.inscription">S'inscrire</a></li>
										<li><a href="index.php?kay=x-users.connect">Se connecter</a></li>
										<?php
									}
								?>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.php"><img src="public/images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
                    <div class="col-lg-10 col-md-2 col-12">
                    <hr>
                        <div class="right-content">
                            <ul class="list-main">
                                <li><i class="#"></i> <a href="index.php">Accueil</a></li>
                                <li><i class="#"></i> <a href="index.php?kay=x-citations.amour">Amour</a></li>
                                <li><i class="#"></i> <a href="index.php?kay=x-citations.amitie">Amitié</a></li>
                                <li><i class="#"></i> <a href="index.php?kay=x-citations.famille">Famille</a></li>
                                <li><i class="#"></i> <a href="index.php?kay=x-citations.bonheur">Bonheur</a></li>
                                <li><i class="#"></i> <a href="index.php?kay=x-citations.hommes_femmes">Hommes & Femmes</a></li>
                                <li><i class="#"></i> <a href="index.php?kay=x-citations.travail">Travail</a></li>
                                <li><i class="#"></i> <a href="index.php?kay=x-citations.temps">Temps qui passe</a></li>
                                <li><i class="#"></i> <a href="index.php?kay=x-citations.animaux">Animaux</a></li>
                            </ul>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
