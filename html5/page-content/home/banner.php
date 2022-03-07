<div id="banner-container">
  <div id="banner-content">
    <div id="banner-image" class="banner-item">
      <img src="<?php

      if (get_theme_mod('reiser-home-banner-image')) {
        echo wp_get_attachment_url(get_theme_mod('reiser-home-banner-image'));
      } else {
        echo 'https://reiser-relief-test.web.app/assets/images/home/impact-slide.jpg';
      }

      ?>" alt="Reiser Relief, Inc.">

    </div>
    <div id="banner-text" class="banner-item container">
      <h1><?php echo get_theme_mod('reiser-home-banner-headline') ?></h1>
      <p>
        <?php echo get_theme_mod('reiser-home-banner-text') ?>
      </p>
      <a href="/donate">
        <button><?php echo get_theme_mod('reiser-home-banner-button-text') ?></button>
      </a>
    </div>
  </div>
</div>
