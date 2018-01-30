<?php
/* Template Name: Home */

get_header(); ?>
<main id="main" class="site-main" role="main">

	<div id="fullpage" class="fullpage container">

		<div id="sectionWrapper" class="sections-wrapper">

			<?php

					/*
					*  Loop through a Flexible Content field and display it's content with different views for different layouts
					*/

					while(the_flexible_field("home_content")): ?>

						<?php if(get_row_layout() == "text"): // layout: Content ?>

							<div class="row sections row-text">
								<div class="col-sm-12 col-md-4">
									<?php the_sub_field("text_one"); ?>
								</div>

								<div class="col-sm-12 col-md-4">
									<?php the_sub_field("text_two"); ?>
								</div>

								<div class="col-sm-12 col-md-4">
									<?php the_sub_field("text_two_three"); ?>
								</div>

							</div>

						<?php elseif(get_row_layout() == "quotes"): // layout: File ?>

							<div class="row quotes-row sections">
								<h1 id="quotes" class="quotes"><?php the_sub_field("quotes"); ?></h1>
								<p class="name mx-auto"><?php the_sub_field("name"); ?></p>
							</div>



				<div id="imageContent">
						<?php elseif(get_row_layout() == "image_content"): // layout: Featured Posts ?>

							<div class="row image-content sections">
								<div class="col col-md-6">
									<img id="image" src="<?php the_sub_field("image_one"); ?>" alt="">
								</div>

								<div class="col col-md-6">
									<img id="image" src="<?php the_sub_field("image_two"); ?>" alt="">
								</div>

							</div>

							</div>


						<?php elseif(get_row_layout() == "something"): // layout: Featured Posts ?>

							<div class="row sections">
								<div class="col col-md-8">
									<?php the_sub_field("side_one"); ?>
								</div>

								<div class="col col-md-4">
								<?php the_sub_field("side_two"); ?>
								</div>
							</div>

						<?php endif; ?>

					<?php endwhile; ?>

		</div>

	</div>

	<!-- <script type="text/javascript">
			// init controller
			var controller = new ScrollMagic.Controller(

			);

			// build scene
			var scene = new ScrollMagic.Scene({triggerElement: "#imageContent", duration: "100%"})
			// trigger animation by adding a css class
			.setClassToggle("#image", "rotateNow")
			.addTo(controller);

			// build scene
			var scene = new ScrollMagic.Scene({triggerElement: "#fullpage", duration: "100%", triggerHook: "onEnter",})
			// trigger animation by adding a css class
			.setClassToggle("#quotes", "element")
			.addTo(controller);
</script> -->

</main>

<?php get_footer(); ?>
