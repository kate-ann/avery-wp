<?php
/**
 * X5: Header
 *
 * Contains dummy HTML to show the default structure of WordPress header file
 *
 * Remember to always include the wp_head() call before the ending </head> tag
 *
 * Make sure that you include the <!DOCTYPE html> in the same line as ?> closing tag
 * otherwise ajax might not work properly
 *
 * @package WordPress
 * @subpackage X5
 */
?><!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="initial-scale=1, minimum-scale=1, width=device-width">
  
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  
  <!-- optional -->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <!-- end of optional -->
  
  <script>
    document.createElement('picture');
  </script>

  <script>
    document.querySelector('html').classList.remove('no-js');
  </script>
  
  <?php
    
    if ( is_page_template( 'page-contact.php' ) ){
      // load gravity forms scripts
      gravity_form_enqueue_scripts( 1, true );
    }
    
    // do not remove
    wp_head(); 
  ?>
    
</head>

<body
  <?php
    if ( is_page_template( 'page-home.php' ) ){
      body_class( 'page-home' );
    } elseif ( is_page_template( 'page-contact.php' ) ){
      body_class( 'page-contact' );
    } elseif ( is_404() ){
      body_class( 'page-404' );
    } elseif ( is_blog() ) {
      body_class( 'page-blog' );
    }
  ?>>
  
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