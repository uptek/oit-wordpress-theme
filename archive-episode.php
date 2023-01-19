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
