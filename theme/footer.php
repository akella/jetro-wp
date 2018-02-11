
      <!-- begin footer -->
      <div class="footer">
        <div class="container">
          <div class="footer__wrap">
            <div class="footer__col">
              <h2><?php the_field('footer_title','options') ?></h2>
              <div class="footer__text">
                <?php the_field('footer_about_text','options') ?>
              </div>
            </div>
            <!-- begin footer__col -->
            <div class="footer__col">
              <h2>Twitter Widget</h2>
              <!-- begin tweet -->
              <div class="tweet">
                <div class="tweet__content"> <a href="#">@pixelmater</a> What an awesome design with great functionality :) </div> <a href="#" class="tweet__published">about 1 hour ago</a> </div>
              <!-- end tweet -->
              <!-- begin tweet -->
              <div class="tweet">
                <div class="tweet__content"> <a href="#">@pixelmater</a> What an awesome design with great functionality :) </div> <a href="#" class="tweet__published">about 1 hour ago</a> </div>
              <!-- end tweet -->
              <div class="tweet">
                <div class="tweet__content">Follow <a href="#">@bestpsdfreebies</a></div>
              </div>
            </div>
            <!-- end footer__col -->
            <!-- begin footer__col -->
            <div class="footer__col">
              <h2>Contact Us</h2>
              <div class="footer__text">
                <p>Lorem ipsum dolor sit amet, malorum recteque reprehendunt ea vel. Urbanitas adolescens vim te, per at tritani aperiri. </p>
                <p class="footer__whitelinks"><a href='mailto:'>information@jetro.com</a><br> <a href="#">1.222.333.4444</a></p>
              </div>
            </div>
            <!-- end footer__col -->
          </div>
        </div>
      </div>
      <!-- end footer -->
    </div>
    <!-- END content -->
    <!-- BEGIN scripts -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>
    <!-- END scripts -->
    <?php wp_footer(); ?>
  </body>

</html>

