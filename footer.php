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

<?php wp_footer(); ?>

</body>
</html>