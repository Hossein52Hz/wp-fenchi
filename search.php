

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

		<?php
		if ( have_posts() ) :?>

			<div class="card mb-4 shadow-sm">
				<div class="card-body">
			<header class="page-header">
				<h1 class="page-title">
				<i class="fas fa-search"></i>
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'fenchi' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
			</div>
			</div>
		<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;?>

					 <!-- page navigation -->
					 <?php echo fenchi_bootstrap_pagination(); ?>
    		</div>
			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );
			
		endif;
		?>
<!-- </div> -->
<?php
get_sidebar();
get_footer();
