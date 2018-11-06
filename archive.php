<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fenchi
 */

get_header();
?>

	   <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        <!-- content -->
        <div class="col-md-8 all-posts">
	<?php else: ?>
 		<!-- content full-width -->
 		<div class="col-md-12 all-posts">
	<?php endif; ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header card mb-4 shadow-sm">
				<?php
				the_archive_title( '<h1 class="page-title"><i class="fas fa-tags"></i>', '</h1>' );
				// the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			// page navigation
			 echo fenchi_bootstrap_pagination();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</div>

<?php
get_sidebar();
get_footer();
