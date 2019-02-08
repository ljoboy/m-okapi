
<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>M-Okapi | Votre gestionnaire de budget optimisé</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url("assets/css/font-awesome.min.css") ?>">
	<!-- Material Design Bootstrap -->
	<link href="<?= base_url('assets/css/mdb.css')?>" rel="stylesheet">



	<style>
		html,
		body,
		header,
		.view {
			height: 100%;
		}
		/* Navigation*/

		.navbar {
			background-color: transparent;
		}

		.top-nav-collapse {
			background-color: #154771;
		}

		@media only screen and (max-width: 768px) {
			.navbar {
				background-color: #154771;
			}
		}
		/*Intro*/

		.view {
			background: url("<?= base_url("assets/img/2.jpg")?>")no-repeat center center fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}

		@media (max-width: 768px) {
			.full-bg-img,
			.view {
				height: auto;
				position: relative;
			}
		}

		.description {
			padding-top: 25%;
			padding-bottom: 3rem;
			color: #fff
		}

		@media (max-width: 992px) {
			.description {
				padding-top: 7rem;
				text-align: center;
			}
		}

		/*Footer*/
		@media (max-width: 768px) {
			.flex-center {
				align-items: center;
			}
		}
		@media (max-width: 1200px) {
			.flex-center {
				align-items: left;
			}
		}
		footer.page-footer {
			background-color: #275C88;
		}
	</style>

</head>

<body>
<header>
	<!--Navbar-->
	<nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">

		<!-- Collapse button-->
		<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
			<i class="fa fa-bars"></i></button>

		<div class="container">

			<!--Collapse content-->
			<div class="collapse navbar-toggleable-xs" id="collapseEx">
				<!--Navbar Brand-->
				<a class="navbar-brand" href="<?= base_url() ?>">M-OKAPI</a>
				<!--Links-->

				<!--Navbar icons-->
				<ul class="nav navbar-nav nav-flex-icons">
					Votre gestionnaire de budget optimisé
				</ul>

			</div>
			<!--/.Collapse content-->

		</div>

	</nav>
	<!--/.Navbar-->

	<!--Mask-->
	<div class="view hm-black-strong">
		<div class="full-bg-img flex-center">
			<div class="container">
				<div class="row" id="home">

					<!--First column-->
					<div class="col-lg-6">
						<div class="description wow fadeInLeft" data-wow-delay="0.2s">
							<h2 class="h2-responsive">Votre gestionnaire de budget optimisé </h2>
							<hr class="hr-dark">
							<p class="">Gestionnaire de budget personnel optimisé créé par les étudiants de G2 Génie Logiciel de l'ESIS dans le cadre du cours de développement web avec <b>PHP</b></p>
							<br>
							<a class="btn btn-outline-white btn-lg">Savoir plus</a>
						</div>
					</div>
					<!--/.First column-->
					<?= isset($part) ? $part : "" ?>
				</div>
			</div>
		</div>
	</div>
	<!--/.Mask-->

</header>
<!--/Navigation & Intro-->

<!--Main layout-->
<main>
	<div class="container">
	</div>
</main>
<!--/Main layout-->

<!--Footer-->
<footer class="page-footer center-on-small-only">

	<!--Footer Links-->
	<div class="container-fluid">
		<div class="row">

			<!--First column-->
			<div class="col-md-3 offset-md-1">
				<h5 class="title">ABOUT MATERIAL DESIGN</h5>
				<p>Material Design (codenamed Quantum Paper) is a design language developed by Google. </p>

				<p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS, and JS framework - Bootstrap.</p>
			</div>
			<!--/.First column-->

			<hr class="hidden-md-up">

			<!--Second column-->
			<div class="col-md-2 offset-md-1">
				<h5 class="title">Useful inks</h5>
				<ul>
					<li><a href="#!">Contact us</a></li>
					<li><a href="#!">About company</a></li>
					<li><a href="#!">Bug Report</a></li>
					<li><a href="#!">License</a></li>
					<li><a href="#!">ChangeLog</a></li>
					<li><a href="#!">Browsers and devices</a></li>
				</ul>
			</div>
			<!--/.Second column-->

			<hr class="hidden-md-up">

			<!--Third column-->
			<div class="col-md-5">
				<h5 class="title">Instagram feed</h5>
				<div class="footer-imgs"></div>
				<ul class="inline-ul-img">
					<li><img src="../../../../../images/avatars/avatar-1.jpg" alt=""></li>
					<li><img src="../../../../../images/avatars/avatar-2.jpg" alt=""></li>
					<li><img src="../../../../../images/avatars/avatar-8.jpg" alt=""></li>
					<li><img src="../../../../../images/avatars/avatar-5.jpg" alt=""></li>
					<br>
					<li><img src="../../../../../images/avatars/avatar-4.jpg" alt=""></li>
					<li><img src="../../../../../images/avatars/avatar-7.jpg" alt=""></li>
					<li><img src="../../../../../images/avatars/avatar-3.jpg" alt=""></li>
					<li><img src="../../../../../images/avatars/avatar-6.jpg" alt=""></li>
				</ul>
			</div>
			<!--/.Third column-->

		</div>
	</div>
	<!--/.Footer Links-->

	<hr>

	<!--Call to action-->
	<div class="call-to-action">
		<ul>
			<li>
				<h5>Register for free</h5></li>
			<li><a href="#" class="btn btn-danger">Sign up!</a></li>
		</ul>
	</div>
	<!--/.Call to action-->

	<hr>

	<!--Social buttons-->
	<div class="social-section">
		<ul>
			<li><a class="btn-floating btn-small btn-fb"><i class="fa fa-facebook"> </i></a></li>
			<li><a class="btn-floating btn-small btn-tw"><i class="fa fa-twitter"> </i></a></li>
			<li><a class="btn-floating btn-small btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
			<li><a class="btn-floating btn-small btn-li"><i class="fa fa-linkedin"> </i></a></li>
			<li><a class="btn-floating btn-small btn-git"><i class="fa fa-github"> </i></a></li>
			<li><a class="btn-floating btn-small btn-pin"><i class="fa fa-pinterest"> </i></a></li>
			<li><a class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a></li>
		</ul>
	</div>
	<!--/.Social buttons-->

	<!--Copyright-->
	<div class="footer-copyright">
		<div class="container-fluid">
			© 2015 Copyright: <a href="../../../../../index.html"> MDBootstrap.com </a>

		</div>
	</div>
	<!--/.Copyright-->

</footer>
<!--/.Footer-->
<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.1.1.min.js')?>"></script>
<!-- Tooltips -->
<script type="text/javascript" src="<?= base_url('assets/js/tether.min.js')?>"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url('assets/js/mdb.js')?>"></script>

<script>
	new WOW().init();
</script>
</body>
</html>
