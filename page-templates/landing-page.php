<?php
/**
 * Template Name: Landing Page
 * Tempalte Post Type: page
 *
 * @package Robogals_Brisbane
 */

get_header();
?>

<div class="landing">
	<h1><b>Inspire</b>, <b>engage</b> and <b>empower</b> young women into engineering and related fields.</h1>
</div>

<style>
.landing {
	background-image: url(
	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail_url( 'full' );
	}
	?>);
}
</style>

	<div class="entry-content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php
endwhile;
endif;
?>
</div><!-- .entry-content -->

<?php
get_footer();
?>
