<!doctype html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="<?php bloginfo( 'char' ); ?>" />
  <title>
    <?php wp_title(); ?>
  </title>
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
      <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
      <link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap-grid.min.css" rel="stylesheet">
      <link href="<?php echo get_bloginfo('template_directory'); ?>/js/slick/slick.css" rel="stylesheet">
      <link href="<?php echo get_bloginfo('template_directory'); ?>/js/slick/slick-theme.css" rel="stylesheet">
      <link href="<?php echo get_bloginfo('template_directory'); ?>/scss/main.css" rel="stylesheet">
      <link href="<?php echo get_bloginfo('template_directory'); ?>/css/lightbox.min.css" rel="stylesheet"> </head>

<body>
  <script>
    if (localStorage.getItem("dark-theme") === "enabled") {
      document.documentElement.setAttribute('data-theme', 'dark');
    }
    else {
      document.documentElement.setAttribute('data-theme', 'light');
    }
  </script>
  <div class="page-wrap">
    <div class="icon-bar"> <a href="#" id="button" class="close"><i class="fas fa-times"></i></a> <a href="https://www.facebook.com/DanielJeremydeJong" target="_blank" class="facebook"><i class="fab fa-facebook-square"></i></a> <a href="https://www.instagram.com/danieljeremy.naad/?hl=en" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a> <a href="https://www.linkedin.com/in/daniel-jeremy-9453394/" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a>


<!--     <a href="#popup1" class="share"><i class="fas fa-share-alt"></i></a>-->

          <a class="share"><i class="fas fa-share-alt"></i></a>


      <!--  <a href="#" ><i class="fas fa-adjust"></i></a>-->
      <input class="container_toggle" type="checkbox" id="switch" name="mode">
      <label for="switch">Toggle</label>
    </div>
    <div class="navigation">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <?php $featured = array(
                            'post_type' => 'portrait',
                            'showposts' => 1
                        );
                        $the_query = new WP_Query( $featured );

                        if( $the_query->have_posts() ): ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <h2 class="portrait_title">Latest portrait</h2> <a href="<?php the_permalink(); ?>">
                            <div class="nav_image_portait" style="background-image: url('<?php the_field('portrait_image')?>');"></div>
                            <p class="menu-color"><?php the_field('portrait_title'); ?></p>
                        </a>
                <?php endwhile; ?>
                  <?php endif; ?>
                    <?php wp_reset_query();?>
          </div>
          <div class="col-md-4 menu-center">
            <div class="container">
              <?php wp_nav_menu(); ?>
        <a href="https://www.facebook.com/DanielJeremydeJong" target="_blank"><i class="i-size fab fa-facebook-square"></i></a> <a href="https://www.instagram.com/danieljeremy.naad/?hl=en" target="_blank"><i class="i-size fab fa-instagram"></i></a> <a href="https://www.linkedin.com/in/daniel-jeremy-9453394/" target="_blank"><i class="i-size fab fa-linkedin"></i></a> </div>
          </div>
          <div class="col-md-4">
            <div class="menu-contact">
              <h3> Contact</h3> <a href="tel:+31614489594" class="menuTXT">+316 14 48 95 94</a> <a href="mailto:daan@naadartworks.com" class="menuTXT">daan@naadartworks.com</a> </div>

          </div>
        </div>
      </div>
      <div class="contact-kvk">
        <p class="kvk">kvk: 34334396 | All Daniel Jeremy from Naad Artworks &copy;
          <?php echo date("Y"); ?> All rights reserved</p>
      </div>
    </div>
    <?php //wp_nav_menu(array('theme_location'=>'primary'));  ?>
      <div id="hamburger" class="hamburger hamburger--slider"> <span class="hamburger-box">
        <span class="hamburger-inner"></span> </span>
      </div>
    <div class="light"> </div>

<div id="popup1" class="overlay">
	<div class="popup">
	<p class="pop-up-txt">Share this page</p>
		<a class="close2" href="#">&times;</a>
		<div class="">
<ul class="share-buttons">
  <li><a href="https://www.facebook.com/sharer/sharer.php?u=&quote=" target="_blank" title="Share on Facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(document.URL) + '&quote=' + encodeURIComponent(document.URL)); return false;"><i class="fab fa-facebook-square fa-2x" aria-hidden="true"></i><span class="sr-only">Share on Facebook</span></a></li>
  <li><a href="https://twitter.com/intent/tweet?source=&text=:%20" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(document.title) + ':%20' + encodeURIComponent(document.URL)); return false;"><i class="fab fa-twitter-square fa-2x" aria-hidden="true"></i><span class="sr-only">Tweet</span></a></li>
  <li><a href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" target="_blank" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + encodeURIComponent(document.URL) + '&title=' +  encodeURIComponent(document.title)); return false;"><i class="fab fa-linkedin fa-2x" aria-hidden="true"></i><span class="sr-only">Share on LinkedIn</span></a></li>
  <li><a href="mailto:?subject=&body=:%20" target="_blank" title="Send email" onclick="window.open('mailto:?subject=' + encodeURIComponent(document.title) + '&body=' +  encodeURIComponent(document.URL)); return false;"><i class="fas fa-envelope-square fa-2x" aria-hidden="true"></i><span class="sr-only">Send email</span></a></li>
</ul>		</div>
	</div>
</div>
