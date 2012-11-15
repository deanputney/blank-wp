<?php include_once('header.php'); ?>

<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
    <?php get_template_part('content', get_post_format()); ?>
  <?php endwhile; ?>
<?php endif;?>

<?php include_once('footer.php'); ?>