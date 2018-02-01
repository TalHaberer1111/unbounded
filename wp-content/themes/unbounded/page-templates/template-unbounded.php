<?php
/* Template Name: Unbounded*/

get_header(); ?>
<main id="main" class="site-main backgroundUnbounded" role="main">

	<div id="fullpage" class="fullpage">

      <div id="trigger1" class="hero-wrapper">

        <h1 id="text1">Unbounded Souls</h1>
        <!-- <h2 id="text2">A New Dawn for Humanity</h2> -->

				<div class="sp-container">
				<div class="sp-content">
					<div class="sp-globe"></div>
					<h2 class="frame-1">Hello</h2>
					<h2 class="frame-2">To All The Beautiful Deep Divers Out There</h2>
					<h2 class="frame-3">Build a world</h2>
					<h2 class="frame-4">That works for everyone.</h2>
					<h2 class="frame-5">
						<span>Our</span>
						<span>Generation,</span>
						<span>Will Make A Difference<br> In this World.</span>
					</h2>
					<a>Tal</a>
				</div>
			</div>

				<script>

			// init controller
			var controller = new ScrollMagic.Controller();

			// build scene
			var scene = new ScrollMagic.Scene({triggerElement: "#trigger1", duration: "100%",})
			// trigger animation by adding a css class
			.setClassToggle("#text1", "fade-in")
			.addTo(controller);


				</script>

      </div>
<div id="trigger3" class="trigger3">


			<img id="talpic" class="circle-image" src="<?php echo get_template_directory_uri() . '/images/circle2.png'; ?>" alt="blue thing">

			<script>

		// init controller
		var controller = new ScrollMagic.Controller();

		// build scene
		var scene = new ScrollMagic.Scene({triggerElement: "#fullpage", duration:"100%",})
		// trigger animation by adding a css class
		.setClassToggle("#talpic", "fadeInLeft")
		.addTo(controller);


			</script>


	</div>

      <div id="trigger2" class="section-content-boxes">

        <div class="container">

          <div class="row">

            <div class="col-6 col-sm-6">
							<div id="box1" class="content-box">
								<div class="row">
									<div class="col-12 col-md-6 sanOne">
										<?php the_field ('box_one_content'); ?>
									</div>
									<div class="col-12 col-md-6 sanTwo">

									</div>

								</div>

								<div class="row">
									<div class="col-12 col-md-6 sanThree">

									</div>
									<div class="col-12 col-md-6 sanFour">
									<?php the_field ('box_four_content'); ?>
									</div>

								</div>

							</div>

              </div>
							<div class="col-6 col-sm-6 warp-you">
								<!-- <img class="blue1" src="<?php echo get_template_directory_uri() . '/images/squars2.png'; ?>" alt="blue thing"> -->
								<!-- <img class="blue2" src="<?php echo get_template_directory_uri() . '/images/blue1.png'; ?>" alt="blue thing"> -->
							</div>
            </div>

<div id="trigger5">




				<div id="about" class="text-box-main mx-auto">

						<h1 id="trigger6" class="whatDo">About Us</h1>
						<p class="missionState text-center">We are Help Refugees.  We strive to ensure that we do no harm to those whose lives we touch.  We always want our impact to be positive and will always work towards making it this way.  Our aim is that those we assist are able to say that their lives (and prospects) have been improved by permitting us to assist them, by bringing them dignity, hope, respect and humanity.</p>

					<img id="dolphin" class="dolphins" src="<?php echo get_template_directory_uri() . '/svg/dolphin.svg'; ?>" alt="blue thing">


						<script>

						// init controller
						var controller = new ScrollMagic.Controller();


						// build scene
						var scene = new ScrollMagic.Scene({triggerElement: "#trigger5", duration: "100%"})
						// trigger animation by adding a css class
						.setClassToggle("#about", "fadeInDown")
						.addTo(controller);

						// // build scene
						// var scene = new ScrollMagic.Scene({triggerElement: "#trigger6", duration: 600})
						// // trigger animation by adding a css class
						// .setClassToggle("#dolphin", "fadeInDown2",)
						// .addTo(controller);

						</script>


					</div>



			</div>
          </div>
					<script>

					// build scene
					var scene = new ScrollMagic.Scene({triggerElement: "#fullpage", duration: 2000,})
					// trigger animation by adding a css class
					.setClassToggle("#box1", "fadeInDown")
					.addTo(controller);



					</script>

        </div>
