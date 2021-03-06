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
	<link href="<?= base_url('assets/css/mdb.css') ?>" rel="stylesheet">
	<link rel="shortcut icon" href="<?= base_url("logo.png") ?>" type="image/x-icon">

</head>

<body class="fixed-sn mdb-skin">

<!--Double navigation-->
<header>

	<!-- Sidebar navigation -->
	<ul id="slide-out" class="side-nav fixed custom-scrollbar">

		<!-- Logo -->
		<li>
			<div class="logo-wrapper waves-light">
				<a href="<?= base_url() ?>"><img src="<?= base_url("logo.png") ?>" width="100%" alt="M-OKAPI"></a>
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

		<!-- Side navigation links -->
		<li>
			<ul class="collapsible collapsible-accordion">
				<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-circle-right"></i>
						Categorie entrée<i class="fa fa-angle-down rotate-icon"></i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="<?= site_url('categorie_entree/create')?>" class="waves-effect">Créer</a></li>
							<li><a href="<?= site_url('categorie_entree')?>" class="waves-effect">Lister</a></li>
						</ul>
					</div>
				</li>
				<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-chevron-circle-left"></i>
						Categories sortie<i class="fa fa-angle-down rotate-icon"></i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="<?= site_url('categorie_sortie/create')?>" class="waves-effect"> Créer</a></li>
							<li><a href="<?= site_url('categorie_sortie')?>" class="waves-effect"> Lister</a></li>
						</ul>
					</div>
				</li>
				<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-sign-in"></i>Entrées<i
							class="fa fa-angle-down rotate-icon"></i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="<?= site_url('entree/create')?>" class="waves-effect"> Créer</a></li>
							<li><a href="<?= site_url('entree')?>" class="waves-effect"> Lister</a></li>
						</ul>
					</div>
				</li>
				<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-sign-out"></i>Sorties<i
							class="fa fa-angle-down rotate-icon"></i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="<?= site_url('sortie/create')?>" class="waves-effect"> Créer</a></li>
							<li><a href="<?= site_url('sortie')?>" class="waves-effect"> Lister</a></li>
						</ul>
					</div>
				</li>
				<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-bar-chart"></i>Exercice budgétaire<i
							class="fa fa-angle-down rotate-icon"></i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="<?= site_url('exercice_budgetaire/create')?>" class="waves-effect"> Créer</a></li>
							<li><a href="<?= site_url('exercice_budgetaire')?>" class="waves-effect">Lister</a></li>
						</ul>
					</div>
				</li>
				<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-bank"></i>Action budgétaire<i
							class="fa fa-angle-down rotate-icon"></i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="<?= site_url('action_budgetaire/create')?>" class="waves-effect">Ajouter</a></li>
							<li><a href="<?=site_url('action_budgetaire')?>" class="waves-effect">Lister</a></li>
						</ul>
					</div>
				</li>
				<li><a class="collapsible-header waves-effect arrow-r"><i class="fa fa-line-chart"></i>Rapport<i
							class="fa fa-angle-down rotate-icon"></i></a>
					<div class="collapsible-body">
						<ul>
							<li><a href="<?=site_url('rapport/depenses')?>" class="waves-effect">Dépenses</a></li>
							<li><a href="<?=site_url('rapport/stats')?>" class="waves-effect">Statistiques</a></li>
							<li><a href="<?=site_url('rapport/bilan')?>" class="waves-effect">Bilan</a></li>
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
			<p><?= isset($titre) ? $titre : "M-OKAPI" ?></p>
		</div>

		<ul class="nav navbar-nav float-xs-right">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
				   aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-user"></i><?= ucwords($this->session->nomcomplet); ?>
				</a>
				<div class="dropdown-menu dropdown-primary dd-right" aria-labelledby="dropdownMenu1"
					 data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
					<a class="dropdown-item" href="<?= site_url('mokapi/mdp_change')?>">Modifier mot de passe</a>
					<a class="dropdown-item" href="<?= site_url('mokapi/params')?>">Param&egrave;tre de profil</a>
					<hr>
					<a class="dropdown-item" href="<?php echo site_url('mokapi/deconnexion') ?>">Deconnexion</a>
				</div>
			</li>
		</ul>

	</nav>
	<!--/.Navbar-->

</header>
<!--/Double navigation-->

<main>
	<div class="container-fluid">
		<?= isset($page) ? $page : "" ?>
	</div>
</main>

<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="<?= base_url('assets/js/jquery-3.1.1.min.js') ?>"></script>
<!-- Tooltips -->
<script type="text/javascript" src="<?= base_url('assets/js/tether.min.js') ?>"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?= base_url('assets/js/mdb.js') ?>"></script>

<script>
	// SideNav init
	$(".button-collapse").sideNav();

	// Custom scrollbar init
	var el = document.querySelector('.custom-scrollbar');
	Ps.initialize(el);
</script>

<script>
	// Material Select Initialization
	$(document).ready(function() {
		$('.mdb-select').material_select();
		$('.datepicker').pickadate({
			monthsFull: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
			monthsShort: ['Jan', "Fév", "Mar", "Avr", "Mai", "Jun", "Jui", "Aou", "Sep", "Oct", " Nov", "Déc"],
			weekdaysFull: ['Dimanche', "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"],
			weekdaysShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
			today: 'aujourd\'hui',
			clear: 'effacer',
			format: 'dddd, dd mmm, yyyy',
			formatSubmit: 'yyyy/mm/dd',
			close: 'Fermer',
			labelMonthNext: 'Suivant',
			labelMonthPrev: 'Précédent',
			min: true
		});
	});

</script>
<?=isset($scripts) ? $scripts : ""?>
</body>
</html>
