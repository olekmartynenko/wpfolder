</main>
<footer>
  <div class="footer">
    <div class="footer__logo"><?php the_custom_logo() ?></div>
    <div class="footer__content">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu-custom',
        'container_class' => 'footer__menu',
      )); ?>
      <div class="footer__social">
        <a href="#">
          <div class="social__item social__item_tw"></div>
        </a>
        <a href="#">
          <div class="social__item social__item_fb"></div>
        </a>
        <a href="#">
          <div class="social__item social__item_inst"></div>
        </a>
        <a href="#">
          <div class="social__item social__item_pin"></div>
        </a>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>