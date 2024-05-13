<section <?php ja_section_id(); ?> class="layout-<?php echo get_query_var('layout_index'); ?> shine-campaign <?php echo get_sub_field('section_classes'); ?>">
  <div class="shine-campaign-inner container-lg">
    <div class="shine-campaign-thumbnail">
      <div class="shine-campaign-image">
        <?php ja_get_attachment(get_sub_field('image'), 'host', 'img-fluid', true); ?>
      </div>
    </div>
    <div class="shine-campaign-content">
      <div class="campaign-content-wrap">
        <?php
          ja_the_field('title', '<h3 class="congested text-left">', '</h3>', true);
          ja_the_field('description', '<p>', '</p>', true);

          $link = get_sub_field('button')
        ?>
        <div class="learn-more-wrap text-left">
          <a href="<?php echo $link['url']; ?>" class="layout-btn text-center" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>