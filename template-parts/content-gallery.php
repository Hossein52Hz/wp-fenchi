<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fenchi
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- post type1 -->
<div class="card mb-4 shadow-sm" >
  <?php 
  $check_gallery = get_post_meta( get_the_ID(), 'fenchi_metabox_gallery_list', 1 );
  
  if(!has_post_thumbnail() and empty($check_gallery)){

    echo '<div class="category no-thumbnail">';
  } 

  elseif( !empty($check_gallery)){
    echo '<div class="category">';
    fenchi_cmb2_output_file_list( 'fenchi_metabox_gallery_list', 'full' );
    echo '
    <div class="post-format-icon">
    <i class="far fa-images"></i>
    </div>';
    
    }else{
      echo '<div class="category">';
      fenchi_post_thumbnail();
      echo '
      <div class="post-format-icon">
      <i class="far fa-images"></i>
      </div>';
    } 
    ?>

    <?php if(has_category()): ?>
    <div class="cat-list">
      <ul>
        <li><a href="#"><i class="fas fa-layer-group"></i></a></li>
        <?php echo get_the_category_list( __( ', ', 'fenchi' ) );?>
      </ul>
    </div>
    <?php endif;?>
  </div>
  <div class="card-body">
    <div class="social">
      <div class="row">
        <div class="col-4 cal-sm-4">
      <h4 class="author"><span><a href="#"> <?php fenchi_posted_by(); ?> </a></span></h4>
        </div>
        
        <?php get_template_part( 'inc/share'); ?>
       
    </div>
    <div class="clear">

      <div class="post-details">
        <?php
		if ( is_singular() ) :
			the_title( '<h1 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		else :
			the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
        ?>
        <a href="#"><span class="publish-date text-center"><?php the_time( get_option( 'date_format' ) ); ?> </span></a>
      </div>
      <div class="posts-content">
       <?php
        if(is_single()){
          the_content();
        }
        else{ 
          the_excerpt();
          ?>
          <a href="<?php the_permalink(); ?>"><small class="read-more"><?php echo esc_html('Read more...', 'fenchi'); ?></small></a>
          <?php
        } 
        ?>

      </div>
    </div>
    <?php if(is_single()): ?>

    <div class="count">
      <?php fenchi_setPostViews(get_the_ID()); ?>
      <ul>
        <li><i class="fas fa-comments"></i><a href="#"> <?php  echo esc_html($number = get_comments_number()); ?></a> </li>
        <li><i class="fas fa-eye"></i><a href="#"> <?php echo esc_html(fenchi_getPostViews(get_the_ID())); ?></a> </li>
      </ul>

    </div> 
    <div class="tags">

      <ul>
        <li><a href="#"> <i class="fas fa-tags"></i></a></li>
        <?php the_tags(' ' , ' &comma;', ' ')  ?>
      </ul>
    </div>
      <?php endif; ?>
  </div>
</div>
<!-- end post type 1 -->
      </div>
</div>

<?php
			//the_posts_navigation();
