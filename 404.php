<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package One_in_ten
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found py-5">
		<div class="container text-center">


			<h1 class="page-title"><?php esc_html_e('404 not found.', 'one-in-ten'); ?></h1>

			<div class="page-content">
				<p class="py-3"><?php _e('It looks like nothing was found at this location.', 'one-in-ten'); ?></p>
				<div class="learn-more-wrap">
					<a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>" class="layout-btn"><?php _e('Back to Home', 'one-in-ten'); ?></a>
				</div>

			</div><!-- .page-content -->
		</div>
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
