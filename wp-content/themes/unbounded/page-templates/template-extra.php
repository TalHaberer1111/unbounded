<?php
/* Template Name: Extra */

get_header(); ?>
<main id="main" class="site-main" role="main">

	<div id="fullpage" class="fullpage">

      <div class="hero-wrapper">

        <h1>UNBOUNDED SOULS</h1>
        <h2>A New Dawn for Humanity</h2>

      </div>

      <div class="section-content-boxes">

        <div class="container">

          <div class="row">

            <div class="col-12 col-md-4">
              <div class="content-box">
								<div class="row">
									<div class="col">
										<h1>Welcome</h1>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p>Our children have been abandoned, exploited, and abused. They know what it means to have no place to turn. Before coming to us, they have life expectancies of three to five years.</p>
										<!-- <img class="boxLogo mx-auto float-center" src="<?php echo get_stylesheet_directory_uri(); ?>/images/elephant-head.svg" alt=""> -->
									</div>
								</div>
              </div>
            </div>

            <div class="col-12 col-md-4">
              <div class="content-box">
								<div class="row">
									<div class="col">
										<h1>Nurture</h1>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p>Children are nurtured in a family-style setting and receive award-winning educational and vocational training. We see them transform from the inside out as they begin to build bright futures.</p>
										<!-- <img class="boxLogo mx-auto float-center" src="<?php echo get_stylesheet_directory_uri(); ?>/images/elephant-head.svg" alt=""> -->
									</div>
								</div>
              </div>
            </div>

            <div class="col-12 col-md-4">
              <div class="content-box">
								<div class="row">
									<div class="col">
										<h1>Transform</h1>
									</div>
								</div>
								<div class="row">
									<div class="col">
										<p>Hope raises the next generation of self-sufficient, Christian leaders who will reach their own potential, renew their communities, and prevent the same injustices they once faced.</p>
										<!-- <img class="boxLogo mx-auto float-center" src="<?php echo get_stylesheet_directory_uri(); ?>/images/elephant-head.svg" alt=""> -->
									</div>
								</div>
              </div>
            </div>

				<div class="text-box-main">

						<h1 class="whatDo text-center mx-auto">WHAT WE DO</h1>
						<p class="missionState text-center mx-auto">We are Help Refugees.  We strive to ensure that we do no harm to those whose lives we touch.  We always want our impact to be positive and will always work towards making it this way.  Our aim is that those we assist are able to say that their lives (and prospects) have been improved by permitting us to assist them, by bringing them dignity, hope, respect and humanity.</p>


					</div>

          </div>

        </div>

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
