<?php $header_tag = get_sub_field('header_tag'); ?>
<section <?php ja_section_id(); ?> class="layout-<?php echo get_query_var('layout_index'); ?> subscribe <?php echo get_sub_field('section_classes'); ?>">
  <div class="container">
    <div class="subscribe-content">
      <?php
        if (get_sub_field('type') == 'latest') {
          ja_the_field('group_episode_title', '<h3 class="congested">', '</h3>', '', true);
          ja_the_field('group_episode_description', '<p>', '</p>', '', true);
          ja_the_field('group_episode_embed_code', '<div class="episode-iframe">', '</div>', '', true);
        }
        else {
          ja_the_field('title', "<{$header_tag} class=\"congested\">", "</{$header_tag}>", true);
      ?>
        <div class="subscribe-links">
          <?php while (have_rows('podcast_list')) : the_row();  ?>
            <a target="_blank" href="<?php echo get_sub_field('url'); ?>">
              <?php get_template_part('template-parts/svg/icon', get_sub_field('icon')); ?>
            </a>
          <?php endwhile; ?>

        </div>
      <?php
        }
      ?>
    </div>
  </div>
</section>