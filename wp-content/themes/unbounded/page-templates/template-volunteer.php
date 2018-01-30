]<?php
/* Template Name: volunteer */

get_header(); ?>
<main id="main" class="site-main" role="main">
	<!-- <div class="container"> -->


	<div id="slider-volunteer" class="sliderTwo" >

              <?php

              // check if the repeater field has rows of data
              if( have_rows('slider') ):

                // loop through the rows of data
                while ( have_rows('slider') ) : the_row();

                // display a sub field value
                the_sub_field('quote');

              endwhile;

              else :

                // no rows found

              endif;

              ?>

    </div>

		<div class="information-section">

			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-3 col-lg-6">
						<div class="information-box">
							<h1>test</h1>
							<p></p>

						</div>

					</div>
					<div class="col-sm-12 col-md-3 col-lg-6">
						<div class="information-box">
							<h1>test</h1>
							<p></p>

						</div>
					</div>
					<div class="col-sm-12 col-md-3 col-lg-6">
						<div class="information-box">
							<h1>test</h1>
							<p></p>

						</div>
					</div>
					<div class="col-sm-12 col-md-3 col-lg-6">
						<div class="information-box">
							<h1>test</h1>
							<p></p>

						</div>
					</div>

				</div>

			</div>

		</div>

</main>

<?php get_footer(); ?>
