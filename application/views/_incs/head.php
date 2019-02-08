
<!DOCTYPE html>
<html lang="fr">
<head>
	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Material Design Bootstrap Template</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url("assets/css/font-awesome.min.css") ?>">
	<!-- Material Design Bootstrap -->
	<link href="<?= base_url('/css/mdb.css')?>" rel="stylesheet">



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
