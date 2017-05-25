<?php get_header(); ?>

    <div class = "herobanner">
      <img src= <?php echo get_template_directory_uri() . '/media/logos/inhabitent-logo-full.svg' ?> alt="">
    </div>
      <div class = "shopping content">
        <h1>Shop Stuff</h1>
        <div class = "shopStuff">
          <div class = "tools">
            <img src= <?php echo get_template_directory_uri() . '/media/product-type-icons/do.svg' ?> alt="">
            <p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
            <a href="">Do Stuff</a>  
          </div>
          
          <div class = "eat">
            <img src= <?php echo get_template_directory_uri() . '/media/product-type-icons/eat.svg' ?> alt="">
            <p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
            <a href="">Eat Stuff</a>  
          </div>

          <div class = "sleep">
            <img src= <?php echo get_template_directory_uri() . '/media/product-type-icons/sleep.svg' ?> alt="">
            <p>Get a good night's rest in the wild in a home away from home that travels well.</p>
            <a href="">Sleep Stuff</a>  
          </div>

          <div class = "cloths">
            <img src= <?php echo get_template_directory_uri() . '/media/product-type-icons/wear.svg' ?> alt="">
            <p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
            <a href="">Wear Stuff</a>  
          </div>
        </div>  
      </div>


      <div class = journal>
        <h1>Inhabitent Journal</h1> 
        <div class = journals>
          <img src="" alt="">
            <?php
            $the_query = new WP_Query( 'posts_per_page=3' );
            while ($the_query -> have_posts()) :
                $the_query -> the_post();
            ?>
            <div class = "post"> <?php the_post_thumbnail('medium') ?> <h2> <?php the_date() ?>/<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></h2><h1> <?php the_title() ?> </h1><a>Read Entry</a></div>
            <?php
            endwhile;
            wp_reset_postdata();
            ?>

        </div> 
      </div>
      
      <div class = "adventure">
        <h1>Latest Adventures</h1>
        <a href="">More Adventures</a>
      </div>

    <?php get_footer(); ?>
