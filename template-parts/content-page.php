<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fenchi
 */

?>

<!-- post type1 -->
<div class="card mb-4 shadow-sm full-width">
  <?php if(!has_post_thumbnail()){
    echo '<div class="category no-thumbnail">';
  } 
  else echo '<div class="category">'; ?>
  
    <?php fenchi_post_thumbnail(); ?>
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

      <div class="post-details">
        <a href="<?php the_permalink(); ?>">
          <h1 class="post-title"><?php the_title(); ?></h1>
        </a>
        <a href="#"><span class="publish-date text-center"><?php the_time( get_option( 'date_format' ) ); ?> </span></a>
      </div>
      <div class="posts-content">
       <?php
          the_content();
          
          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fenchi' ),
            'after'  => '</div>',
          ) );
        ?>

      </div>
    </div>
    

    <div class="count">
      <?php fenchi_setPostViews(get_the_ID()); ?>
      <ul>
        <li><i class="fas fa-eye"></i><a href="#"> <?php echo fenchi_getPostViews(get_the_ID()); ?></a> </li>
      </ul>

    </div>
    
      
  </div>
</div>
<!-- end post type 1 -->



<?php
			//the_posts_navigation();