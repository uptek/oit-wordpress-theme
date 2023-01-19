<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package One_in_ten
 */

get_header();

?>
<section class="episode">
  <div class="container">
		<?php
      if( have_posts() ) :
        get_template_part( 'template-parts/meta/latest-episode' );
    ?>

    <div class="row justify-content-center pb-4">
      <?php if ( is_tax('episode-tag') ) : ?>
        <h3 class="episode-tax__title"><?php single_term_title( 'Episodes tagged as ' ); ?></h3>
      <?php else :?>
        <h3 class="episode-tax__title"><?php single_term_title( 'Episodes in ' ); ?></h3>
      <?php endif; ?>
    </div>

    <?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
		?>
    <div class="row">
      <div class="col-sm-12">
        <div class="episode__navigation">
          <?php
							previous_posts_link( __( 'Newer Episodes', 'one-in-ten' ) );
							next_posts_link( __( 'Older Episodes', 'one-in-ten' ) );
							// wp_reset_postdata();
          ?>
        </div>
      </div>
    </div>

		<?php
			else :
				get_template_part( 'template-parts/content', 'none' );
			endif;
		?>
  </div>
</section>



<?php
get_footer();
