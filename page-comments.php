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
					<div class="comment-header-text">
						<?php the_post(); ?>

						<?php get_template_part( 'content', 'page' ); ?>

						<?php comments_template( '', true ); ?>
					</div>
					<div class="comment-header-map">
						<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="950" height="300" id="comment-map">
							<param name="movie" value="<?php echo get_template_directory_uri(); ?>/comments.swf" />
							<!--[if !IE]>-->
							<object type="application/x-shockwave-flash" data="<?php echo get_template_directory_uri(); ?>/comments.swf" width="950" height="300">
							<!--<![endif]-->
								<a href="http://www.adobe.com/go/getflashplayer">
									<img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" />
								</a>
							<!--[if !IE]>-->
							</object>
							<!--<![endif]-->
						</object>
					</div><!-- .comment-header-map -->
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