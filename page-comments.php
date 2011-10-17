<?php
/**
 * Template Name: Comments
 *
 * @package WordPress
 * @subpackage ERP
 * @since ERP 0.1
 */

get_header(); ?>

<div class="wide" id="mainwrapper">
	<div id="main" class="centered">

		<div id="primary">
			<div id="content" role="main">
				<div class="comment-header">
					<?php the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php comments_template( '', true ); ?>
				</div><!-- .comment-header -->
				<div class="comments-list">
					<?php query_posts('category_name=comments'); ?>

					<?php while (have_posts()) : the_post(); ?>
						<article>
							<h1 class="entry-title"><?php the_title(); ?></h1>
							<div class="entry-meta">
								<time class="entry-date" datetime="<?php echo get_the_date('c'); ?>" pubdate><?php echo get_the_date('n M'); ?></time>
							</div><!-- .entry-meta -->
							<?php the_content( __( '', 'twentyeleven' ) ); ?>
						</article>						
					<?php endwhile;?>
				</div><!-- .comments-list -->
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>