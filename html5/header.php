<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="<?php echo get_template_directory_uri() . '/site.webmanifest'; ?>">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() . '/icon.png'; ?>">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

  <meta name="theme-color" content="#00514d">
  <?php wp_head(); ?>
</head>

<div id="header-container">
  <div id="header-content" class="container">
    <div id="logo" class="header-item">
      <a href="/">
        <p>
          <img src="<?php echo get_template_directory_uri() . '/img/logo.png'; ?>" alt="Reiser Relief">
        </p>
      </a>
    </div>

    <div id="nav-items" class="header-item">
      <ul>
        <li>
          <a href="/">
            <div class="nav-block">
              <div class="inner-nav-block">
                Home
              </div>
            </div>
          </a>
        </li>
        <li>
          <a href="/about">
            <div class="nav-block">
              <div class="inner-nav-block">
                About
              </div>
            </div>
          </a>
        </li>
        <li>
          <a href="/donate">
            <div class="nav-block">
              <div class="inner-nav-block">
                Donate
              </div>
            </div>
          </a>
        </li>
        <li>
          <a href="/contact">
            <div class="nav-block">
              <div class="inner-nav-block no-border">
                Contact
              </div>
            </div>
          </a>
        </li>
      </ul>
    </div>

    <div id="social-icons-header" class="header-item">
      <ul>
        <li>
          <a href="https://www.facebook.com/ReiserRelief" target="_blank">
            <i class="fa-brands fa-facebook-square"></i>
          </a>
        </li>
        <li>
          <a href="https://instagram.com/reiserrelief/" target="_blank">
            <i class="fa-brands fa-instagram-square"></i>
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/user/reiserrelief" target="_blank">
            <i class="fa-brands fa-youtube"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
