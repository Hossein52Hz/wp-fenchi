<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fenchi
 */

get_header();
?>
     <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        <!-- content -->
        <div class="col-md-8">
	<?php else: ?>
 		<!-- content full-width -->
 		<div class="col-md-12">
	<?php endif; ?>

        
          <div class="single-post">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			//the_post_navigation();
      
			//If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>
			

		
		<?php
		endwhile; // End of the loop.
		?>

		
	</div>
	<!-- </div> -->

<?php
get_sidebar();
get_footer();
