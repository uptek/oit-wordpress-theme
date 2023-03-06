<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package One_in_ten
 */

get_header();

$search_term = $_GET['s'];
$title_args = array(
  'post_type' => 'episode',
  'post_status' => 'publish',
  'posts_per_page' => -1,
  's' => $search_term,
);

$title_query = new WP_Query($title_args);

$tax_args = array(
  'post_type' => 'episode',
  'post_status'    => 'publish',
  'posts_per_page' => -1,
  'tax_query' => array(
    'relation' => 'OR',
    array(
      'taxonomy' => 'episode-tag',
      'field' => 'slug',
      'terms' => $search_term,
    ),
    array(
      'taxonomy' => 'episode-category',
      'field' => 'slug',
      'terms' => $search_term,
    ),

    ),
);

$tax_query = new WP_Query($tax_args);

// Remove duplicates
$search = new WP_Query();
$search->posts = array_unique( array_merge( $title_query->posts, $tax_query->posts ), SORT_REGULAR );
$search->post_count = count( $search->posts );
?>
<section class="episode search-results">
  <div class="container">

		<?php if( $search->have_posts() ) : ?>
      <h1 class="latest__block--title search">
         <!-- translators: %s: search query.  -->
        <?php printf( esc_html__( 'Search Results for: %s', 'one-in-ten' ), '<span>' . get_search_query() . '</span>' ); ?>
      </h1>
      <div id="episode-search-results">
      <?php
        $count = 0;
        while ( $search->have_posts() ) :
          $search->the_post();
          get_template_part( 'template-parts/content', 'search' );
          $count++;
        endwhile;
    ?>
      </div>
    <div class="row align-items-center">
      <div class="col-sm-12">
        <div class="episode__navigation">
        <button id="load-more-results" class="layout-btn text-center mx-auto">Load More</button>
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


