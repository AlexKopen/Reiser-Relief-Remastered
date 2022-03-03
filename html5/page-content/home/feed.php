<div id="feed-container" class="container">
  <h2>News & Events</h2>

  <?php query_posts('posts_per_page=5'); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="event">
      <h3 class="no-margin"><?php echo(the_title()); ?></h3>
      <p class="date no-margin"><?php echo(the_date()); ?></p>
      <div class="text"><?php echo(the_content()); ?>
      </div>
    </div>

  <?php endwhile; endif; ?>

</div>
