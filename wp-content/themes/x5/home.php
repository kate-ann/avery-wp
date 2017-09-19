<?php
/**
 * X5: Home
 *
 * Overwritten by Front Page if specific settings are set.
 * See: http://codex.wordpress.org/Creating_a_Static_Front_Page
 *
 * @package WordPress
 * @subpackage X5
 */
get_header();
get_template_part( 'partials/header', 'content' );

?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

  	<?php get_template_part( 'template-parts/content', 'loop' ); ?>

	<?php endwhile; ?>

<?php else : ?>

	<?php esc_html_e( 'No content is found.', 'x5' );  ?>

<?php endif; ?>

<?php // add pagination if needed here  ?>

<?php get_footer();
