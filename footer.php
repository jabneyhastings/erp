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
<?php 
	// Load jquery on all pages other than homepage which loads its own version with slidedeck
	if ( !is_front_page() ) { 
?>
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>js/jquery-1.6.2.min.js"><\/script>')</script>
<!-- script added to show/hide news -->
<?php }?>

<script src="<?php echo get_template_directory_uri(); ?>/js/script.js" type="text/javascript"></script>

<?php wp_footer(); ?>

</body>
</html>