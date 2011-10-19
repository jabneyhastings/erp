<?php
/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage ERP
 * @since ERP 0.1
 */

get_header(); ?>

<div class="wide" id="sliderwrapper">
	<div class="centered" id="slider">
        <?php slidedeck( 77, array( 'width' => '100%', 'height' => '344px' ) ); ?>
    </div>
</div>

<div class="wide" id="toolswrapper">
    <div id="tools" class="centered">
            <img src="/wp-content/themes/erp/images/tools-placeholder.png" />
        </div>
</div>

<div class="wide" id="mainwrapper">
	<div id="main" class="centered">

		<div id="primary" class="hp-block">
			<div id="content" role="main">

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

        <div class="hp-block">
            <h1>Current jobs</h1>
            <p>Ea lobortis vel hendrerit, facilisis dignissim</p>
            <p>vero illum molestie minim eros</p>
            <p>consequat facilisi at dolor,</p>
        </div>

        <div class="hp-block">
            <h1>Latest news</h1>
			<?php $the_query = new WP_Query('category_name=news&posts_per_page=1'); ?>

			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<article>
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
				</article>						
			<?php 
				endwhile;
				wp_reset_postdata();
			?>
        </div>

        <div style="clear:both"> </div>

<?php get_footer(); ?>