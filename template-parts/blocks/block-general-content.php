<?php $header_tag = get_sub_field('header_tag'); ?>
<section <?php ja_section_id(); ?> class="layout-<?php echo get_query_var('layout_index'); ?> general-content <?php echo get_sub_field('section_classes'); ?>">
  <div class="container">
    <?php
      ja_the_field('title', "<{$header_tag} class=\"congested\">", "</{$header_tag}>", true);

      if( get_sub_field('type') == 'content'){
        ja_the_field('content', '<div>', '</div>', true);
      }
      else{
        ja_the_field('iframe', '<div class="iframe-block">', '</div>', true);
      }
    ?>
  </div>
</section>