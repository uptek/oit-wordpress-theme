<section <?php ja_section_id(); ?> class="layout-<?php echo get_query_var('layout_index'); ?> hero-content <?php echo get_sub_field('section_classes'); ?>">
  <div class="hero-content-inner">
    <div class="hero-content-text">
      <?php
        ja_the_field('title', '<h2 class="hero-content-title">', '</h2>', true);
        ja_the_field('description', '<p>', '</p>', true);

        $link = get_sub_field('button');
      ?>
      <?php if ($link): ?>
        <div class="learn-more-wrap">
          <a href="<?php echo esc_url($link['url']); ?>" class="layout-btn layout-btn-dark text-center" target="<?php echo esc_attr($link['target']); ?>"><?php echo esc_html($link['title']); ?></a>
        </div>
      <?php endif; ?>
    </div>

    <?php if ($image = get_sub_field('image')): ?>
      <div class="hero-content-media">
        <?php echo wp_get_attachment_image($image, 'full', false, ['class' => 'hero-content-image']); ?>
      </div>
    <?php endif; ?>
  </div>
</section>
