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
				<div class="about-header">
					<div class="title-list">
						<ul>
							<?php $title_query = new WP_Query('category_name=about&posts_per_page=10'); ?>
							<?php $title_count = 0; ?>

							<?php while ($title_query->have_posts()) : $title_query->the_post(); ?>
								<?php $title_count++; ?>
							 	<li class=""><a href="#" class="title <?php if ($title_count == 1){?>current<?}; ?>" rel="show<?php the_ID(); ?>"><?php the_title(); ?></a></li>
							<?php endwhile; ?>
						</ul>
						
					</div><!-- .title-list -->
					<div class="body-block">
						<?php $content_query = new WP_Query('category_name=about&posts_per_page=10'); ?>
						<?php $count = 0; ?>
						<?php while ($content_query->have_posts()) : $content_query->the_post(); ?>
							<?php $count++; ?>
							<div id="show<?php the_ID(); ?>" class="content-block <?php if ($count == 1){?>current<?}; ?>">
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>
							</div><!-- #show<?php the_ID(); ?> -->
						<?php endwhile; ?>
					</div><!-- .body-block -->
				</div><!-- .about-block -->
			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>