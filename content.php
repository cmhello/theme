<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <header class="entry-header"> -->
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>

		<div class="entry-thumbnail">
			<?php //the_post_thumbnail(); ?>
			<?php affwp_post_thumbnail(); ?>
		</div>

		<?php endif; ?>

		<?php if ( is_single() ) : ?>

			<?php /*
		<h1 class="entry-title"><?php the_title(); ?></h1>
	*/ ?>
		<?php else : ?>

		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>

		<?php endif; ?>

		<!-- <div class="entry-meta"> -->
			<?php /*
			<span class="comments">
				<?php comments_popup_link( __( '0', 'affwp' ), __( '1', 'affwp' ), __( '%', 'affwp' ) ); ?>
				<svg width="37px" height="32px">
					<use xlink:href="<?php echo get_stylesheet_directory_uri() . '/images/svg-defs.svg#icon-comments'; ?>"></use>
				</svg>
			</span>
			*/ ?>
		
			<?php //affwp_posted_on(); //twentythirteen_entry_meta(); ?>
			<?php // edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
		<!-- </div> -->

	<!-- </header> -->

	<?php if ( is_search() || is_home() ) : // Only display Excerpts for Search ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<?php else : ?>

	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div>

	<?php endif; ?>

	<footer class="entry-meta">
		<a href="<?php the_permalink(); ?>">Continue reading &rarr;</a>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer>

</article>



						

								
		