<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage ERP
 ** @since ERP 0.1
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>

				<aside id="categories" class="widget">
					<?php wp_list_categories( array( 'child_of' => 6, 'title_li' => __( '<h3>Categories</h3>' ), ) ); ?> 
				</aside>
		</div><!-- #secondary .widget-area -->
<?php endif; ?>