<div id="trigger4">
				<div class="section-about-us">
					<div class="container">
					<h1 class="text-center mx-auto">Writing a New Story</h1>

					<div class="row">
						<div class="col-12 col-sm-4">
							<div  id="about-us" class="about-us">
								<h2>Words of Wisdom</h2>
								<p>The most difficult thing is the decision to act, the rest is merely tenacity. The fears are paper tigers. You can do anything you decide to do. You can act to change and control your life; and the procedure, the process is its own reward.</p>
								<h4>- Amelia Earhart</h4>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div  id="about-us" class="about-us">
								<h2>Words of Wisdom</h2>
								<p>Permanence, perseverance and persistence in spite of all obstacles, discouragements, and impossibilities: It is this, that in all things distinguishes the strong soul from the weak.</p>
								<h4>- Thomas Carlyle</h4>
							</div>
						</div>
						<div class="col-12 col-sm-4">
							<div id="about-us"  class="about-us">
								<h2>Words of Wisdom</h2>
								<p>The most difficult thing is the decision to act, the rest is merely tenacity. The fears are paper tigers. You can do anything you decide to do. You can act to change and control your life; and the procedure, the process is its own reward.</p>
								<h4>Amelia Earhart</h4>
							</div>
						</div>


					</div>

						</div>

						<script>

					// init controller
					var controller = new ScrollMagic.Controller();

					// build scene
					var scene = new ScrollMagic.Scene({triggerElement: "#trigger4", duration: 0,})
					// trigger animation by adding a css class
					.setClassToggle("#about-us", "fadeInDown")
					.addTo(controller);


						</script>

				</div>
</div>

			<!-- <div class="image-slider-wrapper">
				 <?php echo do_shortcode('[slick-carousel-slider category="5" design="design-6" slidestoshow="3" fade="true" image_size="medium" autoplay="true" autoplay_interval="2000" centermode="true" variablewidth="true" dots="false" speed="1600" slidestoshow="1"]'); ?>
			</div> -->

			<div class="slider-section">
				<div class="container">
					<div class="slider-wrapper">
				    <?php echo do_shortcode('[slick-slider category="6" design="design-5" arrows="false" speed="1200"]'); ?>
					</div>

				</div>
			</div>

			<div id="trigger7"></div>

			<div class="content-wrapper-three">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h1 class="main-header-three">Your Next Step</h1>
						</div>
						<div class="col-12 col-sm-6">
							<div id="herebox" class="call-box call-box-1">
								<h2>Join the Mission</h2>
								<p>Named after the year when hard root beers soared in popularity with Colonial drinkers, the brew features ingredients such as blackstrap molasses, sassafras root bark, dried wintergreen and licorice.</p>
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div id="herebox" class="call-box call-box-2">
								<a class="volunteer" href="#">How to Volunteer</a>
								<p></p>
							</div>
						</div>

					</div>

				</div>

				<script>

					// init controller
					var controller = new ScrollMagic.Controller();

					// build scene
					var scene = new ScrollMagic.Scene({triggerElement: "#trigger7", duration: 0 })
					// trigger animation by adding a css class
					.setClassToggle("#herebox", "fadeInDown2")
					// .setClassToggle("#here-box1", "fadeInLeft")
					.addTo(controller);


				</script>



			</div>



			<div class="content-second-section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 col-md-5 hello">

						</div>
						<div class="col-sm-12 col-md-7">
							<video autoplay="true" loop="true" muted"true">
							  <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/jar.mp4" type="video/mp4">
							  Your browser does not support the video tag.
							</video>
						</div>
					</div>

				</div>

			</div>

			<div class="black-line-section">

			</div>

			<div class="bottom-section">
				<div class="container-fluid column-wrapper text-center">
					<div class="row">
						<div class="col-sm-12 col-md-4 column-test boxOne">
							<a class="boxLink" href="#">Where We<br>Work</a>
						</div>

						<div class="col-sm-12 col-md-4 column-test boxTwo">
							<a class="boxLink" href="#">Our <br>Values</a>
						</div>

						<div class="col-sm-12 col-md-4 column-test boxThree">
							<a class="boxLink" href="#">Get<br> Involved</a>
						</div>

					</div>

				</div>

			</div>




	</div>

</main>

<?php get_footer(); ?>
