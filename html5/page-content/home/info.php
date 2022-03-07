<div class="container">
  <div id="info-container" class="flex-container">

    <!--  CORE VALUES-->
    <div class="flex-item core-values row-1">
      <div class="flex-item-wrapper">
        <h2 class="block-title"><?php echo get_theme_mod('reiser-home-info-block-1-title') ?></h2>
      </div>
    </div>

    <div class="flex-item core-values row-2">
      <div class="flex-item-wrapper">
        <img class="info-img" src="<?php

        if (get_theme_mod('reiser-home-info-block-1-image')) {
          echo wp_get_attachment_url(get_theme_mod('reiser-home-info-block-1-image'));
        } else {
          echo 'https://reiser-relief-test.web.app/assets/images/about/core-values/care.jpg';
        }

        ?>"
             alt="Give">
      </div>
    </div>

    <div class="flex-item row-3">
      <div class="flex-item-wrapper">
        <p class="description">
          <?php echo get_theme_mod('reiser-home-info-block-1-text') ?>
        </p>
      </div>
    </div>

    <div class="flex-item core-values row-4">
      <div class="flex-item-wrapper">
        <a href="/about">
          <button class="action-button">
            <?php echo get_theme_mod('reiser-home-info-block-1-button-text') ?>
          </button>
        </a>
      </div>
    </div>

    <!--  GIVE-->
    <div class="flex-item give row-1">
      <div class="flex-item-wrapper">
        <h2 class="block-title"><?php echo get_theme_mod('reiser-home-info-block-2-title') ?></h2>
      </div>
    </div>

    <div class="flex-item give row-2">
      <div class="flex-item-wrapper">
        <img class="info-img" src="<?php

        if (get_theme_mod('reiser-home-info-block-2-image')) {
          echo wp_get_attachment_url(get_theme_mod('reiser-home-info-block-2-image'));
        } else {
          echo 'https://reiser-relief-test.web.app/assets/images/about/core-values/water.jpg';
        }

        ?>"
             alt="Give">
      </div>
    </div>

    <div class="flex-item row-3">
      <div class="flex-item-wrapper">
        <p class="description">
          <?php echo get_theme_mod('reiser-home-info-block-2-text') ?>
        </p>
      </div>
    </div>

    <div class="flex-item give row-4">
      <div class="flex-item-wrapper">
        <a href="/donate">
          <button class="action-button">
            <?php echo get_theme_mod('reiser-home-info-block-2-button-text') ?>
          </button>
        </a>
      </div>
    </div>


    <!--  CONTACT-->
    <div class="flex-item contact row-1">
      <div class="flex-item-wrapper">
        <h2 class="block-title"><?php echo get_theme_mod('reiser-home-info-block-3-title') ?></h2>
      </div>
    </div>

    <div class="flex-item contact row-2">
      <div class="flex-item-wrapper">
        <img class="info-img" src="<?php

        if (get_theme_mod('reiser-home-info-block-3-image')) {
          echo wp_get_attachment_url(get_theme_mod('reiser-home-info-block-3-image'));
        } else {
          echo 'https://reiser-relief-test.web.app/assets/images/about/core-values/education.jpg';
        }

        ?>"
             alt="Contact">
      </div>
    </div>

    <div class="flex-item row-3">
      <div class="flex-item-wrapper">
        <p class="description">
          <?php echo get_theme_mod('reiser-home-info-block-3-text') ?>
        </p>
      </div>
    </div>

    <div class="flex-item contact row-4">
      <div class="flex-item-wrapper">
        <a href="/contact">
          <button class="action-button no-margin">
            <?php echo get_theme_mod('reiser-home-info-block-3-button-text') ?>
          </button>
        </a>
      </div>
    </div>

  </div>

</div>
