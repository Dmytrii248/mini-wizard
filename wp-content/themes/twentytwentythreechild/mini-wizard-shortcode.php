<?php 

// include('mini-wizard/constants.php');

function r_test($atts, $content = null){
    $default = array(
        'title' => '',
    );

    $props = shortcode_atts($default, $atts);
    $content = do_shortcode($content);

    // ob_start();
    ?>
    
    <div id="r-test-root">
      <div class="mt-lg-5">
      <?php get_template_part('mini-wizard/container') ?>
      </div>
      <div>
        <p>
          <?php echo $props['title']; ?>
        </p>
        <p>
          <?php echo $content; ?>
        </p>
      </div>
    </div>
    <?php
return;
    // return ob_get_clean();
}

add_shortcode( 'r_test', 'r_test' );

?>
