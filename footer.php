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

<!-- page navigation -->
<nav aria-label="...">
  <ul class="pagination">
	<li class="page-item disabled">
	  <a class="page-link" href="#" tabindex="-1">Previous</a>
	</li>
	<li class="page-item"><a class="page-link" href="#">1</a></li>
	<li class="page-item active">
	  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
	</li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#">4</a></li>
	<li class="page-item"><a class="page-link" href="#">5</a></li>
	<li class="page-item">
	  <a class="page-link" href="#">Next</a>
	</li>
  </ul>
</nav>
<!-- end page navigation -->
</div>
<!-- container -->
</section>
<!-- end main-content -->
<!-- footer -->
<footer>
<div class="footer-bottom">
<div class="container">
  <div class="row">


	<div class="col-md-6 copyRight">
	  <p> &copy; Copyright 2019 - FenchiGroup. All rights reserved.</p>
	</div>
	<div class="col-md-6 goTop">
	  <a href="#" id="backTop" style="display: none;"><i class="far fa-arrow-alt-circle-up"></i></a>
	  <ul class="footerSocial">

		<li><a href="#" data-toggle="tooltip" title="Facebook"><i class="fab fa-facebook-square"></i></a></li>
		<li><a href="#" data-toggle="tooltip" title="Twitter"><i class="fab fa-twitter-square"></i></a></li>
		<li><a href="#" data-toggle="tooltip" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
		<li><a href="#" data-toggle="tooltip" title="Google+"><i class="fab fa-google-plus-square"></i></a></li>
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