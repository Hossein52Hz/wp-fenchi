<div class="collapse headerBg" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4" id="header-about">
          <?php if ( get_theme_mod( 'fenchi_theme_options_about_site_title' ) != 'About Site title' ): ?>
          <h4 class="text-white"><i class="fas fa-layer-group"></i><?php echo esc_attr(get_theme_mod( 'fenchi_theme_options_about_site_title' )); ?></h4>
		<?php endif; ?>

            <!-- About site</h4> -->
            <?php if ( get_theme_mod( 'fenchi_theme_options_about_site' ) != 'Write about site here' ): ?>
		<p><?php echo wp_kses_post(get_theme_mod( 'fenchi_theme_options_about_site' )); ?></p>
		<?php endif; ?>
           
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
          <?php if ( get_theme_mod( 'fenchi_theme_options_contact_text' ) != 'Contact' ): ?>
        <h4 class="text-white"><?php echo esc_attr(get_theme_mod( 'fenchi_theme_options_contact_text' )); ?></h4>
		<?php endif; ?>
            <ul class="list-unstyled" id="header-contact">
            <?php if ( get_theme_mod( 'fenchi_theme_options_email' ) != 'info@yoursite.com' ): ?>
		    <li><i class="far fa-envelope"></i><a href="#" class="text-white"><?php echo esc_attr(get_theme_mod( 'fenchi_theme_options_email' )); ?></a></li>
		    <?php endif; ?>

            <?php if ( get_theme_mod( 'fenchi_theme_options_tell' ) != '+121212121' ): ?>
		    <li><i class="fas fa-phone"></i><a href="#" class="text-white"><?php echo esc_attr(get_theme_mod( 'fenchi_theme_options_tell' )); ?></a></li>
		    <?php endif; ?>
              
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end about section in header -->
        

        