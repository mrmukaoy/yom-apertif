<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Apertif
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) {
			the_post();

			get_template_part( '_inc/template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'apertif' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'apertif' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			} //end if

		} //end while // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
