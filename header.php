<!doctype html>
<html lang="en">
<head>
	<title><?php global $page, $paged;	wp_title( '-', true, 'right' );	echo "Dean's Notes";	?></title><meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1; user-scalable=1;" />
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>?v=19" />
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"> </script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js?v=6"> </script>
  <noscript>
    <style type="text/css">
      .post img {
        opacity:1;;
      }
    </style>
  </noscript>

	<meta property="og:site_name" content="Dean's Notes" />
	<meta property="fb:admins" content="1219680052" />
	<link rel="apple-touch-icon" href=""/>
	<?php if(get_post_meta($post->ID, 'headers', true)){ echo get_post_meta($post->ID, 'headers', true); } ?>
  
<?php if(is_single()): ?>
	<meta property="og:type" content="article" />
	<meta itemprop="name" content="<?php the_title(); ?>" />
	<meta itemprop="headline" content="<?php the_title(); ?>" />
	<meta property="og:title" content="<?php the_title(); ?>" />
	<meta itemprop="author" content="<?php the_author_meta('display_name'); ?>" />
	<meta itemprop="description" content="<?php echo htmlspecialchars(strip_tags(get_the_excerpt()), ENT_QUOTES); ?>" />
	<meta property="og:description" content="<?php echo htmlspecialchars(strip_tags(get_the_excerpt()), ENT_QUOTES); ?>" />
	<link itemprop="url" href="<?php the_permalink(); ?>" />
	<meta property="og:url" content="<?php the_permalink(); ?>" />
  
  <?php $first_img = get_first_image_url(); ?>
  <?php if($first_img != ''): ?>
    <link itemprop="thumbnailUrl" href="<?php echo $first_img; ?>" />
    <meta property="og:image" content="<?php echo $first_img; ?>" />
  <?php endif; ?>

<?php else: ?>
  
<?php endif; ?>

<?php wp_head(); //plugins break if not left in ?>

</head>

<body>

  <div id="container">
    <div id="header">
      <div class="alpha" style="width:40%; padding-right:20px; padding-top:60px; float:left; text-align:left">
        <a href="http://deanputney.com">Dean Putney</a>
        <hr>
        <a href="https://twitter.com/red_scott/status/264431125265514497">Everyone's favorite Manic Pixie Dream Coder</a>
      </div>
      
      <div class="beta" style="width:40%; padding-left:20px; padding-top:60px; float:right; text-align:right">
        San Francisco
        <hr>
        <a href="http://twitter.com/deanputney">Follow me on Twitter, ya dingus</a>
      </div>
      <a href="<?php bloginfo('home'); ?>"><div class="circle"></div></a>
      <br/>
    </div>