<?php
/**
 * X5: Index
 *
 * Do not close ?> at the end of the file if it contains only PHP tags.
 *
 * @package WordPress
 * @subpackage X5
 */
get_header();
?>

Index page

<?php if ( have_posts() ) : ?>

	<?php posts_nav_link(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

    	<?php get_template_part( 'partials/content', 'loop' ); ?>

	<?php endwhile; ?>

<?php else : ?>

	<?php esc_html_e( 'No content is found.', 'x5' );  ?>

<?php endif; ?>

<?php // add pagination if needed here  ?>

<?php get_sidebar(); ?>
<?php get_footer();
