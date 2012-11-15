<div class="post">
  <div class="head">
    <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <div class="meta">
      <div class="actions">
        <span class="share">
          <a href="" class="tweet">Tweet</a>
          <a href="" class="facebook">Share</a>
        </span>
        <span class="comments"><a href="<?php the_permalink(); ?>">Comments</a></span>
      </div>
      <div class="byline"><?php the_author(); ?> – <?php echo get_the_date(); ?> <?php echo get_the_time(); ?></div>
    </div>
  </div>
  <div class="content">
    <?php the_content();?>
  </div><!-- end .post .content -->
</div><!-- end .post -->