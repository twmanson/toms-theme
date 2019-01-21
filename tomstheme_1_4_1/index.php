<?php get_header(); ?>

<div id="main-content">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('content', get_post_format()); ?>
  <?php endwhile; ?>
    <!-- post navigation -->
  <?php else: ?>
    <?php echo 'Sorry, no posts found.' ?>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
