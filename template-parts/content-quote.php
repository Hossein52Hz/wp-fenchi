<!-- border: 3px solid #fff;
    padding: 0px 30px 10px 5px;
    border-radius: 50px 0 50px; -->
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
  <?php if(!has_post_thumbnail()){
    echo '<div class="category no-thumbnail">';
  } 
  else echo '<div class="category">'; ?>
  
    <?php fenchi_post_thumbnail(); ?>
    
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
        <div class="col-8 cal-sm-8">
          <h4 class="share-link"><span>
            <a href="#" data-toggle="tooltip" title="Share on Facebook"><i class="fab fa-facebook-square"></i></a>
            <a href="#" data-toggle="tooltip" title="Share on Twitter"><i class="fab fa-twitter-square"></i></a>
            <a href="#" data-toggle="tooltip" title="Share on Linkedin"><i class="fab fa-linkedin"></i></a>
            <a href="#" data-toggle="tooltip" title="Share on Google+"><i class="fab fa-google-plus-square"></i></a>
            <a href="#" data-toggle="tooltip" title="Share on Pinterest"><i class="fab fa-pinterest-square"></i></a>
            <a href="mailto:?subject=I wanted you to see this site" data-toggle="tooltip" title="Send via Email"><i class="fas fa-envelope-square"></i></a>
            </span>
          </h4>
      </div>
    </div>
    <div class="clear">
        <div class="quote-post-type">
            <div class="quote-content">
      <div class="post-details-type-one">
        
        <?php
		if ( is_singular() ) :
			the_title( '<h1 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		else :
			the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
        ?>


          
        <a href="#"><span class="publish-date text-center"><?php the_time( get_option( 'date_format' ) ); ?> </span></a>
      </div>
      <div class="posts-content-type-one">
       <?php
        if(is_single()){
          the_content();
        }
        else{ 
          the_excerpt();
          ?>
          
          <?php
        } 
        ?>
</div>
      </div>
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
        <?php the_tags();  ?>
      </ul>
    </div>
      <?php endif; ?>
  </div>
</div>
<!-- end post type 1 -->

</div>

<?php
			//the_posts_navigation();