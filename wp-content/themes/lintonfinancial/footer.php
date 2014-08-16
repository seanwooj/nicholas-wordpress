<div class="footer cf">
  <div class="row">
    <div class="large-12 columns">
      <div class="top-links cf">
        <!-- TODO kill these footer links -->
        <?php foundationPress_footer_top_menu(); ?>
      </div>

      <div class="bottom-links cf">
        <?php foundationPress_footer_bottom_menu(); ?>
      </div>

      <div class="bottom-links bottom-links-right">
        <ul class="footer-links">
          <li>© <?php echo date('Y'); ?> Nicholas Linton</li>
          <li><a href="#">Site by Sean Kim</a></li>
          <li><a href="/wp-admin">Admin</a></li>
        </ul>
      </div>

    </div>
  </div>
</div><!-- footer -->

  <?php do_action('foundationPress_layout_end'); ?>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>
