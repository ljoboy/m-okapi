
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
	<link rel="shortcut icon" href="<?=base_url("logo.png")?>" type="image/x-icon">

</head>

<body class="fixed-sn mdb-skin">

<!--Double navigation-->
<header>

	<!-- Sidebar navigation -->
	<ul id="slide-out" class="side-nav fixed custom-scrollbar">

		<!-- Logo -->
		<li>
			<div class="logo-wrapper waves-light">
				<a href="#"><img src="<?=base_url("logo")?>" alt="M-OKAPI"></a>
			</div>
		</li>
		<!--/. Logo -->

		<!--Social-->
		<li>
			<ul class="social">
				<li><a class="icons-sm fb-ic"><i class="fa fa-facebook"> </i></a></li>
				<li><a class="icons-sm pin-ic"><i class="fa fa-pinterest"> </i></a></li>
				<li><a class="icons-sm gplus-ic"><i class="fa fa-google-plus"> </i></a></li>
				<li><a class="icons-sm tw-ic"><i class="fa fa-twitter"> </i></a></li>
			</ul>
		</li>
		<!--/Social-->

		<!--Search Form-->
		<li>
			<form class="search-form" role="search">
				<div class="form-group waves-light">
					<input type="text" class="form-control" placeholder="Search">
				</div>
			</form>
		</li>
		<!--/.Search Form-->

		<!-- Side navigation links -->
		<li>
			<ul class="collapsible collapsible-accordion">
				<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-right"></i> Submit blog<i class="fa fa-angle-down rotate-icon"></i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="#" class="waves-effect">Submit listing</a>
							</li>
							<li><a href="#" class="waves-effect">Registration form</a>
							</li>
						</ul>
					</div>
				</li>
				<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-hand-pointer-o"></i> Instruction<i class="fa fa-angle-down rotate-icon"></i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="#" class="waves-effect">For bloggers</a>
							</li>
							<li><a href="#" class="waves-effect">For authors</a>
							</li>
						</ul>
					</div>
				</li>
				<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-eye"></i> About<i class="fa fa-angle-down rotate-icon"></i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="#" class="waves-effect">Introduction</a>
							</li>
							<li><a href="#" class="waves-effect">Monthly meetings</a>
							</li>
						</ul>
					</div>
				</li>
				<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-envelope-o"></i> Contact me<i class="fa fa-angle-down rotate-icon"></i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="#" class="waves-effect">FAQ</a>
							</li>
							<li><a href="#" class="waves-effect">Write a message</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</li>
		<!--/. Side navigation links -->

	</ul>
	<!--/. Sidebar navigation -->

	<!--Navbar-->
	<nav class="navbar navbar-fixed-top scrolling-navbar double-nav mobile-nofixed">

		<!-- SideNav slide-out button -->
		<div class="float-xs-left">
			<a href="#" data-activates="slide-out" class="button-collapse"><i class="fa fa-bars"></i></a>
		</div>

		<!-- Breadcrumb-->
		<div class="breadcrumb-dn">
			<p>Breadcrumb or page title</p>
		</div>

		<ul class="nav navbar-nav float-xs-right">

			<li class="nav-item ">
				<a class="nav-link"><i class="fa fa-envelope"></i> <span class="hidden-sm-down">Contact</span></a>
			</li>
			<li class="nav-item ">
				<a class="nav-link"><i class="fa fa-comments-o"></i> <span class="hidden-sm-down">Support</span></a>
			</li>
			<li class="nav-item ">
				<a class="nav-link"><i class="fa fa-user"></i> <span class="hidden-sm-down">Account</span></a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Profile</a>
				<div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</li>
		</ul>

	</nav>
	<!--/.Navbar-->

</header>
<!--/Double navigation-->

<main>
	<div class="container-fluid">
		<?= isset($page) ? $page : ""?>
	</div>
</main>

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.1.1.min.js')?>"></script>
<!-- Tooltips -->
<script type="text/javascript" src="<?= base_url('assets/js/tether.min.js')?>"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url('assets/js/mdb.js')?>"></script>

<script>
	// SideNav init
	$(".button-collapse").sideNav();

	// Custom scrollbar init
	var el = document.querySelector('.custom-scrollbar');
	Ps.initialize(el);
</script>


</body>


<!-- Mirrored from mdbootstrap.com/live/_MDB/index/docs/page-layouts/side-nav-fixed-navbar-fixed.html by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 09 May 2017 20:03:59 GMT -->
</html>
