<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fenchi
 */

get_header();
?>
        <div class="col-md-8">
          <div class="singlePost">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;
		?>
		<div class="comments">
          <!-- comment body -->
          <div class="commentList">
            <!-- comment -->
            <div class="commentBody">
              <div class="userInfo">
                <img src="layout/img/pixabay/profile/p1.jpg" alt="">
                <div class="comtDate">
                  <a href="#">Hossein Masoudi</a>
                  <a href="#">23 Jun 2018</a>
                </div>
              </div>
              <div class="comtContent">
                <p>I want to tell you something. The world will not messy when you spend your time for other things
                  instead doing “coding”. You are not the only programmer in this world.</p>
              </div>
              <div class="liks">
                <a href="#" class="btn btn-default liksItem">
                  <i class="fa fa-thumbs-up "></i>2
                </a>
                <a href="#" class="btn btn-default liksItem">
                  <i class="fa fa-thumbs-down "></i>12
                </a>
              </div>
            </div>
            <!-- comment -->
            <div class="commentBody respons">
              <div class="userInfo">
                <img src="layout/img/pixabay/profile/p2.jpg" alt="">
                <div class="comtDate">
                  <a href="#">Hossein Masoudi</a>
                  <a href="#">23 Jun 2018</a>
                </div>
              </div>
              <div class="comtContent">
                <p>I want to tell you something. The world will not messy when you spend your time for other things
                  instead doing “coding”. You are not the only programmer in this world.</p>
              </div>
              <div class="liks">
                <a href="#" class="btn btn-default liksItem">
                  <i class="fa fa-thumbs-up "></i>2
                </a>
                <a href="#" class="btn btn-default liksItem">
                  <i class="fa fa-thumbs-down "></i>12
                </a>
              </div>
            </div>
            <!-- comment -->
            <div class="commentBody">
              <div class="userInfo">
                  <img src="layout/img/pixabay/profile/p3.jpg" alt="">
                <div class="comtDate">
                  <a href="#">Hossein Masoudi</a>
                  <a href="#">23 Jun 2018</a>
                </div>
              </div>
              <div class="comtContent">
                <p>I want to tell you something. The world will not messy when you spend your time for other things
                  instead doing “coding”. You are not the only programmer in this world.</p>
              </div>
              <div class="liks">
                <a href="#" class="btn btn-default liksItem">
                  <i class="fa fa-thumbs-up "></i>2
                </a>
                <a href="#" class="btn btn-default liksItem">
                  <i class="fa fa-thumbs-down "></i>12
                </a>
              </div>
            </div>
            <!-- comment -->
            <div class="commentBody respons">
              <div class="userInfo">
                  <img src="layout/img/pixabay/profile/p4.jpg" alt="">
                <div class="comtDate">
                  <a href="#">Hossein Masoudi</a>
                  <a href="#">23 Jun 2018</a>
                </div>
              </div>
              <div class="comtContent">
                <p>I want to tell you something. The world will not messy when you spend your time for other things
                  instead doing “coding”. You are not the only programmer in this world.</p>
              </div>
              <div class="liks">
                <a href="#" class="btn btn-default liksItem">
                  <i class="fa fa-thumbs-up "></i>2
                </a>
                <a href="#" class="btn btn-default liksItem">
                  <i class="fa fa-thumbs-down "></i>12
                </a>
              </div>
            </div>
            <!-- comment -->
            <div class="commentBody respons">
              <div class="userInfo">
                  <img src="layout/img/pixabay/profile/p5.jpg" alt="">
                <div class="comtDate">
                  <a href="#">Hossein Masoudi</a>
                  <a href="#">23 Jun 2018</a>
                </div>
              </div>
              <div class="comtContent">
                <p>I want to tell you something. The world will not messy when you spend your time for other things
                  instead doing “coding”. You are not the only programmer in this world.</p>
              </div>
              <div class="liks">
                <a href="#" class="btn btn-default liksItem">
                  <i class="fa fa-thumbs-up "></i>2
                </a>
                <a href="#" class="btn btn-default liksItem">
                  <i class="fa fa-thumbs-down "></i>12
                </a>
              </div>
            </div>
            <!-- comment -->
            <div class="commentBody">
              <div class="userInfo">
                  <img src="layout/img/pixabay/profile/p2.jpg" alt="">
                <div class="comtDate">
                  <a href="#">Hossein Masoudi</a>
                  <a href="#">23 Jun 2018</a>
                </div>
              </div>
              <div class="comtContent">
                <p>I want to tell you something. The world will not messy when you spend your time for other things
                  instead doing “coding”. You are not the only programmer in this world.</p>
              </div>
              <div class="liks">
                <a href="#" class="btn btn-default liksItem">
                  <i class="fa fa-thumbs-up "></i>2
                </a>
                <a href="#" class="btn btn-default liksItem">
                  <i class="fa fa-thumbs-down "></i>12
                </a>
              </div>
            </div>

          </div>
          <!-- end comment body -->
          <!-- comment form -->
          <div class="card mb-4 shadow-sm">
            <div class="card-body">
              <h2>Leave a comment </h2>
              <form class="form-horizontal" action="#">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md12 col-sm-2" for="name">Name:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" placeholder="Enter Your name" name="name">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="textarea">

                      <textarea class="form-control" name="comment" id="com" cols="60" rows="8" placeholder="Write your comment"></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default cmtBtn">Send</button>
                  </div>
                </div>
              </form>

            </div>


          </div>
          <!-- end comment form -->
        </div>		

		
		<?php
		endwhile; // End of the loop.
		?>

		
	</div>
	</div>

<?php
get_sidebar();
get_footer();
