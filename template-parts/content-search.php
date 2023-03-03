<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package One_in_ten
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(['row','align-items-center','py-4']); ?>>
  <div class="col-md-3">
    <div class="episode__thumbnail">
      <a href="<?php echo get_permalink( get_the_ID() ); ?>">
        <img src="<?php has_post_thumbnail() ? the_post_thumbnail_url() : asset_path( '/images/logo.jpg', true ); ?>" alt="<?php the_title(); ?>">
      </a>
    </div>
  </div>
  <div class="col-md-9">
    <div class="episode__meta">
      <?php
        $episode_number = get_field( 'episode_number' );
        get_template_part( 'template-parts/meta/episode', 'taxonomy', ['taxonomy' => 'episode-category', 'episode_number' => $episode_number ] );
      ?>
    </div>
    <div class="episode__content">
      <?php the_title( sprintf( '<h2 class="episode__content--title""><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
      <div class="episode__content--excerpt"><?php echo custom_field_excerpt(); ?></div>
      <a href="<?php the_permalink( get_the_ID() ); ?>" class="episode__link"><?php _e( 'Read More', 'one-in-ten' ); ?></a>
    </div>
  </div>
</article>

