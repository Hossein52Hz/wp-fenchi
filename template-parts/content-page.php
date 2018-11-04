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
<div class="card mb-4 shadow-sm fullWidth">
  <?php if(!has_post_thumbnail()){
    echo '<div class="category noThumbnail">';
  } 
  else echo '<div class="category">'; ?>
  
    <?php fenchi_post_thumbnail(); ?>
  </div>
  <div class="card-body">
    <div class="social">
      <h4 class="author"><span><a href="#"> <?php fenchi_posted_by(); ?> </a></span></h4>
      <h4 class="shareLink"><span>
          <a href="#" data-toggle="tooltip" title="Share on Facebook"><i class="fab fa-facebook-square"></i></a>
          <a href="#" data-toggle="tooltip" title="Share on Twitter"><i class="fab fa-twitter-square"></i></a>
          <a href="#" data-toggle="tooltip" title="Share on Linkedin"><i class="fab fa-linkedin"></i></a>
          <a href="#" data-toggle="tooltip" title="Share on Google+"><i class="fab fa-google-plus-square"></i></a>
          <a href="#" data-toggle="tooltip" title="Share on Pinterest"><i class="fab fa-pinterest-square"></i></a>
          <a href="mailto:?subject=I wanted you to see this site" data-toggle="tooltip" title="Send via Email"><i class="fas fa-envelope-square"></i></a>
        </span></h4>
    </div>
    <div class="clear">

      <div class="postDetails">
        <a href="<?php the_permalink(); ?>">
          <h2 class="postTitle"><?php the_title(); ?></h2>
        </a>
        <a href="#"><span class="publishDate textCenter"><?php the_time( get_option( 'date_format' ) ); ?> </span></a>
      </div>
      <div class="postContent">
       <?php
          the_content();
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