<footer class="text-center">
    <section class="d-flex text-white" style="background-color: #000000">
      <div class="container pb-4 pt-4">
        <div class="row">
            <div class="col-md-6">texto</div>
            <div class="col-md-3">
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'temazo_footer_1',
                    )
                ); ?>
            </div>
            <div class="col-md-3">
                <?php wp_nav_menu(
                    array(
                        'theme_location'  => 'temazo_footer_2',
                    )
                ); ?>
            </div>

        </div>
    </div>
  </footer>
</body>
 
<?php wp_footer(); ?>