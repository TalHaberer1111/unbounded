<?php
/* Template Name: about*/

get_header(); ?>
<main id="main-about" class="site-main backgroundUnbounded" role="main">

  <div class="slider-wrapper">
    <?php echo do_shortcode('[slick-slider category="4" design="design-3" autoplay="true" autoplay_interval="3000" fade="true" arrows="false"]'); ?>

    <img id="rec1" class="rec1" src="<?php echo get_template_directory_uri() . '/images/rec2.png'; ?>" alt="blue thing">

    <h1 class="about-header">About</h1>

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

  <div id="trigger9" class="section-two about-people">

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4">
          <img id="circle3" class="circle3 mx-auto" src="<?php echo get_template_directory_uri() . '/images/circle3.png'; ?>" alt="blue thing">
        </div>

        <div class="col-12 col-md-4">
          <img id="circle4" class="circle3 mx-auto" src="<?php echo get_template_directory_uri() . '/images/circle3.png'; ?>" alt="blue thing">
        </div>

        <div class="col-12 col-md-4">
          <img id="circle5" class="circle3 mx-auto" src="<?php echo get_template_directory_uri() . '/images/circle3.png'; ?>" alt="blue thing">
        </div>

      </div>

    </div>

    <script>

      // init controller
      var controller = new ScrollMagic.Controller();

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger9", duration: 1400,})
      // trigger animation by adding a css class
      .setClassToggle("#circle3", "fade-in-one")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger9", duration: 1400,})
      // trigger animation by adding a css class
      .setClassToggle("#circle4", "fade-in-two")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger9", duration: 1400,})
      // trigger animation by adding a css class
      .setClassToggle("#circle5", "fade-in-three")
      .addTo(controller);



    </script>

  </div>



</main>

<?php get_footer(); ?>
