<?php get_header(); ?>
<?php
query_posts(array(
    'post_type' => 'portrait',
    'showposts' => 10
) );
?>
<div class="container">
    <div class="row">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-4" style="background-image: url('<?php the_field('portrait_image')?>');">
                <a href="<?php the_permalink(); ?>"><h2><?php the_field('portrait_title'); ?></h2></a>
                <p><?php the_field('portrait_description'); ?></p>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php get_footer(); ?>
