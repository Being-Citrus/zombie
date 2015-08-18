<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

  <?php // Start the loop.
			while ( have_posts() ) : the_post(); ?>
      <div class="row post-home" <?php if ( has_post_thumbnail() ) { ?> style="background-image: url('<?php $url=wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
        echo $url;
        ?>')" <?php } ?>>
        <div class="post-home-overlay">
      <h1><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h1>
        <?php the_content(); ?>
      </div>
    </div>
  <?php // End the loop.
      endwhile; ?>

  <?php else : ?>

  <?php endif; ?>
<?php get_footer(); ?>
