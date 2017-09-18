<?php
/**
 * X5: content-single
 *
 * The template for displaying content after all other content-{template}
 * Contains some basic HTML and WordPress functions that are quite common across
 * all projects
 *
 * For the moment equal to content-single
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
  <div class="content"> 
  	
  	<div class="intro">
  		<h2><a href="<?php echo esc_attr( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
  	</div>
  	<!-- / intro -->
  	
  	<div class="container">
  		
  		<?php the_time( 'm/d/Y' ); ?>
  			
  		<div class="entry-content">
  			
  			<?php the_content(); ?>
  		
  		</div>
  		<!-- / entry-content -->
  		
  	</div>
  	<!-- / container -->
  	
  </div>
  <!-- / content -->

</div>
<!-- / post -->

<div class="pagination">
	<?php wp_link_pages(); ?>
</div>
