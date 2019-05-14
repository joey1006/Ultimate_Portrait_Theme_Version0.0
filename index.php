<?php get_header(); ?>
<div class="container">
    <div class="row">
<<<<<<< HEAD
        <div class="col-10">

            <p><a href='javascript:history.back(1);'><= Back</a></p>
            <p><a href='javascript:history.back(1);'><= Back to all portraits</a></p>


<!--            <p><a href='javascript:history.back(1);'><= Back to all portraits</a></p>-->

            <h1><?php the_field('portrait_title'); ?></h1>
            <p><?php the_field('portrait_description'); ?></p>

        <div class="col-sm-12">

        </div>
    </div>
    <div class="row">
        <div class="col-md-6 portrait_desc">
            <h2><?php the_field('portrait_title'); ?></h2>
            <p><?php the_field('portrait_description'); ?></p>
            <a href=""><button>contact</button></a>
        </div>


    $images = get_field('portrait_image');
    $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)

    //$images = get_field('portrait_gallery');
    //$size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)


    //if( $images ): ?>
    <div class="row">
        <div class="col-5">



            <p>Thumbnail:</p>
            <img class="portrait-image" src="<?php the_field('portrait_image') ?>" alt="Nic">
              <p><i>Portrait size: </i><?php the_field('portrait_size_width'); ?> x <?php the_field('portrait_size_height'); ?></p>
        </div>
    </div>
    <hr>
    <div class="row portraits">
        <!--        <div class="col-sm-1"></div>-->
        <div class="col-md-4"><img src="https://via.placeholder.com/300" alt=""></div>
        <div class="col-md-4"><img src="https://via.placeholder.com/300" alt=""></div>
        <div class="col-md-4"><img src="https://via.placeholder.com/300" alt=""></div>
        <!--        <div class="col-md-1 offset"></div>-->
    </div>
    <div class="row all-portraits">
        <?php
            query_posts(array(
                'post_type' => 'portrait',
                'showposts' => 3
            ) );
        ?>
    </div>
</div>
<?php get_footer(); ?>
