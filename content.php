<div class="post">
  <h1 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <div class="content">
    <?php the_content();?>
  </div><!-- end .post .content -->
  <div class="meta">
    <div class="actions">
      <span class="share">
        Share: 
        <a href="http://twitter.com/share?url=<?php the_permalink(); ?>" class="tweet">Tweet</a>
        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" class="facebook">Facebook</a>
      </span>
      <span class="comments"><a href="<?php the_permalink(); ?>">Comments</a></span>
    </div>
    <div class="byline"><?php echo get_the_date(); ?> <?php echo get_the_time(); ?></div>
  </div>
</div><!-- end .post -->