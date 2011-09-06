<?php
/**
 * @package Tygertown
 * @subpackage Tygertown_theme
 */
?>
	<ul id="sidebar-right" class='sidebar-right' role="complementary">
		<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( ) ) : ?>
		<?php endif; ?>
	</ul>
