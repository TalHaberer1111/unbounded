<?php
/* Template Name: Unbounded*/

get_header(); ?>
<main id="main" class="site-main backgroundUnbounded" role="main">

	<div id="fullpage" class="fullpage">

      <div id="trigger1" class="hero-wrapper">

        <h1 id="text1">UNBOUNDED SOULS</h1>
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

      <div id="trigger2" class="section-content-boxes">

        <div class="container">

          <div class="row">

            <div class="col-12 col-md-12">
							<div id="box1" class="content-box fadeInLeft">
								<div class="row">
									<div class="col-6 col-md-6 sanOne">
										<?php the_field ('box_one_content'); ?>
									</div>
									<div class="col-6 col-md-6 sanTwo">

									</div>

								</div>

								<div class="row">
									<div class="col-6 col-md-6 sanThree">

									</div>
									<div class="col-6 col-md-6 sanFour">
									<?php the_field ('box_four_content'); ?>
									</div>

								</div>

							</div>

              </div>
            </div>

				<div class="text-box-main">

						<h1 class="whatDo text-center mx-auto">What We Do</h1>
						<p class="missionState text-center mx-auto">We are Help Refugees.  We strive to ensure that we do no harm to those whose lives we touch.  We always want our impact to be positive and will always work towards making it this way.  Our aim is that those we assist are able to say that their lives (and prospects) have been improved by permitting us to assist them, by bringing them dignity, hope, respect and humanity.</p>


					</div>

          </div>
					<!-- <script>

					// build scene
					var scene = new ScrollMagic.Scene({triggerElement: "#fullpage", duration: "100%",})
					// trigger animation by adding a css class
					.setClassToggle("#box1", "fadeInLeft")
					.addTo(controller);

					</script> -->

        </div>


			<div class="image-slider-wrapper">
				 <?php echo do_shortcode('[slick-carousel-slider category="5" design="design-6" slidestoshow="3" fade="true" image_size="medium" autoplay="true" autoplay_interval="2000" centermode="true" variablewidth="true" dots="false" speed="1600" slidestoshow="1"]'); ?>
			</div>

			<div class="slider-section">
				<div class="container">
					<div class="slider-wrapper">
				    <?php echo do_shortcode('[slick-slider category="6" design="design-5" arrows="false" speed="1400"]'); ?>
					</div>

				</div>
			</div>

			<div class="content-wrapper-three">
				<div class="flex-row">

				</div>

			</div>



			<div class="content-second-section">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 col-md-3 hello">
							
						</div>
						<div class="col-sm-12 col-md-9 hello1">

						</div>
					</div>

				</div>

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

			<!-- <div class="black-line-section">

			</div> -->


	</div>

</main>

<?php get_footer(); ?>
