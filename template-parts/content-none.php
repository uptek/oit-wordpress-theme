<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package One_in_ten
 */

?>

<section class="no-results not-found">
	<div class="container text-center">
		<h1 class="page-title"><?php esc_html_e('No Content Found', 'one-in-ten'); ?></h1>

		<div class="page-content">
			<p class="py-3"><?php _e('Currently there is no information on this page. Please come back later.', 'one-in-ten'); ?></p>
		<div class="learn-more-wrap">
      <a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name'); ?>" class="layout-btn"><?php _e('Back to Home', 'one-in-ten'); ?></a>
    </div>
		</div><!-- .page-content -->
	</div>
</section><!-- .no-results -->