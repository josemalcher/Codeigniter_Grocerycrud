<!doctype html>
<html lang="pt_BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v3.8.5">
	<title>Blog com Grocery</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url("assets/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<?php
	foreach ($css_files as $css){
		echo "<link rel='stylesheet' href='$css' />";
	}
	?>
	<!-- Custom styles for this template -->
	<!--<link href="<?php /*echo base_url("assets/bootstrap/css/carousel.css")*/?>" rel="stylesheet">-->
</head>
<body>
<header>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<a class="navbar-brand" href="#">BLOG GROCERY</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item <?= ($this->router->class == "site") ? "active" : "" ?> ">
					<a class="nav-link" href="<?= site_url("site/index")?>">Início <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item <?= ($this->router->class == "categoria") ? "active" : "" ?>">
					<a class="nav-link" href="<?= site_url("categoria/index")?>">Categorias</a>
				</li>
				<li class="nav-item <?= ($this->router->class == "noticia") ? "active" : "" ?>">
					<a class="nav-link" href="<?= site_url("noticia/index")?>">Notícias</a>
				</li>
				<li class="nav-item <?= ($this->router->class == "users") ? "active" : "" ?>">
					<a class="nav-link" href="<?= site_url("users/index")?>">Usuários</a>
				</li>
				<li class="nav-item <?= ($this->router->class == "logout") ? "active" : "" ?>">
					<a class="nav-link" href="<?= site_url("logout/index")?>">Sair</a>
				</li>
			</ul>
		</div>
	</nav>
</header>

<main role="main">

	<br>
	<br>

	<div class="container marketing">
		<!-- START THE FEATURETTES -->

		<hr class="featurette-divider">

		<?php
			echo $contents;
		?>

		<hr class="featurette-divider">
		<!-- /END THE FEATURETTES -->
	</div><!-- /.container -->


	<!-- FOOTER -->
	<footer class="container">
		<p class="float-right"><a href="#">Back to top</a></p>
		<p>&copy; 2017-2019 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
	</footer>
</main>

<?php
foreach ($js_files as $js){
	echo "<script src='$js' ></script>";
}
?>

<!--<script src="<?php /*echo base_url('assets/bootstrap/js/jquery-3.3.1.slim.min.js')*/?>" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<!--<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>-->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script></body>
</html>
