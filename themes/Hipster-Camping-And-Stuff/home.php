<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php include 'template-parts\\content.php'; ?>
  <a href="">Read More</a>
<?php endwhile; // End of the loop. ?>

 <?php get_sidebar(); ?>

<?php get_footer(); ?>