<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fenchi
 */
?>
<!-- sidebar -->
<div class="col-md-4 sidebar">

    <!-- search box -->
    <div class="card my-4 shadow-sm">
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search here">
                <div class="input-group-append">
                  <button class="btn btn-secondary doSearch" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <!-- end search box -->
		  
		<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'main-sidebar' ); ?>
		<?php endif; ?>
</div>
<!-- end sidebar -->

</div>