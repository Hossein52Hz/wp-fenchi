<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fenchi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- header -->
  <header class="fixed-top">
    <!--  about-site section in header -->
   <?php get_template_part('template-parts/about-site-template', 'about-site-template'); ?>

    <div class="navbar  bg-white shadow-sm">
      <div class="container d-flex justify-content-between">
        <!-- main navbar -->
        <nav class="navbar navbar-expand-lg main-menu">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span id="" class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>
          <div class="site-branding">
			<?php
      the_custom_logo();?>
    <div id="info">
      <?php
    
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$fenchi_description = get_bloginfo( 'description', 'display' );
			if ( $fenchi_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo "$fenchi_description"; /* WPCS: xss ok. */ ?></p>
      <?php endif; ?>

      </div>
		</div><!-- .site-branding -->
         <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'navbarResponsive',
                'container_class' => 'collapse navbar-collapse',
                'menu_id'         => 'navbarResponsive1',
                'menu_class'      => 'navbar-nav ml-auto',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

        <!-- end main navbar -->

       
        </nav>
        
        <?php if ( get_theme_mod( 'fenchi_theme_options_check_about_site' )=='1' ): ?>
		    <!-- toggle with action-->
        <button id="changetoggle" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span id="navbar-hamburger" class="my-toggler"><i class="fas fa-bars"></i></span>
          <span id="navbar-close" class="my-toggler hidden"><i class="fa fa-times"></i></span>
        </button>
        <!-- end toggle with action-->
		    <?php endif; ?>
        
       
      </div>
    </div>

  </header>
    <!-- main-content -->
	<section class="main-content">
    <!-- container -->
    <div class="container">

      <div class="row">
        <!-- content -->
