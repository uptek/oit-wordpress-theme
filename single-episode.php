<?php

/**
 * Template for single Episodes
 */
get_header();

?>

<section class="episode__single">

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="episode__single-block">
          <?php the_title('<h1 class="episode__single-title">', '</h1>'); ?>

          <div class="episode__single--meta pt-2">
            <?php
            $episode_number = get_field('episode_number');
            get_template_part('template-parts/meta/episode', 'taxonomy', ['taxonomy' => 'episode-category',  'episode_number' => $episode_number]);
            ?>
          </div>

          <div class="episode__single-content episode-iframe">
            <?php the_field('embed_code'); ?>
          </div>

          <?php if (have_rows('podcast_list')) : ?>
            <div class="episode__single-social">
              <p class="tag-title"><?php _e('LISTEN ON', 'one-in-ten'); ?></p>
              <div class="card-icon">
                <?php while (have_rows('podcast_list')) : the_row(); ?>
                  <a href="<?php the_sub_field('url'); ?>" target="_blank" class="card-icon--svg">
                    <?php get_template_part('template-parts/svg/icon', get_sub_field('icon')); ?>
                  </a>
                <?php endwhile; ?>
              </div>
            </div>
          <?php endif; ?>

          <?php if (!empty(get_field('episode_summary'))) : ?>
            <div class="episode__single-summary">
              <?php the_field('episode_summary'); ?>
            </div>
          <?php endif; ?>

          <?php if (has_term('', 'episode-tag', get_the_ID())) : ?>
            <div class="episode__single-tags pt-0">
              <p class="tag-title"><?php _e('Tags', 'one-in-ten'); ?></p>
              <?php get_template_part('template-parts/meta/episode', 'taxonomy', ['taxonomy' => 'episode-tag']); ?>
            </div>
          <?php endif; ?>

          <?php while (have_rows('group_content')) : the_row(); ?>
            <div class="episode__single-tabs">
              <div class="tabbed-content">
                <!--Tabbed navigation-->
                <ul class="tabs">
                  <li class="tab-link current" data-tab="notes-tab"><?php the_sub_field('notes_title'); ?></li>
                  <li class="tab-link" data-tab="transcript-tab"><?php the_sub_field('transcript_title'); ?></li>
                </ul>
                <!--Wrapper to contain interchanging content-->
                <div class="tabs-wrapper">
                  <div id="notes-tab" class="tab-content current">
                    <?php !empty(get_sub_field('notes_content')) ?  the_sub_field('notes_content') : _e('No notes found', 'one-in-ten'); ?>
                  </div>
                  <div id="transcript-tab" class="tab-content">
                    <?php !empty(get_sub_field('transcript_content')) ?  the_sub_field('transcript_content') : _e('No transcript found', 'one-in-ten'); ?>
                  </div>
                </div>
              </div>
            </div>

          <?php endwhile; ?>

        </div>

      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>