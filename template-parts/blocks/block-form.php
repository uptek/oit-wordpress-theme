<section <?php ja_section_id(); ?> class="layout-<?php echo get_query_var('layout_index'); ?> form <?php echo get_sub_field('section_classes'); ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">

        <?php
          ja_the_field( 'title', '<h3 class="congested pb-2">', '</h3>', true );
          if ($form_id = get_sub_field('form')) {
            echo do_shortcode('[wpforms id="' . $form_id . '" title="false" description="false"]');
          }
        ?>
      </div>
    </div>
  </div>

</section>