<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fenchi
 */

?>
 
 </div>
		<!-- container -->
		</section>
		<!-- end main-content -->
<footer>
<div class="footer-bottom">
<div class="container">
  <div class="row">


	<div class="col-md-6 copyRight">
	<!-- Copy right content -->
	<?php if ( get_theme_mod( 'fenchi_theme_options_copyright' ) != 'All right reserved' ): ?>
		<?php echo wp_kses_post(get_theme_mod( 'fenchi_theme_options_copyright' )); ?>
		<?php endif; ?>
	</div>


		

	<div class="col-md-6 go-top">
	  <a href="#" id="back-top" style="display: none;"><i class="far fa-arrow-alt-circle-up"></i></a>
	  <ul class="footerSocial">
		<!-- twitter url -->
		<?php if ( get_theme_mod( 'fenchi_theme_options_footer_twitter' ) != 'twitter_url' ): ?>
		<li><a href="<?php echo esc_attr(get_theme_mod( 'fenchi_theme_options_footer_twitter' )); ?>" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter-square"></i></a></li>
		<?php endif; ?>

		<!-- facbook url -->
		<?php if ( get_theme_mod( 'fenchi_theme_options_footer_facebook' ) != 'facbook_url' ): ?>
		<li><a href="<?php echo esc_attr(get_theme_mod( 'fenchi_theme_options_footer_facebook' )); ?>" data-toggle="tooltip" title="Facebook"><i class="fab 		fa-facebook-square"></i></a></li>
		<?php endif; ?>

		<!-- linkedin url -->
		<?php if ( get_theme_mod( 'fenchi_theme_options_footer_linkedin' ) != 'linkedin_url'  ): ?>
		<li><a href="<?php echo esc_attr(get_theme_mod( 'fenchi_theme_options_footer_linkedin' )); ?>" data-toggle="tooltip" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
		<?php endif; ?>
		
	  </ul>
	</div>
	<!--Footer Bottom-->


  </div>
</div>
</div>

</footer>
<!-- end footer -->
<?php wp_footer(); ?>
</body>

</html>