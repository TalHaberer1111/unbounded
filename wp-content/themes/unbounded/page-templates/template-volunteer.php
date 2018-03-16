<?php
/* Template Name: volunteer */

get_header(); ?>
<main id="main" class="site-main" role="main">
	<div>
<div id="pinContainer">
	<div id="slideContainer">
		<section class="panel blue">
			<!-- <p class="mx-auto text-center align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
		</section>
		<section class="panel teal">
			<!-- <b>TWO</b> -->
		</section>
		<section class="panel yellow">
			<!-- <b>THREE</b> -->
		</section>
		<section class="panel whitesmoke">
			<!-- <p class="mx-auto text-center align-middle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
		</section>
	</div>
</div>
<a class="under-pin" href="https://greensock.com/docs/TimelineMax/reversed()">

	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>

</a>
<script>
	$(function () { // wait for document ready
		// init
		var controller = new ScrollMagic.Controller();

		// define movement of panels
		var wipeAnimation = new TimelineMax()
			// animate to second panel
			.to("#slideContainer", 6, {z: -150})		// move back in 3D space
			.to("#slideContainer", 1,   {x: "-25%"})	// move in to first panel
			.to("#slideContainer", .6, {z: 0})				// move back to origin in 3D space
			// animate to third panel
			.to("#slideContainer", .6, {z: -150, delay: 1})
			.to("#slideContainer", 1,   {x: "-50%"})
			.to("#slideContainer", .6, {z: 0})
			// animate to forth panel
			.to("#slideContainer", .6, {z: 150, delay: 1})
			.to("#slideContainer", 1,   {x: "-75%"})
				.to("#slideContainer", 2.5,   {y: "-100%"})
			.to("#slideContainer", 1, {z: 0});
			// wipeAnimation.reverse( 1 );
			 // wipeAnimation.yoyo(true).repeat(-1).timeScale(1).play(1);

		// create scene to pin and link animation
		new ScrollMagic.Scene({
				triggerElement: "#pinContainer",
				triggerHook: "onLeave",
				duration: "500%"
			})
			.setPin("#pinContainer")
			.setTween(wipeAnimation)
			.addIndicators() // add indicators (requires plugin)
			.addTo(controller);
	});
</script>
</div>
</main>

<div id="footer-volunteer" class="footer-volunteer">
	<?php get_footer(); ?>

</div>
