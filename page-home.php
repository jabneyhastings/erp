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
        <!-- AddThis Button BEGIN -->
		<div class="addthis_toolbox addthis_default_style ">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			<a class="addthis_counter addthis_bubble_style"></a>
		</div>
		<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4ec0eca6290915a4"></script>
		<!-- AddThis Button END -->
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
            <h1>Current jobs <a href="jobs">view all jobs <span class='meta-nav'>&rsaquo;</span></a></h1>
			<ul>
				<?php $jobs = get_posts('post_type=jobman_job&numberposts=5'); ?>
				<? if ( $jobs ) : foreach ( $jobs as $job ) : setup_postdata( $jobs ); ?>
				<li class="job_title"><span class='meta-nav'>&#187;</span> <a href="jobs/apply/<?php echo $job->ID; ?>"><?php echo $job->post_title; ?></a></li>
				<? endforeach; endif; ?>
			</ul>
        </div>

        <div class="hp-block hp-news">
            <h1>Latest news  <a href="news">view all news <span class='meta-nav'>&rsaquo;</span></a></h1>
			<?php $the_query = new WP_Query('category_name=news&posts_per_page=2'); ?>

			<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
				<article>
					<a href="<?php the_permalink(); ?>">
					<?php
						$thetitle = get_the_excerpt(); /* or you can use get_the_title() */
						$getlength = strlen($thetitle);
						$thelength = 65;
						echo substr($thetitle, 0, $thelength);
						if ($getlength > $thelength) echo "...";
					?>
					</a> <span class='meta-nav'>&#187;</span>
				</article>						
			<?php 
				endwhile;
				wp_reset_postdata();
			?>
        </div>

        <div style="clear:both"> </div>

<?php get_footer(); ?>