<?php
if (!is_admin()) {
  require_once(ABSPATH . 'wp-admin/includes/post.php');
}
?>

<div id="founder-container" class="container">
  <h2>Our Founder</h2>
  <p id="quote">
    "You can't walk away from misery and do nothing."<br>
    - Father Bernard Reiser
  </p>

  <div class="flex-container">
    <div class="flex-item row-1 container">
      <img src="<?php

      if (get_theme_mod('reiser-founder-image-1')) {
        echo wp_get_attachment_url(get_theme_mod('reiser-founder-image-1'));
      } else {
        echo 'https://reiser-relief-test.web.app/assets/images/about/founder/father-reiser-1.jpg';
      }

      ?>" alt="Father Reiser">
    </div>

    <div class="flex-item row-2">
      <p>
        <?php
        $post_id = post_exists('Reiser Block 1');

        if ($post_id > 0) {
          $queried_post = get_post($post_id);
          echo $queried_post->post_content;
        }
        ?>
      </p>
    </div>

    <div class="flex-item row-4 container">
      <img src="<?php

      if (get_theme_mod('reiser-founder-image-2')) {
        echo wp_get_attachment_url(get_theme_mod('reiser-founder-image-2'));
      } else {
        echo 'https://reiser-relief-test.web.app/assets/images/about/founder/father-reiser-2.jpg';
      }

      ?>">
    </div>

    <div class="flex-item row-3">
      <p>
        <?php
        $post_id = post_exists('Reiser Block 2');

        if ($post_id > 0) {
          $queried_post = get_post($post_id);
          echo $queried_post->post_content;
        }
        ?>
      </p>
    </div>

    <div class="flex-item row-5 container">
      <img src="<?php

      if (get_theme_mod('reiser-founder-image-3')) {
        echo wp_get_attachment_url(get_theme_mod('reiser-founder-image-3'));
      } else {
        echo 'https://reiser-relief-test.web.app/assets/images/about/founder/father-reiser-3.jpg';
      }

      ?>">
    </div>

    <div class="flex-item row-6">
      <p>
        <?php
        $post_id = post_exists('Reiser Block 3');

        if ($post_id > 0) {
          $queried_post = get_post($post_id);
          echo $queried_post->post_content;
        }
        ?>
      </p>
    </div>
  </div>

</div>
