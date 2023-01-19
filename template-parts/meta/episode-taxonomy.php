<div class="episode__meta--category">
  <p class="post-taxonomy">
    <?php
      $taxonomy = get_the_terms(get_the_ID(), $args['taxonomy']);
      $episode_number = $args['episode_number'];
      $is_first = true;
      $output = '';
      if( ! empty( $taxonomy )){
      foreach ($taxonomy as $tax) {
        if (!$is_first) {
          $output .= ', ';
        }
        $is_first = false;
        $output .= '<a href="' . get_term_link($tax->term_id) . '">' . $tax->name . '</a>';
      }
      if ( $args['taxonomy'] == 'episode-tag' ) {
        echo $output;
      }
      else {
        $date = '<span class="date">' . get_the_date('F j, Y') . '</span>';
        echo '<span>' . $output . '</span>' . '<span class="episode_number">' . __("Episode {$episode_number}", "one_in-ten")  . '</span>' . $date;
      }
    }
    ?>
  </p>
</div>
