<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package One_in_ten
 */


 $post_id = $args['post_id'];
?>
<article id="post-<?php echo $post_id; ?>" <?php post_class(['row','align-items-center','py-4', 'founded-post']); ?>>
  <div class="col-md-3">
    <div class="episode__thumbnail">
      <a href="<?php echo get_permalink( $post_id ); ?>">
        <img src="<?php echo has_post_thumbnail($post_id) ? get_the_post_thumbnail_url($post_id) : asset_path( '/images/logo.jpg' ); ?>" alt="<?php echo get_the_title($post_id); ?>">
      </a>
    </div>
  </div>
  <div class="col-md-9">
    <div class="episode__meta">
      <?php
        $episode_number = get_field( 'episode_number', $post_id );
        get_template_part( 'template-parts/meta/episode', 'taxonomy', ['taxonomy' => 'episode-category', 'episode_number' => $episode_number, 'post_id' => $post_id ] );
      ?>
    </div>
    <div class="episode__content">
      <h2 class="episode__content--title""><a href="<?php echo esc_url( get_permalink($post_id) ); ?>" rel="bookmark"><?php echo get_the_title( $post_id ); ?></a></h2>
      <div class="episode__content--excerpt"><?php echo custom_field_excerpt( $post_id ); ?></div>
      <a href="<?php the_permalink( $post_id ); ?>" class="episode__link"><?php _e( 'Read More', 'one-in-ten' ); ?></a>
    </div>
  </div>
</article>

