<?php
/**
 * X5: Theme specific functionalities
 *
 * Do not close any of the php files included with ?> closing tag!
 *
 * @package WordPress
 * @subpackage X5
 */

/*
 * Add basic functionality required by WordPress.org
 */
if ( function_exists( add_theme_support( 'seo-title' ) ) ) {
	add_theme_support( 'seo-title' );
}

if ( function_exists( add_theme_support( 'threaded-comments' ) ) ) {
	add_theme_support( 'threaded-comments' );
}

if ( function_exists( add_theme_support( 'comments' ) ) ) {
	add_theme_support( 'comments' );
}

if ( function_exists( add_theme_support( 'automatic-feed-links' ) ) ) {
	add_theme_support( 'automatic-feed-links' );
}

if ( function_exists( add_theme_support( 'title-tag' ) ) ) {
	add_theme_support( 'title-tag' );
}

if ( function_exists( add_theme_support( 'menus' ) ) ) {
	add_theme_support( 'menus',
		array(
			'navigation-top' => __( 'Top Navigation Menu', 'x5' ),
			'navigation-footer' => __( 'Footer Navigation Menu', 'x5' ),
		)
	);
}


/*
 * Register menus
 */
function x5_register_menus() {
	
	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Header Menu', 'x5' ),
		)
	);
}
add_action( 'init', 'x5_register_menus' );


/*
* Add default sidebars
*/	
function x5_register_sidebars() {
		
	register_sidebar(
			array(
				'id'            => 'primary',
				'name'          => __( 'Primary Sidebar', 'x5' ),
				'description'   => __( 'Main content sidebar.', 'x5' ),
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'x5_register_sidebars' );


if ( ! isset( $content_width ) ) {
	$content_width = 1210;
}

/*
 * Add post thumbnails and set its size
 */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1226, 400 );

/*
 * Set new image sizes
 */
add_image_size( 'home-about-intro-thumb', 524, 295, false );
add_image_size( 'home-about-summary-thumb', 370, 209, false );


/* 
 * Load optimization
 */
// Remove Emoji icons
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


/*
 * Enqueue styles and scripts
 */
function x5_add_scripts() {

	// Header
	wp_enqueue_style( 'x5-style', get_stylesheet_uri() );

	wp_enqueue_style( 'x5-main', get_template_directory_uri() . '/css/main.css' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	// Footer
	wp_enqueue_script( 'x5-plugins', get_template_directory_uri() . '/js/plugins.min.js', array( 'jquery' ), '16092017', true );

	if ( is_page_template( 'page-home.php' ) &&
			 get_field( 'x5_home_countdown_launch_time' ) ):

		// Register script that we pass values to
		wp_register_script( 'x5-js', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'x5-plugins' ), '16092017' );

		$x5_timer_values = array(
			'countdownTime' => esc_js( get_field( 'x5_home_countdown_launch_time' ) ),
		);

		// Pass js values to main.js file
		wp_localize_script( 'x5-js', 'x5_timer_vars', $x5_timer_values );

	endif;

	// Enqueue script that we pass values to
	wp_enqueue_script( 'x5-js', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'x5-plugins' ), '16092017', true );

}
add_action( 'wp_enqueue_scripts', 'x5_add_scripts' );


/*
 * Add ACF Options pages
 */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
	acf_add_options_sub_page( 'General' );
	acf_add_options_sub_page( 'Header' );
	acf_add_options_sub_page( 'Footer' );
}


/*
 * Add styles to editor
 */
function x5_add_editor_styles() {
	add_editor_style( get_template_directory_uri() . '/css/main.css' );
}
add_action( 'admin_init', 'x5_add_editor_styles' );


/*
 * Add client defined styles to header
 */
function x5_add_customized_css() {

	?>
	
	<style>
		
		<?php
			
			// Header logo
			if ( get_field( 'x5_general_logo', 'option' ) ):
					$x5_general_logo = get_field( 'x5_general_logo', 'option' );
				?>
				
				<?php if ( get_field( 'x5_general_logo_width', 'option' ) &&
									 get_field( 'x5_general_logo_height', 'option' ) ): ?>
					.site-name {
					  width: <?php echo wp_filter_nohtml_kses( get_field( 'x5_general_logo_width', 'option' ) ); ?>px;
					  height: <?php echo wp_filter_nohtml_kses( get_field( 'x5_general_logo_height', 'option' ) ); ?>px;
					}
				<?php else: ?>
					.site-name {
					  width: <?php echo wp_filter_nohtml_kses( $x5_general_logo['width'] ); ?>px;
					  height: <?php echo wp_filter_nohtml_kses( $x5_general_logo['height'] ); ?>px;
					}
				<?php endif; ?>
				
				.site-name span {
				  background: transparent url("<?php echo esc_url( $x5_general_logo['url'] ); ?>") 0 0 no-repeat;
				}

				<?php
			endif; 

			if ( get_field( 'x5_general_logo_alt', 'option' ) ):
					$x5_general_logo_alt = get_field( 'x5_general_logo_alt', 'option' );
				?>
			
				.alt-header .site-name span {
				  background: transparent url("<?php echo esc_url( $x5_general_logo_alt['url'] ); ?>") 0 0 no-repeat;
				}

				<?php
			endif;
		
		// Home page
		if ( is_page_template( 'page-home.php' ) ):
			
			if ( get_field( 'x5_home_featured_bg' ) ):
				$x5_home_featured_bg = get_field( 'x5_home_featured_bg' );
				?>
			
				.page-home .intro {
				  background: transparent url("<?php echo esc_url( $x5_home_featured_bg['url'] ); ?>") center 0 no-repeat;
				}

				<?php
			endif;

			if ( get_field( 'x5_home_countdown_bg' ) ):
				$x5_home_countdown_bg = get_field( 'x5_home_countdown_bg' );
				?>
			
				.countdown {
				  background: transparent url("<?php echo esc_url( $x5_home_countdown_bg['url'] ); ?>") center 0 no-repeat;
				  background-size: cover;
				}
			<?php				
			endif;
		endif;
		// Home page

	?>
			
	</style>
	
	<?php
}
add_action( 'wp_head', 'x5_add_customized_css' );


/*
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
