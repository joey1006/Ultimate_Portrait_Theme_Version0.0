<?php get_header(); ?>
<?php
$portraits = array(
    'post_type' => 'portrait',
    'showposts' => 10
);
$the_portraits_query = new WP_Query( $portraits );
?>


<div class="container ">
    <div class="row ">
        <div class="col-md-6">
            <div class="content">
                <h2>Portraits</h2>
            </div>
        </div>
      <div class="col-md-6"></div>
    </div>
    <div class="row all-portraits">
        <?php while ($the_portraits_query->have_posts()) : $the_portraits_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="col-md-4" style="background-image: url('<?php the_field('portrait_image')?>');">
                <p><?php the_field('portrait_title'); ?></p></a>
            </div>
        <?php endwhile;
        wp_reset_query();?>
    </div>
</div>
<?php get_footer(); ?>
