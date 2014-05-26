<?php get_header(); ?> 
            <div id="main">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<div class="entry">
				
               
                 <div class="float_wrapper">  
                   
                
                
                
                <div class="article" id="post-<?php the_ID(); ?>">
                    <?php the_content(); ?>
                    
                   
                </div>
                
                </div>
                
           
                
                <div id="excerpt_1">
                
                
                
                <div id="excerpt_1_copy">
                <h1><?php the_title(); ?></h1>
                
                
             
             <div class="postmetadata">
                    
                       <div id="course_name_">
                <?php foreach((get_the_category()) as $cat) {
if (!($cat->cat_ID=='4')) echo '<a href="' . get_bloginfo('url') . '?cat=' . $cat->cat_ID . '/">'. $cat->cat_name . '</a>' . ' ';
} ?>
</div>



                 </div>
                <br />
                
                 <?php the_excerpt(); ?> 
                 
                  <div class="postmetadata">
                    <?php edit_post_link(__('[Edit this entry]'), '<br />', ''); ?>
                    </div>
                 
                 
                
                 
                  <div class="postmetadata">
                  
                    <span>Share this article:</span> <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>%26t=<?php the_title(); ?>">Facebook</a>, <a href="http://digg.com/submit?phase=2&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="Digg this!">Digg This</a>, <a href="http://del.icio.us/post?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="Bookmark on Delicious.">Del.icio.us</a>, <a href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="StumbleUpon.">StumbleUpon</a>, 
                    <?php if (function_exists('wp_get_shortlink')) { ?>
					<a href="http://twitter.com/home/?status=<?php the_title(); ?>: <?php echo wp_get_shortlink(get_the_ID()); ?>" title="Tweet this!"> Tweet this</a>
					<?php } 
					else { ?>
					<a href="http://twitter.com/home/?status=<?php the_title(); ?>: <?php the_permalink(); ?>" title="Tweet this!"> Tweet This!</a>
					<?php } ?>
                    <br />

                   
                    
                    <div style="margin-bottom:40px"></div>
                    </div>
                 
                  
                 </div>
                </div>
               
               
              
                
            <?php endwhile; ?>
            <?php else : ?>
                <h1 id="error"><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
            <?php endif; ?>
            </div>         
            </div>

<?php get_footer(); ?>
