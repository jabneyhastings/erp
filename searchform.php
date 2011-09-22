<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package WordPress
 * @subpackage ERP
 ** @since ERP 0.1
 */
?>
	<form method="get" id="searchformwrapper" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div id="searchform">
            <label for="s" class="assistive-text"><?php _e( 'Search', 'twentyeleven' ); ?></label>
            <input type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
            <input type="image" id="btnsearch" src="/wp-content/themes/erp/images/btnsearch.png" width="30" height="28" alt="Search" />
        </div>
	</form>
