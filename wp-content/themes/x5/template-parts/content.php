<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package x5
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
	
		<?php	if ( is_single() ) : ?>
			
			<h2><?php the_title(); ?></h2>
		
		<?php	
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>	
	</header>

	<div class="container">
	
		<?php // add date to the post
			if ( 'post' === get_post_type() ) : ?>
			
				<div class="entry-meta">
					<?php x5_posted_on(); ?>
				</div>
		
		<?php 
			endif; 
		?>
		
		<div class="entry-content">
			
			<?php // show entry content
				the_content( 
					sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'x5' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) 
				);
		
				wp_link_pages( 
					array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'x5' ),
						'after'	=> '</div>',
					) 
				);
			?>
		</div>
		<!-- // entry-content -->
		
		<footer class="entry-footer">
			<?php x5_entry_footer(); ?>
		</footer>
		
		<?php // show navigation to prev and next posts
			the_post_navigation(); 
		?>
		
	</div>
	<!-- / container -->
	
</article>