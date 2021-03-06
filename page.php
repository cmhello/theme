<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 */

get_header(); ?>

<?php pp_page_header(); ?>

<div class="columns-main-side columns">
	<div class="wrapper">

		<div class="primary col content-area">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

				endwhile;
			?>
		</div>

		<?php get_sidebar(); ?>

	</div>
</div>

<?php
get_footer();
