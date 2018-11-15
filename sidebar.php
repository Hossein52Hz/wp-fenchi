<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fenchi
 */
?>
</div>
<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
	<!-- sidebar -->
	<div class="col-md-4 sidebar">
		<?php dynamic_sidebar( 'main-sidebar' ); ?>

	</div>
<?php endif; ?>

