<section <?php ja_section_id(); ?> class="layout-<?php echo get_query_var( 'layout_index' ); ?> banner <?php the_sub_field('section_classes');?>">
 <?php
 $bg_image = get_sub_field( 'background_image');
 ?>

<span style= "background-image: url(<?php echo ja_get_attachment( $bg_image['desktop'], 'full' ); ?>)" class="banner-bg"></span>
<span style= "background-image: url(<?php echo ja_get_attachment( $bg_image['mobile'], 'full' ); ?>)" class="banner-mobile"></span>
  <div class="container">
    <div class="banner-caption">
      <?php
        ja_the_field( 'title', '<h1>', '</h1>', true );
        ja_the_field( 'post_title', '<h2>', '</h2>', true );
        ja_the_field( 'description', '<p>', '</p>', true );

        $link = get_sub_field( 'button' );
      ?>
      <div class="learn-more-wrap">
        <a href="<?php echo $link['url']; ?>" class="layout-btn layout-btn-yellow" target = "<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
      </div>

    </div>
  </div>
</section>