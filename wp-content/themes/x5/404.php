<?php
/**
 * X5: 404 page
 *
 * Contains some dummy HTML with sample content
 * http://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage X5
 */
get_header();
?>

<?php if ( get_field( 'x5_404_heading', 'option' ) ||
					 get_field( 'x5_404_desc', 'option' ) ||
					 get_field( 'x5_404_btnl', 'option' ) ||
					 get_field( 'x5_404_bg', 'option' ) ): ?>
	
	<div class="content" id="content">

	  <div class="container">
	  	<?php if ( get_field( 'x5_404_heading', 'option' ) ): ?>
	  		<h1><?php echo esc_html( get_field( 'x5_404_heading', 'option' ) ); ?></h1>
	  	<?php endif; ?>
	    
	    <?php if ( get_field( 'x5_404_desc', 'option' ) ): ?>
	    	<p><?php echo esc_html( get_field( 'x5_404_desc', 'option' ) ); ?></p>
	    <?php endif; ?>
	    
	    <?php if ( get_field( 'x5_404_btnl', 'option' ) ):
	    	$x5_404_btnl = get_field ( 'x5_404_btnl', 'option' ); ?>
	    	
	    	<a href="<?php echo esc_url( $x5_404_btnl['url'] ); ?>" class="btn-action"><?php echo esc_html( $x5_404_btnl['title'] ); ?></a>
	    	
	    <?php endif; ?>
	    
	  </div>

	</div>
	<!-- / content -->

<?php endif; ?>

<?php get_footer();
