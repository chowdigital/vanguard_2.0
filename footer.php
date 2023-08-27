<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cloudsdale_Theme
 */

?>


<div class="white-box">
  <div class="container">
    <div class="row">
    <div class="col-12 col-sm-6 col-lg-3 text-center">
        <a href="#"><button type="button" class="btn btn-primary">Info </button></a>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 text-center">
        <a href="#"><button type="button" class="btn btn-primary">Hire a space</button></a>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 text-center">
        <a href="#"><button type="button" class="btn btn-primary">Accessibility </button></a>
      </div>
      <div class="col-12 col-sm-6 col-lg-3 text-center">
        <a href="#"><button type="button" class="btn btn-primary">Find us </button></a>
      </div>
    </div>
  </div>
</div>

<div class="footer-logo">
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vanguard-logo.svg" alt="Black Book Logo" style>

</div>
<!-- Footer -->
<footer class="container pt-5">
<div class="row">
  <div class="col-12 col-lg-6">
  <ul>
    <li>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/mail.svg"></img>info@vanguardcamden.com</a>
    </li>
    <li>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg"></img>020 8092 9044</a>
    </li>
    <li>
      <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/map.svg"></img>What Three Words: Cycle, Waters, Patch</a>
    </li>

</ul>
</div>
<div class="col-12 col-lg-6 col-xl-3 offset-xl-3">
  <ul>
    <li>
      <a href="">Privacy Policy</a>
    </li>
    <li>
    <a href="">Cookie Policy</a>

    </li>
    <li>
    <a href="">Terms & Conditions</a>

    </li>
   
</ul>
</div>
</div>
</footer>



<?php wp_footer(); ?>

</body>
</html>
