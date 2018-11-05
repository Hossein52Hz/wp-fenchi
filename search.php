<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package fenchi
 */

get_header();
?>

	     <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        <!-- content -->
	        <div class="col-md-8 allposts">
				<div class="row archive">
		<?php else: ?>
	 		<!-- content full-width -->
	 		<div class="col-md-12 allposts">
			 <div class="row archive">
		<?php endif; ?>


		<?php if ( have_posts() ) : ?>
			<div class="col-md-12">
			<header class="page-header card mb-4 shadow-sm">
				<h1 class="page-title">
				<i class="fas fa-search"></i>
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'fenchi' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
			</div>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;?>
			</div><!-- row -->
			<?php
			//  page navigation
			echo bootstrap_pagination(); 

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</div>

<?php
get_sidebar();
get_footer();
