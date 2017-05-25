<?php get_header(); ?>`

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

    <h1>Shop Stuff</h1>
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

            <?php /* Start the Loop */ ?>
            <?php while (have_posts($products)) :the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
          <header class="entry-header">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail( 'large' ); ?>
            <?php endif; ?>

            <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

            <?php if ('post' === get_post_type()) : ?>

            <?php endif; ?>
          </header><!-- .entry-header -->

          <div class="entry-content">
            <?php echo CFS()->get( 'price' ); ?>
          </div><!-- .entry-content -->
        </article><!-- #post-## -->


            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>
