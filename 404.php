<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage ERP
 ** @since ERP 0.1
 */

get_header(); ?>
<div class="wide" id="mainwrapper">
	<div id="main" class="centered">
	<div id="primary">
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentyeleven' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links below, can help.', 'twentyeleven' ); ?></p>

					<?php get_search_form(); ?>

					<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>




				</div><!-- .entry-content -->
			<div style="clear:both"></div></article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->
	</div><!-- #primary -->
	</div><!-- #primary -->

<?php get_footer(); ?>