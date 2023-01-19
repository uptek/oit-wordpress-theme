<?php
  $episode_title = get_field('group_episode_title', 'option');
  $episode_description = get_field('group_episode_description', 'option');
  $episode_code = get_field('group_episode_embed_code', 'option');

  if ($episode_title || $episode_description || $episode_code) :
  ?>
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <div class="latest__block">
          <?php
            ja_the_field('group_episode_title', '<h1 class="latest__block--title">', '</h1>', '', true);
            ja_the_field('group_episode_description', '<p>', '</p>', '', true);
            ja_the_field('group_episode_embed_code', '<div class="episode-iframe">', '</div>', '', true);
          ?>
        </div>
      </div>
    </div>
<?php endif; ?>