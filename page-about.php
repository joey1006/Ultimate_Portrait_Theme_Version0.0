
<?php  get_header(); ?>

    <?php

    if( have_posts() ):

        while( have_posts() ): the_post();?>


            <p><?php the_content(); ?></p>

            <h3><?php the_title(); ?></h3>

            <p> <h3>Page 9 unique id to select this page</h3> </p>

            <hr>

        <?php endwhile;

    endif;

    ?>

<?php get_footer();?>