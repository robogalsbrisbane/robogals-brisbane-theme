<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Robogals_Brisbane
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="partner">

        <div class="partner-image">
            <img src="<?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail_url( 'full' );
            }
            ?>"></img>
        </div>

        <div class="partner-info">
            <?php the_title( '<h1>', '</h1>' ); ?>
            <?php
                the_content();

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'robogals-brisbane' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div>
    </div><!-- .entry-content -->
</article>
