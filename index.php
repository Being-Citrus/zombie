<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

  <?php // Start the loop.
			while ( have_posts() ) : the_post(); ?>

      <h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>
      <p><?php the_content(); ?></p>

  <?php // End the loop.
      endwhile; ?>

  <?php else : ?>

  <?php endif; ?>
<?php get_footer(); ?>
