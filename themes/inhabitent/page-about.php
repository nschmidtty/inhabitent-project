<?php
/**
 * The template for displaying all pages.
 * Template Name: About template
 * @package RED_Starter_Theme
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="about-header">
                        <?php the_title( '<h1 class="about-title">', '</h1>' ); ?>
                    </header><!-- .entry-header -->
                <div class="container">
                  <h1>Our Story</h1>
									<p><?php echo CFS()->get( 'our_story' ); ?></p>
                  <h1>Our Team</h1>
									<p><?php echo CFS()->get( 'our_team' ); ?></p>
                </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_footer(); ?>
