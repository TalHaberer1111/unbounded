<?php
/* Template Name: about*/

get_header(); ?>
<main id="main-about" class="site-main backgroundUnbounded" role="main">

  <div class="slider-wrapper">
    <!-- <?php echo do_shortcode('[slick-slider category="4" design="design-3" autoplay="true" autoplay_interval="3000" fade="true" arrows="false"]'); ?> -->

    <img id="happy11" class="happy11" src="<?php echo get_template_directory_uri() . '/images/light.jpeg'; ?>" alt="blue thing">

      <img id="happy33" class="happy33" src="<?php echo get_template_directory_uri() . '/images/talpic.png'; ?>" alt="blue thing">

    <h1 class="about">Come meet us!<br> Look what we <br>are all about.</h1>

        <!-- <img id="rec1" class="rec1" src="<?php echo get_template_directory_uri() . '/images/rec2.png'; ?>" alt="blue thing"> -->
    <div id="whiteC" class="white-box">
      <p>Hello</p>

    </div>
  </div>
  <div class="white-line">

  </div>
  <div id="trigger8" class="section-one">
    <div class="container-fluid">
      <div class="row">

      <div id="here1" class="col-12 col-md-6 here1">
        <h1>Who We Are</h1>
        <a class="box-button" href="#">Learn More</a>

      </div>
      <div id="here2" class="col-12 col-md-6 here2">
        <h1>We Specialize In</h1>
        <a class="vision-button" href="#">Look at our Vision</a>

      </div>

      </div>

    </div>

    <script>

      // init controller
      var controller = new ScrollMagic.Controller();

      var scene = new ScrollMagic.Scene({triggerElement: "#main-about", duration: "100%", offset: 10,})
      // trigger animation by adding a css class
      .setClassToggle("#happy33", "fadeInRight")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#main-about", duration: "100%", offset: 10,})
      // trigger animation by adding a css class
      .setClassToggle("#whiteC", "fadeInDown4")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger8", duration: "100%", offset: 50,})
      // trigger animation by adding a css class
      .setClassToggle("#here1", "fadeInLeft")
      .addTo(controller);

      // build scene
      var scene = new ScrollMagic.Scene({triggerElement: "#trigger8", duration: "100%", offset: 50,})
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
