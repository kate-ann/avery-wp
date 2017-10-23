<?php
/**
 * X5: social-buttons
 *
 * The template for displaying social buttons content, see:
 * http://codex.wordpress.org/Function_Reference/get_template_part
 *
 * @package WordPress
 * @subpackage X5
 */
?>

<?php if ( have_rows( 'x5_general_social_btns', 'option' ) ) : ?>
			
	<ul class="social">
	
		<?php while( have_rows( 'x5_general_social_btns', 'option' ) ) : the_row(); ?>
		
			<li>
			
				<?php if ( get_sub_field( 'x5_general_social_btns_type', 'option' ) &&
									 get_sub_field( 'x5_general_social_btns_link', 'option' ) ): ?>
					<?php
						$social_btn_type = get_sub_field( 'x5_general_social_btns_type', 'option' );
						$social_btn_class = '';
					
						switch ( $social_btn_type ) {
							case 'Twitter':
								$social_btn_class = 'icon-tw';
								break;
							case 'LinkedIn':
								$social_btn_class = 'icon-ln';
								break;
							case 'Instagram':
								$social_btn_class = 'icon-insta';
								break;
							case 'Facebook':
								$social_btn_class = 'icon-fb';
								break;
							case 'GooglePlus':
								$social_btn_class = 'icon-gplus';
								break;
							case 'Pinterest':
								$social_btn_class = 'icon-pin';
								break;
							default:
								$social_btn_class = 'icon-tw';
								break;
						} 
					?>
					
					<a href="<?php echo esc_attr( get_sub_field ( 'x5_general_social_btns_link', 'option' ) ); ?>" class="<?php echo esc_attr( $social_btn_class ); ?>">
            <span class="screen-reader-text"><?php echo esc_html( get_sub_field( 'x5_general_social_btns_text' ) ); ?></span>
          </a>
				
				<?php endif; ?>

			</li>
	
		<?php endwhile; ?>
	
	</ul>

<?php endif; ?>