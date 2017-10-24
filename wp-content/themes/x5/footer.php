<?php
/**
 * X5: Footer
 *
 * Remember to always include the wp_footer() call before the </body> tag
 *
 * @package WordPress
 * @subpackage X5
 */
?>

<?php if ( get_field( 'x5_general_social_btns', 'option' ) ||
					 get_field( 'x5_footer_copyright', 'option' ) ): ?>
	
	<footer class="footer">
	
		<div class="container">
			
			<?php get_template_part( 'partials/social', 'buttons' ); ?>
			
			<?php if ( get_field( 'x5_footer_copyright', 'option' ) ): ?>
				<p class="copyright"><?php echo esc_html( get_field( 'x5_footer_copyright', 'option' ) ); ?></p>
			<?php endif; ?>
		
		</div>
		<!-- / container -->
		
	</footer>
	<!-- / footer -->

<?php endif; ?>


<?php
	// do not remove
	wp_footer();
?>

</body>
</html>
