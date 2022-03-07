<?php
if (!is_admin()) {
  require_once(ABSPATH . 'wp-admin/includes/post.php');
}
?>

<div id="core-values-container" class="container">
  <h2>Core Values</h2>

  <h3>Education</h3>

  <div class="flex-container">
    <div class="flex-item container">
      <img src="<?php

      if (get_theme_mod('reiser-education-image-1')) {
        echo wp_get_attachment_url(get_theme_mod('reiser-education-image-1'));
      } else {
        echo 'https://reiserrelief.org/resources/images/about/work/education.jpg';
      }

      ?>" alt="Education">
    </div>

    <div class="flex-item">
      <p>
        <?php
        $post_id = post_exists('Education Block 1');

        if ($post_id > 0) {
          $queried_post = get_post($post_id);
          echo $queried_post->post_content;
        }
        ?>
      </p>
    </div>

    <div class="flex-item row-2 container">
      <img src="<?php

      if (get_theme_mod('reiser-education-image-2')) {
        echo wp_get_attachment_url(get_theme_mod('reiser-education-image-2'));
      } else {
        echo 'https://reiserrelief.org/resources/images/about/work/agriculture.jpg';
      }

      ?>" alt="Education">
    </div>

    <div class="flex-item row-1">
      <p>
        <?php
        $post_id = post_exists('Education Block 2');

        if ($post_id > 0) {
          $queried_post = get_post($post_id);
          echo $queried_post->post_content;
        }
        ?>
      </p>
    </div>

  </div>

  <h3>Elder & Disabled Care</h3>

  <div class="flex-container">
    <div class="flex-item container">
      <img src="<?php

      if (get_theme_mod('reiser-care-image-1')) {
        echo wp_get_attachment_url(get_theme_mod('reiser-care-image-1'));
      } else {
        echo 'https://reiserrelief.org/resources/images/about/work/care.jpg';
      }

      ?>" alt="Elder & Disabled Care">
    </div>

    <div class="flex-item">
      <p>
        <?php
        $post_id = post_exists('Care Block 1');

        if ($post_id > 0) {
          $queried_post = get_post($post_id);
          echo $queried_post->post_content;
        }
        ?>
      </p>
    </div>

    <div class="flex-item row-2 container">
      <img src="<?php

      if (get_theme_mod('reiser-care-image-2')) {
        echo wp_get_attachment_url(get_theme_mod('reiser-care-image-2'));
      } else {
        echo 'https://reiserrelief.org/resources/images/about/work/employment.jpg';
      }

      ?>" alt="Elder & Disabled Care">
    </div>

    <div class="flex-item row-1">
      <p>
        <?php
        $post_id = post_exists('Care Block 2');

        if ($post_id > 0) {
          $queried_post = get_post($post_id);
          echo $queried_post->post_content;
        }
        ?>
      </p>
    </div>

  </div>

</div>
