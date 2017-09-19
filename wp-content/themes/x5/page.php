<?php

/*
 * X5: Page
 *
 * @package WordPress
 * @subpackage X5
 */
get_header();
get_template_part( 'partials/header', 'content' );

the_post();
?>

<?php get_template_part( 'partials/content' ); ?>

<?php get_sidebar(); ?>
<?php get_footer();
