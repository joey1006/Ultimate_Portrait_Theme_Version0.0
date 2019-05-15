<?php get_header(); ?>
<?php
$portraits = array(
    'post_type' => 'portrait',
    'showposts' => 10
);
$the_portraits_query = new WP_Query( $portraits );
?>

<div class="container">
    <div class="row">
        <?php while ($the_portraits_query->have_posts()) : $the_portraits_query->the_post(); ?>
            <div class="col-4" style="background-image: url('<?php the_field('portrait_image')?>');">
                <a href="<?php the_permalink(); ?>"><h2><?php the_field('portrait_title'); ?></h2></a>
                <p><?php the_field('portrait_description'); ?></p>
            </div>
        <?php endwhile;
        wp_reset_query();?>
    </div>
</div>
<?php get_footer(); ?>
