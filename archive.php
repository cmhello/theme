<?php
/**
 * Archive.php
 * controls styling for categories, tags etc
 */

get_header(); ?>

<?php pp_page_header(); ?>

<div class="primary content-area">
	<div class="wrapper">
		<?php
			if ( have_posts() ) :
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

				endwhile;

				// Previous/next page navigation.
					pp_paging_nav();

			else :
				// If no content, include the "No posts found" template.
				get_template_part( 'content', 'none' );

			endif;
		?>
	</div>
</div>

<?php
get_footer();
