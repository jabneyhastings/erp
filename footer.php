<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage ERP
 ** @since ERP 0.1
 */
?>

	</div><!-- /#main -->
</div><!-- /.wide -->
</div><!-- #stmain -->
</div><!-- #wrap -->
</div><!-- #wrap -->

<div id="stfooter">
	<div class="wide" id="footerwrapper">
		<div class="centered" id="footer">
	        <nav role="navigation">
	            <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
	        </nav><!-- #access -->
	        <?php
	            /* A sidebar in the footer? Yep. You can can customize
	             * your footer with three columns of widgets.
	             */
	            get_sidebar( 'footer' );
	        ?>
	        <div style="clear:both"></div>
	    </div>
	</div>

	<div class="wide" id="finalfooterwrapper">
		<div class="centered" id="finalfooter">
	        &copy; 2011 ERP - SAP recruitment experts
	    </div>
	</div>
</div><!-- #stfooter -->

<?php 
	// Load jquery on all pages other than homepage which loads its own version with slidedeck
	if ( !is_front_page() ) { 
?>
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>js/jquery-1.6.2.min.js"><\/script>')</script>
<!-- script added to show/hide news -->
<script src="<?php echo get_template_directory_uri(); ?>/js/masonary.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox-1.3.4.pack.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" type="text/javascript"></script>
<?php }?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28586713-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?php wp_footer(); ?>

</body>
</html>