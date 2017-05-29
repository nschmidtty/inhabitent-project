<?php get_header(); ?>`

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">

				<?php
					the_archive_title('<h1>', '</h1>');
					the_archive_description( '<div class="taxonomy-description"><p>', '</p></div>' );
				?>
			</header><!-- .page-header -->
      <div id = "content-taxonomy" class = "container">
        
      
			<?php $args = array(
			'orderby' => 'title',
			'order'   => 'ASC',
			); ?>
			<?php $the_query = new WP_Query( $args ); ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			
			<article id="product-taxonomy post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header id="entry-header">
					<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail('medium'); ?>
					<?php endif; ?>

					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

					<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta">
						<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
					</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php echo CFS()->get( 'price' ); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->


			<?php endwhile; ?>
        
      </div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
