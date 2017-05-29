<?php get_header(); ?>`

    <div id="primary" class="content-area container">
        

    <?php the_archive_title('<h1>', '</h1>'); ?>

    <div class = "shop-links">
      <a href="http://localhost/inhabitent/product-type/do/">Do</a>
      <a href="http://localhost/inhabitent/product-type/eat/">Eat</a>
      <a href="http://localhost/inhabitent/product-type/sleep/">Sleep</a>
      <a href="http://localhost/inhabitent/product-type/wear/">Wear</a>
    </div>

        <?php if (have_posts()) : ?>

            <header class="page-header">
                <?php
                    the_archive_description( '<div class="taxonomy-description">', '</div>' );
                ?>
            </header><!-- .page-header -->

        <?php
        $products = get_posts();
        ?>
        <main id="main" class="site-main" role="main">
        <div class="content-products container">
          
        
            <?php /* Start the Loop */ ?>
            <?php while (have_posts($products)) :the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
          <header class="entry-header-product">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail( 'small' ); ?>
            <?php endif; ?>

            <?php the_title( sprintf( '<h2 class="entry-title-product"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),".........$" . CFS()->get( 'price' ) . '</a></h2>' ); ?>

            <?php if ('post' === get_post_type()) : ?>

            <?php endif; ?>
          </header><!-- .entry-header -->

          <div class="entry-content">
            
          </div><!-- .entry-content -->
        </article><!-- #post-## -->


            <?php endwhile; ?>
            </main>
            </div>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>
