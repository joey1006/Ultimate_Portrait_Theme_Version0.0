<!doctype html>
<html>
    <head>
        <meta charset="<?php bloginfo( 'char' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>

        <?php wp_head(); ?>

        <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
        <link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap-grid.min.css" rel="stylesheet">
        <link href="<?php echo get_bloginfo('template_directory'); ?>/scss/main.css" rel="stylesheet">
    </head>

    <body>

          <div class="navigation">
            <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <?php
                   // $nav = query_posts(array(
                   //     'post_type' => 'portrait',
                   //     'showposts' => end($nav)
                   // ) );
                    ?>
                    <?php while (have_posts()) : the_post(); ?>
                          <h2 class="portrait_title">The latest Portrait</h2>
                            <a href="<?php the_permalink(); ?>">
                            <div class="nav_image_portait" style="background-image: url('<?php the_field('portrait_image')?>');"></div>
                            <p><?php the_field('portrait_title'); ?></p>
                          </a>
                  <?php endwhile; ?>
                  </div>
                  <div class="col-md-4">
                      <?php wp_nav_menu(); ?>
                      <div class="socialMedia">
                        <a href="#"><img class="sm_Logo" src="http://localhost/wordpress_ownthema/wordpress-5.1.1-nl_NL/wordpress/wp-content/uploads/2019/05/facebook-logo.png"></a>
                        <a href="#"><img class="sm_Logo" src="http://localhost/wordpress_ownthema/wordpress-5.1.1-nl_NL/wordpress/wp-content/uploads/2019/05/facebook-logo.png"></a>
                        <a href="#"><img class="sm_Logo" src="http://localhost/wordpress_ownthema/wordpress-5.1.1-nl_NL/wordpress/wp-content/uploads/2019/05/facebook-logo.png"></a>
                      </div>
                  </div>
                  <div class="col-md-4"></div>


                    <div class="col-md-4"></div>
                      <div class="col-md-4"></div>
                  <div class="col-md-4">
                    <h3> Contact</h3>
                    <p>06 12 34 56 78</p>
                    <p>daniel.jeremy@email.com</p>
                  </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-8">  <p>kvk: BV15785KHGU448767 | All rights resevered by daniel jeremy naad art works &copy; <?php echo date("Y"); ?></p></div>
                    <div class="col-md-2"></div>
                </div>
              </div>
            </div>
        <?php //wp_nav_menu(array('theme_location'=>'primary'));  ?>
    <div class="hamburger hamburger--slider">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </div>
