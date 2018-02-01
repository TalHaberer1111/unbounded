<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Satisfy|Teko" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Courgette|Great+Vibes|Kaushan+Script|News+Cycle:400,700|Rancho|Roboto+Condensed:300,400|Satisfy" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Caveat+Brush|Concert+One|Cutive+Mono|Fredoka+One|Risque|Russo+One|Teko" rel="stylesheet">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" /><link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Bitter:400i,700|Courgette|Risque" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Bitter:400i,700|Courgette|Montserrat:400,500,800,900|Risque" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bangers|Exo:300,500,700,700i,800i,900|Martel:700|Montserrat:200,300,400,600,700|Roboto+Slab:100,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<?php wp_head(); ?>
<script>

$( document ).ready(function() {

	$('.hamburger').on('click', function() {
		$(this).toggleClass('opened');
	});
});

</script>
</head>
<body <?php body_class(); ?>>

<div id="wrapper">
	<a href="#main" class="sr-only sr-only-focusable skipnav"><?php _e('Skip to main content', 'basetheme'); ?></a>
	<header id="header" class="clearfix fade-in two">


		<!-- test test test -->

			<nav id="navbar-toggle-11" class="navbar navbar-expand-md">
				<div class="container">
				  <a class="navbar-brand" href="#home"> <img class="main-header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/images/unity.svg" alt=""></a>
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				    <div class="hamburger">
				    	<span></span>
							<span></span>
							<span></span>
				    </div>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarText">
				    <ul class="navbar-nav main-center-nav mx-auto">
				      <li class="nav-item active">
				        <a class="nav-link list-group" href="#box1">Start Journey<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link list-group" href="#about">About</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link list-group" href="<?php echo home_url( '/quotes' ); ?>">Volunteer</a>
				      </li>
							<li class="nav-item list-group">
				        <a class="nav-link" href="<?php echo home_url( '/blog' ); ?>">Inspiration</a>
				      </li>
				    </ul>
				  </div>

				</div>
			</nav>

	</header>

	<div id="home"></div>
