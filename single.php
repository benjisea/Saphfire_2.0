<?php
/**
 * The template for displaying all single posts.
 *
 * @package saphfire
 */
get_header(); ?>
<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<!--remove this so the good nav bar shows up <(?)php saphfire_post_nav(); ? this is the recent posts nav bar btw-->

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main> <!-- #main -->
	</div><!-- #primary -->
</div>
<div class="container">
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
