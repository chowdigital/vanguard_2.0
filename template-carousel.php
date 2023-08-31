<?php /* Template Name: Carosel */ get_header(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://localhost:8888/vanguard/wp-content/themes/vanguard_2.0/js/lightslider.js"></script> 
<!-- Full Page Intro -->

<div class="view full-page-intro z-depth-3">

<div class="view full-page-intro" style="background-image:  url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
 
		 </div>
<!-- Mask & flexbox options-->

<div class="mask d-flex justify-content-center align-items-center">

  

</div>
<!-- Mask & flexbox options-->

</div>
<!-- Full Page Intro --> 


    <script>
		
    $(document).ready(function() {
        $('#responsive').lightSlider({
            item:3,
            loop:true,
            slideMove:1,
            easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
            speed:600,
            responsive : [
                {
                    breakpoint:992,
                    settings: {
                        item:2,
                        slideMove:1,
                        slideMargin:6,
                      }
                },
                {
                    breakpoint:768,
                    settings: {
                        item:1,
                        slideMove:1
                      }
                }
            ]
        });  
      });
    </script>

<section class="container">
    
        <div class="item carosel-section">
            <ul id="responsive" class="content-slider">
            <?php $the_query = new WP_Query( 'cat=1&posts_per_page=6' );
                      if ( $the_query->have_posts() ) {
                      while ( $the_query->have_posts() ) { $the_query->the_post();  $category = get_the_category();  ?>		
                   <li class="item-body">
                   <div class="item-content">
        <div class="square-box" style="background-image:  url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
         
        </div>

                  
                    
                        <h3 class="pt-4"> <?php the_title(); ?> </h3>
                        <div class="" >  <?php the_excerpt(); ?>  
                        </div>
                        <div class="item-btn">
                          <a href="<?php echo get_permalink() ?>">
                        <button type="button" class="btn btn-white">Find out more</button>
                        </a>
                      </div>  
                      </div>
                      </li>
          <?php $counter++; } /* end while*/ } /* end if */ wp_reset_postdata(); ?>

            </ul>
        </div>

</section>


<?php get_footer(); ?>

