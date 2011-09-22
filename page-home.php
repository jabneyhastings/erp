<?php
/**
 * Template Name: Homepage
 *
 * @package WordPress
 * @subpackage ERP
 * @since ERP 0.1
 */

get_header(); ?>

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
            <p>consequat facilisi at dolor,</p>
            <p>Ea lobortis vel hendrerit, facilisis dignissim</p>
            <p>vero illum molestie minim eros</p>
            <hr />
            <p>Ea lobortis vel hendrerit, facilisis dignissim</p>
            <p>vero illum molestie minim eros</p>
        </div>

        <div style="clear:both"> </div>

<?php get_footer(); ?>