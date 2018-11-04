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
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Alegreya:400italic,400,700,700italic&amp;subset=latin,latin-ext"
    rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Alegreya+SC:400&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">


  <title><?php echo esc_url( home_url( '/' )); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- header -->
  <header class="fixed-top">
    <!--  about section in header -->
    <div class="collapse headerBg" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4" id="headerAbout">
            <h4 class="text-white">About</h4>
            <p>Add some information about the album below, the author, or any other background
              context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
              to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled" id="headerContact">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end about section in header -->

    <div class="navbar  bg-white shadow-sm">
      <div class="container d-flex justify-content-between">
        <!-- main navbar -->

        <nav class="navbar navbar-expand-lg">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <!-- <span class="navbar-toggler-icon"></span> -->
            <span id="" class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
          </button>

         
        <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
          ?>
          <!-- <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
              <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdownMenuLink" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="index.html">Home 1</a>
                  <a class="dropdown-item" href="index2.html">Home 2</a>
                  <a class="dropdown-item" href="index3.html">Home 3</a>
                  <a class="dropdown-item" href="index4.html">Home 4</a>
                </div>
              </li>
              <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdownMenuLink" role="button"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Archive</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="archive.html">Archive 1</a>
                  <a class="dropdown-item" href="archive2.html">Archive 2</a>
                  <a class="dropdown-item" href="archive3.html">Archive 3</a>
                  <a class="dropdown-item" href="archive4.html">Archive 4</a>
                  <a class="dropdown-item" href="archive5.html">Archive 5</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="full-width.html">Page</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="post.html">Single Post</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About me</a>
              </li>
            </ul>
          </div> -->
        </nav>
        <!-- end main navbar -->

        <!-- toggle with action-->
        <button id="ChangeToggle" class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span id="navbar-hamburger" class="myToggler"><i class="fas fa-bars"></i></span>
          <span id="navbar-close" class="myToggler hidden"><i class="fa fa-times"></i></span>
        </button>
        <!-- end toggle with action-->
      </div>
    </div>

  </header>
    <!-- main-content -->
	<section class="main-content">
    <!-- container -->
    <div class="container">

      <div class="row">
        <!-- content -->
