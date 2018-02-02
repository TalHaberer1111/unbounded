<?php
/* Template Name: about*/

get_header(); ?>
<main id="main-about" class="site-main backgroundUnbounded" role="main">

  <div class="slider-wrapper">
    <?php echo do_shortcode('[slick-slider category="4" design="design-3" autoplay="true" autoplay_interval="3000" fade="true" arrows="false"]'); ?>

    <img id="rec1" class="rec1" src="<?php echo get_template_directory_uri() . '/images/rec2.png'; ?>" alt="blue thing">

  </div>
  <div class="white-line">

  </div>
  <div id="trigger8" class="section-one">
    <div class="container-fluid">
      <div class="row">

      <div id="here1" class="col-12 col-md-6 here1">

      </div>
      <div id="here2" class="col-12 col-md-6 here2">

      </div>

      </div>

    </div>

    <script>

      // init controller
      var controller = new ScrollMagic.Controller();

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger8", duration: "100%", offset: 10,})
      // trigger animation by adding a css class
      .setClassToggle("#here1", "fadeInLeft")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger8", duration: "100%", offset: 10,})
      // trigger animation by adding a css class
      .setClassToggle("#here2", "fadeInRight")
      .addTo(controller);


    </script>

  </div>

  <div class="section-two about-people">

  </div>



</main>

<?php get_footer(); ?>
