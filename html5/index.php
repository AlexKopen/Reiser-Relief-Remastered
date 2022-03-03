<?php get_header(); ?>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php require 'page-content/home/banner.php';?>
<?php require 'page-content/home/info.php';?>
<?php require 'page-content/home/newsletter.php';?>
<?php require 'page-content/home/feed.php';?>

<?php get_footer(); ?>
