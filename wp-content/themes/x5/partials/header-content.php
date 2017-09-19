<?php
/**
 * X5: header
 *
 * The template for displaying header content, see:
 * http://codex.wordpress.org/Function_Reference/get_template_part
 *
 * @package WordPress
 * @subpackage X5
 */
?>

<header class="header">
  
  <h1><a href="<?php echo esc_url( home_url() ); ?>" rel="index" title="<?php esc_html_e( 'Go to homepage', 'x5' ); ?>" class="ir site-name"><?php bloginfo( 'name' ); ?><span></span></a></h1>
  
  <div id="navigation" class="navigation">
      
    <div id="menu-btn" class="menu-btn"></div>

    <!-- / Display menu -->
    <?php
      wp_nav_menu(
        array(
          'theme_location' => 'header-menu',
          'container_class' => 'responsive-menu'
        )
      );
    ?>

  </div>
  <!-- / navigation -->
      
</header>
<!-- / c-header -->