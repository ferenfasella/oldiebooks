<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Book</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="<?= base_url() ?>/template2/css/linearicons.css">
	<link rel="stylesheet" href="<?= base_url() ?>/template2/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/template2/css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>/template2/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url() ?>/template2/css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url() ?>/template2/css/animate.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>/template2/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url() ?>/template2/css/main.css">
</head>

<body>
	<style>
		.notification {
			color: white;
			text-decoration: none;
			padding: 15px 26px;
			position: relative;
			display: inline-block;
			border-radius: 2px;
		}

		.notification:hover {
			background: #d3a625;
		}

		.notification .badge {
			position: absolute;
			top: -10px;
			right: -10px;
			padding: 5px 10px;
			border-radius: 50%;
			background: #d3a625;
			color: black;
		}

		.bg {
			background-image: -webkit-linear-gradient(90deg, #ae0001 0%, #740001 100%);
		}
	</style>
	<header id="header" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<h2 class="text-white"><i class="fa fa-book" style="font-size:40px;color:white"></i> OLDIE BOOKS</h2>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="<?= base_url('Utama/index2') ?>" class="notification">Home</a></li>

						<li><a href="<?= base_url('Profil/buku') ?>" class="notification">Book</a></li>
						<li><a href="<?= base_url('Profil/detail') ?>" class="notification">Cart<span class="badge">
									<?= $jlh ?>
								</span></a></li>
						<li><a href="<?= base_url('Profil/pembelian') ?>" class="notification">History </a></li>
						<li class="menu-has-children"><a href="" class="notification">Sell</a>
							<ul>
								<li><a href="<?= base_url('Profil/about') ?>" class="notification">About</a></li>
								<li><a href="<?= base_url('Profil/penjualan') ?>" class="notification">Sell</a></li>
								<li><a href="<?= base_url('Profil/histori') ?>" class="notification">History</a></li>
							</ul>
						</li>
						<li><a href="<?= base_url('Profil') ?>" class="notification">Profile</a></li>
						<li><a href="<?= base_url('Review') ?>" class="notification">Testimonial</a></li>
						<li><a href="<?= base_url('Auth/logout') ?>" class="notification" onclick="return confirm('Are you sure you want to logout?');">Logout</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header><!-- #header -->