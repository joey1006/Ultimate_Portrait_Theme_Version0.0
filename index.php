<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <p><a href='javascript:history.back(1);'><= Back</a></p>
            <h1><?php the_field('portrait_title'); ?></h1>
            <p><?php the_field('portrait_description'); ?></p>
        </div>
    </div>
    <?php

    $images = get_field('portrait_gallery');
    $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

    if( $images ): ?>
    <div class="row">
        <div class="col-5">
            <p>Thumbnail:</p>
            <img class="portrait-image" src="<?php the_field('portrait_image') ?>" alt="Nic">
              <p><i>Portrait size: </i><?php the_field('portrait_size_width'); ?> x <?php the_field('portrait_size_height'); ?></p>
        </div>
<!--        <div class="col-5 portrait-gallery">-->
<!--            <p>Gallery:</p>-->
<!--            <ul>-->
<!--                --><?php //foreach( $images as $image ): ?>
<!--                    <li>-->
<!--                        --><?php //echo wp_get_attachment_image( $image['ID'], $size ); ?>
<!--                    </li>-->
<!--                --><?php //endforeach; ?>
<!--            </ul>-->
<!--        </div>-->
    </div>

</div>
<?php endif; ?>
</div>
<?php get_footer(); ?>
