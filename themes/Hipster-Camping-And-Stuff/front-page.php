<?php get_header(); ?>

    <div class = "herobanner">
      <img src= <?php echo get_template_directory_uri() . '/media/logos/inhabitent-logo-full.svg' ?> alt="">
    </div>
      <div class = "shopping content">
        <h1>Shop Stuff</h1>
        <div class = "shopStuff">
            <?php $product_types = get_terms(array('taxonomy'=> 'product-type', 'hide_empty' => 0));

            foreach ($product_types as $product_type) :
              if (!empty($product_types) && !is_wp_error($product_types)) {
                $name = $product_type->name
                ?>
                <div class = "<?php $name ?>">
                <img src= <?php echo get_template_directory_uri() . "/media/product-type-icons/$name.svg" ?> alt="">
                <p><?php echo $product_type->description; ?></p>
                <a href="<?php echo "product-type/$name/" ?>"><?php echo $name?> Stuff</a>  
                </div>

              <?php
              }
            endforeach;
            ?>
        </div>  
      </div>


      <div class = journal>
        <h1>Inhabitent Journal</h1> 
        <div class = journals>
          <img src="" alt="">
            <?php
            $args = array(
                'posts_per_page'   => 3
            );

            $the_query = get_posts($args);
            foreach ($the_query as $post) : 

            $id = $post->ID ?>
            <!--<pre><?php echo print_r($post) ?></pre>-->
            <div class = "post"> <?php the_post_thumbnail('medium') ?> <h2> <?php echo get_the_date('F j, Y') ?>/<?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></h2><h1><a href="<?php echo "inhabitent/?p=$id" ?>"><?php the_title() ?></a></h1>
            <a href="<?php echo "inhabitent/?p=$id" ?>">Read Entry</a></div>
            <?php
            endforeach;
            ?>

        </div> 
      </div>
      
      <div class = "adventure">
        <h1>Latest Adventures</h1>
        <a href="">More Adventures</a>
      </div>

    <?php get_footer(); ?>
