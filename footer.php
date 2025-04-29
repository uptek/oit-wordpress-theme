<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package One_in_ten
 */

?>
</main>
<footer id="footer">
	<div class="container-lg">
		<div class="ftr-row">
			<div class="ftr-block contains-logo">
				<div class="ftr-logo">
					<a href="#oit-body">
						<img src="<?php echo get_template_directory_uri() .  '/assets/images/logo.jpg' ?>" alt="<?php _e( 'One in Ten Logo', 'one-in-ten' );?>">
					</a>
				</div>
				<?php ja_the_field('group_footer_description', '<p>','</p>', '', true); ?>

					<ul class="social-icons">
						<?php  while ( have_rows( 'group_footer_social_profiles' , 'option') ) : the_row();?>
							<li>
								<a href="<?php echo get_sub_field( 'url' ); ?>" aria-label="<?php echo get_sub_field('network') . ' link for ' . get_bloginfo('name'); ?>">
								<?php get_template_part( 'template-parts/svg/svg', get_sub_field('network') ); ?>
								</a>
							</li>
						<?php endwhile; ?>
					</ul>
			</div>

			<div class="ftr-block navigate">
			<?php ja_the_field( 'group_footer_menu_title', '<h3 class="block-title">', '</h3>', '', true); ?>

				<?php
					if ( has_nav_menu( 'footer-menu' ) ) {
						wp_nav_menu(array(
							'theme_location'   => 'footer-menu',
							'menu_class'		   => 'naviagte-link-list',
							'container'  => '',
						));
					}
				?>

			</div>
			<div id="contact" class="ftr-block contact-info">
			<?php ja_the_field( 'group_footer_contact_title', '<h3 class="block-title">', '</h3>', '', true); ?>
				<ul class="contact-info-list">
				<?php
					while( have_rows( 'group_footer_contact_information', 'option' ) ) :
						the_row();
						$type = get_sub_field( 'type' );
				?>
					<li>
						<span class="icon">
							<?php get_template_part( 'template-parts/svg/svg', $type ); ?>
						</span>

						<?php if ( $type == 'map' ) { ?>
							<a href="<?php echo get_sub_field( 'map_link' )?>"><?php echo get_sub_field( 'address' )?></a>

						<?php
							}
							elseif ( $type == 'phone' ) {
						?>
							<a href="tel:<?php echo get_sub_field( 'phone' )?>"><?php echo get_sub_field( 'phone' )?></a>

						<?php
							}
							else {
								if( $type == 'email' ) {
						?>
								<a href="mailto:<?php echo get_sub_field( 'email' )?>"><?php echo get_sub_field( 'email' )?></a>
						<?php
							}
						}
						?>
					</li>
				<?php endwhile; ?>
				</ul>
			</div>
		</div>
		<div class="ftr-bottom">
			<div class="nca-logo-wrap">
				<span><?php _e( 'A campaign of', 'one-in-ten' ); ?></span>

				<a href="<?php echo esc_url('https://www.nationalchildrensalliance.org/'); ?>">
					<img src="<?php asset_path( 'images/nca-logo.svg', true ); ?>" alt="<?php _e( 'National Children\'s Alliance logo', 'one-in-ten' );?>">
				</a>
			</div>
			<div class="copyrights">
				<p>&copy; <?php echo date( 'Y' ); ?> <?php _e( 'National Children\'s Alliance.', 'one-in-ten' ); ?></p>
			</div>
      <div class="credits">
        <p>
          <?php _e( 'Designed by', 'one-in-ten' ); ?>
          <a href="https://uptek.com/" target="_blank">
            <?php _e( 'Uptek', 'one-in-ten' ); ?>
          </a>
        </p>
      </div>
		</div>
	</div>
</footer>
<!-- Footer Ends Here  -->

<?php wp_footer(); ?>
</body>

</html>