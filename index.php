<?php get_header(); ?>
<div class="container">
    <div class="row">

        <div class="col-sm-12">
            <p><a href='javascript:history.back(1);'><= Back</a></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 portrait_desc">
            <h2><?php the_field('portrait_title'); ?></h2>
            <p><?php the_field('portrait_description'); ?></p>
            <a href=""><button class="button">contact</button></a>
        </div>


        <div class="col-5">
            <img class="portrait-image" src="<?php the_field('portrait_image') ?>" alt="Nic">
              <p><i>Portrait size: </i><?php the_field('portrait_size_width'); ?> x <?php the_field('portrait_size_height'); ?></p>
        </div>
    </div>
    <hr>
    <div class="row portraits">
        <div class="col-md-4"><img src="https://via.placeholder.com/300" alt=""></div>
        <div class="col-md-4"><img src="https://via.placeholder.com/300" alt=""></div>
        <div class="col-md-4"><img src="https://via.placeholder.com/300" alt=""></div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-3 offset-md-8">
        <a href=""><button class="button">contact</button></a>
        </div>
    </div>
</div>
<?php get_footer(); ?>
