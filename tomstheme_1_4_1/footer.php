      <footer>

        <!-- Widgets go here -->
        <div class="footer-widgets">

        </div>

        <!-- Footer Navigation Menu -->
        <nav id="footer-nav">

          <?php
          $args = array(
            'theme-location' => 'footer',
          ) ?>

          <?php wp_nav_menu( $args); ?>

        </nav>

        <h6>&copy;<?php echo date('Y'); ?> <?php bloginfo('name'); ?></h6>

      </footer>
    </div><!-- container -->
    <?php

    // Without this line of code,
    // YOUR SCRIPTS WILL NOT LOAD IN THE FOOTER
    wp_footer();

    ?>
  </body>
</html>
