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
  'post_type' => array('post', 'page', 'episode' ),
  'post_status' => 'publish',
  'posts_per_page' => -1,
  's' => $search_term,
  // 'meta_query' => array(
  //   'relation' => 'OR',
  //   array(
  //     'key' => 'group_content_notes_content',
  //     'value' => $search_term,
  //     'compare' => 'LIKE'
  //   ),
  //   array(
  //     'key' => 'group_content_transcript_content',
  //     'value' => $search_term,
  //     'compare' => 'LIKE'
  //   ),
  //   array(
  //     'key' => 'blocks_3_description',
  //     'value' => $search_term,
  //     'compare' => 'LIKE'
  //   ),
  //   array(
  //     'key' => 'blocks_1_content',
  //     'value' => $search_term,
  //     'compare' => 'LIKE'
  //   ),

  //   array(
  //     'key' => 'blocks_5_content',
  //     'value' => $search_term,
  //     'compare' => 'LIKE'
  //   ),
  //   array(
  //     'key' => 'episode_summary',
  //     'value' => $search_term,
  //     'compare' => 'LIKE'
  //   ),
  //   array(
  //     'key' => 'blocks_0_title',
  //     'value' => $search_term,
  //     'compare' => 'LIKE'
  //   ),
  //   array(
  //     'key' => 'blocks_0_post_title',
  //     'value' => $search_term,
  //     'compare' => 'LIKE'
  //   ),
  //   array(
  //     'key' => 'blocks_0_content',
  //     'value' => $search_term,
  //     'compare' => 'LIKE'
  //   ),
  //   array(
  //     'key' => 'blocks_1_title',
  //     'value' => $search_term,
  //     'compare' => 'LIKE'
  //   ),
  // )
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

$search = array_unique( array_merge( $title_query->posts, $tax_query->posts ), SORT_REGULAR );
?>
<section class="episode search-results">
  <div class="container">

		<?php if( $search ) : ?>
      <h1 class="latest__block--title search">
         <!-- translators: %s: search query.  -->
        <?php printf( esc_html__( 'Search Results for: %s', 'one-in-ten' ), '<span>' . get_search_query() . '</span>' ); ?>
      </h1>
      <div id="episode-search-results">
      <?php
        $count = 0;

        foreach($search as $searched_item ){
          get_template_part( 'template-parts/content', 'search' , [ 'post_id' => $searched_item->ID ] );
          $count++;
        }

        wp_reset_postdata();
    ?>
      </div>
    <div class="row align-items-center">
      <div class="col-sm-12">
        <div class="episode__navigation">
        <button id="load-more-results" class="layout-btn text-center mx-auto"><?php _e('Load More', 'one-in-ten' ); ?></button>
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


