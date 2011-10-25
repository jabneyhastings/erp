<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage ERP
 ** @since ERP 0.1
 */

get_header(); ?>
<div id="mainwrapper" class="wide">
	<div id="main" class="centered">
		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'single' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div><!-- #main -->
</div><!-- #mainwrapper -->

<?php get_footer(); ?>