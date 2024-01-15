<?php get_header(); ?>

<body>

<section>
  <nav class="custom_menu_class">
    <?php wp_nav_menu(array(
      'theme_location' => 'custom_menu',
      'menu_class' => 'custom_menu_list'
    )); ?> 
  </nav> 

  <article>
    </article>
</section> 

<hr>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <p><?php the_content(); ?></p>
  <hr>

<?php endwhile; endif; ?>

<div class="main-2">
  <div class="sidebar">
    </div>
  <div class="sidebar-display">
    <?php get_sidebar(); ?>
</div>
</div>

<div class="sessions">
  <?php
    $sessions = new WP_Query(array(
      'post_type' => 'sessions',
      'posts_per_page' => -1,
    ));
    while ($sessions->have_posts()): $sessions->the_post();
  ?>
    <a href="<?php the_permalink(); ?>"><h3><?php echo get_the_title(); ?></h3></a>
    <p><?php echo get_the_excerpt(); ?></p>
    <?php echo get_the_date(); ?>
    <?php echo get_the_author(); ?>
    <hr>
  <?php endwhile; ?>
</div>

<?php get_footer(); ?>

</body>
</html>
