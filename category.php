<?php
/**
 * category.php
 * controls styling for categories, tags etc
 */

get_header(); ?>

<?php affwp_page_header(); ?>

<div class="columns-main-side columns">
  <div class="wrapper">
    <div class="primary col content-area">
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
  <?php get_sidebar(); ?>
  </div>
</div>
<?php
get_footer();