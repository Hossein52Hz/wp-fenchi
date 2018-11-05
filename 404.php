<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fenchi
 */

get_header();
?>

     <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        <!-- content -->
        <div class="col-md-8 allposts">
	<?php else: ?>
 		<!-- content full-width -->
 		<div class="col-md-12 allposts">
	<?php endif; ?>

			<section class="error-404 not-found">
			<div class="card mb-4 shadow-sm">
			<div class="card-body">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'fenchi' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'fenchi' ); ?></p>
					
					<?php get_search_form();?>
					

				
				</div>
				</div><!-- .page-content -->
				</div>
			</section><!-- .error-404 -->
	</div>
	

<?php
get_sidebar();
get_footer();
