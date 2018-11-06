<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div class="input-group">
    
        <input type="search" class="search-field form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'fenchi' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'fenchi' ); ?>">
    
    <div class="input-group-append">
                  <button class="btn btn-secondary do-search" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
    </div>
</div>
</form>
