    <footer>
      <?php
      query_posts(array(
          'post_type' => 'portrait',
          'showposts' => 5
      ) );
      ?>
      <div class="section">
      <div class="container">
          <div class="row footer">
              <div class="col-md-3 footer">
                <h3> Ultimate portrait</h3>
                <?php while (have_posts()) : the_post(); ?>
                        <a href="<?php the_permalink(); ?>"><p class="portrait_title"><?php the_field('portrait_title'); ?></p></a>
              <?php endwhile; ?>
              </div>
              <div class="col-md-3 footer">
                <h3> Pages</h3>
                <?php wp_nav_menu(); ?>
              </div>
              <div class="col-md-3 footer">
              </div>
              <div class="col-md-3 footer">
                <h3> Contact</h3>
                <p>Telefoon</p>
                <p>Telefoon</p>
                <p>Telefoon</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-9">
                <p>kvk: BV15785KHGU448767 | All rights resevred by daniel jeremy naad art works &copy; <?php echo date("Y"); ?></p>
              </div>
                <div class="col-md-3 socialMedia">
                  <a href="#"><img class="sm_Logo" src="http://localhost/wordpress_ownthema/wordpress-5.1.1-nl_NL/wordpress/wp-content/uploads/2019/05/facebook-logo.png"></a>
                  <a href="#"><img class="sm_Logo" src="http://localhost/wordpress_ownthema/wordpress-5.1.1-nl_NL/wordpress/wp-content/uploads/2019/05/facebook-logo.png"></a>
                  <a href="#"><img class="sm_Logo" src="http://localhost/wordpress_ownthema/wordpress-5.1.1-nl_NL/wordpress/wp-content/uploads/2019/05/facebook-logo.png"></a>
                </div>
            </div>
          </div>
        </div>

          </footer>

    <?php  wp_footer(); ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/main.js"></script>
  </body>
</html>
