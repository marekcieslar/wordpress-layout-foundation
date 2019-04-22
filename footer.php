<footer>
  <div class="footer container" id="contact">
  <h3><?php echo get_theme_mod('mc_foundation_footer_title', '123 123 123');?></h3>
    <div class="footer__data">
      <div class="footer__data__address">
        <?php echo get_theme_mod('mc_foundation_footer_contact', ''); ?>
      </div>
      <div class="footer__data__phone">
         <?php echo get_theme_mod('mc_foundation_footer_phone', ''); ?>
      </div>
      <div class="footer__data__mails">
        <?php echo get_theme_mod('mc_foundation_footer_mail', ''); ?>
      </div>
    </div>
    <div class="footer__copy">© 2017 - <?php echo date('Y'); ?> <span><?php echo get_bloginfo(); ?></span>, przygotowanie <a href="http://emfotografia.eu"
        target="_blank">Marek Cieślar</a></div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
