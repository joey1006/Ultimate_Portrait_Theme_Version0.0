
<?php get_header(); ?>

<div class="container-fluid">
    <div class="row landing-header">
        <div class="col-md-1 offset"></div>
        <div class="col-sm-12 col-md-5 landing-text">
            <div class="content">
                <h2>Welcome to The Ultimate Portrait</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A beatae, consequatur dignissimos, dolorum error et eveniet exercitationem facilis iusto quam quia quisquam sapiente. Expedita fugiat nemo quos unde. Iure, officiis!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A beatae, consequatur dignissimos, dolorum error et eveniet exercitationem facilis iusto quam quia quisquam sapiente. Expedita fugiat nemo quos unde. Iure, officiis!</p>
                <iframe class="video" width="100%" height="375px" src="https://www.youtube.com/embed/XHxyqcg7dKA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 landing-image">
            <!--Empty-->
        </div>
    </div>
</div>
<div class="container">



    <div class="row portraits">
<!--        <div class="col-sm-1"></div>-->
        <div class="col-sm-11"><h2>Portraits</h2></div>
        <div class="col-md-1 offset"></div>
            <div class="col-md-4"><img src="https://via.placeholder.com/300" alt=""></div>
            <div class="col-md-4"><img src="https://via.placeholder.com/300" alt=""></div>
            <div class="col-md-4"><img src="https://via.placeholder.com/300" alt=""></div>
<!--        <div class="col-md-1 offset"></div>-->

<?php
query_posts(array(
    'post_type' => 'portrait',
    'showposts' => 3
) );
?>
<div class="container">
    <div class="row portraits">
        <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="col-md-4" style="background-image: url('<?php the_field('portrait_image')?>');">
                <p><?php the_field('portrait_title'); ?></p>
              </a>
            </div>
        <?php endwhile; ?>
    </div>
</div>

    </div>

    <hr>

    <div class="row about">
<!--        <div class="col-md-1 offset"></div>-->
        <div class="col-md-6 about-image">
            <img src="https://via.placeholder.com/450" alt="">
        </div>
        <div class="col-md-6 about-text">
            <div class="content">
                <h2>My name is Daniel Jeremy</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad deleniti exercitationem fugit harum itaque magnam officiis sapiente! Adipisci aliquid autem dolore itaque, nam optio praesentium tempore totam? A, et, laudantium.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad deleniti exercitationem fugit harum itaque magnam officiis sapiente! Adipisci aliquid autem dolore itaque, nam optio praesentium tempore totam? A, et, laudantium.</p>
                <a href=""><button>contact</button></a>
            </div>
        </div>
<!--        <div class="col-md-1 offset"></div>-->
    </div>

    <hr>

    <div class="row process">
        <div class="col-md-6">
            <div class="row no-margin">
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/150" alt="">
                    <h4>A feeling</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, doloribus enim eveniet expedita illo magni odio pariatur perspiciatis sapiente vel?</p>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/150" alt="">
                    <h4>The start</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores atque corporis debitis delectus deserunt ea.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/150" alt="">
                    <h4>Creating</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda consequuntur deleniti, natus nisi odio quo quod reiciendis sint? Beatae dolore?</p>
                </div>
                <div class="col-md-6">
                    <img src="https://via.placeholder.com/150" alt="">
                    <h4>Done</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam delectus eveniet incidunt itaque, molestias tempora voluptas? Commodi deserunt eos fugit .</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>My process</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, at est explicabo fugit laborum, magnam maiores non obcaecati, perferendis praesentium rem sequi temporibus ullam? Aliquid hic incidunt laudantium repellendus voluptates!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, at est explicabo fugit laborum, magnam maiores non obcaecati, perferendis praesentium rem sequi temporibus ullam? Aliquid hic incidunt laudantium repellendus voluptates!</p>
            <iframe class="video" width="100%" height="375px" src="https://www.youtube.com/embed/XHxyqcg7dKA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</div>
<?php get_footer(); ?>
