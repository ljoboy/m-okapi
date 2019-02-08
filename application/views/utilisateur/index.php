
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
	<link rel="shortcut icon" href="<?=base_url("logo.png")?>" type="image/x-icon">
	
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
				<a class="navbar-brand" href="<?= base_url() ?>"><img width="200px" src="<?=base_url("logo.png")?>" class="img-responsive" alt="M-OKAPI"></a>
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
<!--Footer-->
<footer class="page-footer blue center-on-small-only" style="margin-top: 0">

	<!--Footer Links-->
	<div class="container-fluid">
		<div class="row">

			<!--First column-->
			<div class="col-md-6">
				<h5 class="title">M-OKAPI</h5>
				<p>Votre gestionnaire de budget optimisé</p>
			</div>
			<!--/.First column-->
		</div>
	</div>
	<!--/.Footer Links-->

	<!--Copyright-->
	<div class="footer-copyright">
		<div class="container-fluid">
			© <?=date('Y')?> Copyright: <a href="<?=base_url()?>"> M-OKAPI </a>
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
