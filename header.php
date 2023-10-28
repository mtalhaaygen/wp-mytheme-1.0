<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Theme</title>

	<?php wp_head(); ?>

	<!-- Google Fonts -->
	<!-- open sans regular400 light300 / niramit regular light extra-light -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Niramit:wght@200;300;400&family=Open+Sans:wght@300;400&display=swap"
		rel="stylesheet">

</head>

<body	<?php body_class(); ?> >
	<!-- dark mode button -->
	<div class="fixed-mode-button">
		<button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
			aria-expanded="false">
			<i class="fa-solid fa-sun"></i>
		</button>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<li><a class="dropdown-item" href="#">Dark Mode</a></li>
			<li><a class="dropdown-item" href="#">Light Mode</a></li>
		</ul>
	</div>

	<!-- navbar -->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top pt-3">
		<div class="container-xl">
			<a class="navbar-brand text-hover" href="/mytema"> <i class="mx-2 fa-solid fa-terminal fa-xl"></i> MY THEME</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
				aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<?php
				wp_nav_menu( array(
					'theme_location'	=> 'primary',
					'depth'				=> 2,
					'container'			=> 'div',
					'container_class'	=> 'collapse navbar-collapse',
					'container_id'		=> 'navbarCollapse',
					'menu_class'		=> 'navbar-nav me-auto mb-2 mb-md-0',
					'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
					'walker'			=> new WP_Bootstrap_Navwalker(),
				));
			?>
		</div>
	</nav>

<!-- END OF HEADER -->