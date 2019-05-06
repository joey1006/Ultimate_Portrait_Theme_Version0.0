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
        <?php wp_nav_menu(array('theme_location'=>'primary'));  ?>
    </div>
