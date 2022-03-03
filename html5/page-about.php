<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="about-container">
  <h1>About Us</h1>

  <?php require 'page-content/about/core-values.php'; ?>
  <div class="row-backdrop">
    <?php require 'page-content/about/board-members.php'; ?>
  </div>
  <?php require 'page-content/about/founder.php'; ?>
</div>

<?php get_footer(); ?>
