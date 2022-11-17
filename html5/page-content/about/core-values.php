<?php
if (!is_admin()) {
  require_once(ABSPATH . 'wp-admin/includes/post.php');
}
?>

<div id="core-values-container" class="container">
  <h2>Primary through High School Education</h2>

  <div class="flex-container">
    <div class="flex-item container">
      <img src="<?php

      if (get_theme_mod('reiser-education-image-1')) {
        echo wp_get_attachment_url(get_theme_mod('reiser-education-image-1'));
      } else {
        echo 'https://reiserrelief.org/wp-content/uploads/2022/07/cropped-CDMS-group-of-students-1-scaled-1.jpg';
      }

      ?>" alt="Education">

      <img style="margin-top: 1em" src="<?php

      if (get_theme_mod('reiser-education-image-2')) {
        echo wp_get_attachment_url(get_theme_mod('reiser-education-image-2'));
      } else {
        echo 'https://reiserrelief.org/wp-content/uploads/2022/07/cropped-CDMS-student-1-scaled-1.jpg';
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

  </div>

  <h2>Secondary Education</h2>
    <div class="flex-container">
      <div class="flex-item">
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

      <div class="flex-item container">
        <img src="<?php
        if (get_theme_mod('reiser-education-image-1-2')) {
          echo wp_get_attachment_url(get_theme_mod('reiser-education-image-1-2'));
        } else {
          echo 'https://reiserrelief.org/wp-content/uploads/2022/07/cropped-CDMS-group-of-students-1-scaled-1.jpg';
        }
        ?>" alt="Education">
      </div>
    </div>

  <h2>Elder & Disabled Care</h2>

  <div class="flex-container">
    <div class="flex-item container">
      <img src="<?php

      if (get_theme_mod('reiser-care-image-1')) {
        echo wp_get_attachment_url(get_theme_mod('reiser-care-image-1'));
      } else {
        echo 'https://reiserrelief.org/wp-content/uploads/2022/07/cropped-Sacred-Heart-home-1-scaled-1.jpg';
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
        echo 'https://reiserrelief.org/wp-content/uploads/2022/07/cropped-Sr-Evelyn-scaled-1.jpg';
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
