<?php get_header(); ?> 




<ul class="mcol">
<?php
$args = array( 'numberposts' => all, 'orderby' => 'rand' );
$rand_posts = get_posts( $args );
foreach( $rand_posts as $post ) : ?>
	<li class="article" id="post-<?php the_ID(); ?>">
	
	
	<?php
			if ( has_post_thumbnail() ) { ?>
                    	<?php 
                    	$imgsrcparam = array(
						'alt'	=> trim(strip_tags( $post->post_excerpt )),
						'title'	=> trim(strip_tags( $post->post_title )),
						);
                    	$thumbID = get_the_post_thumbnail( $post->ID, 'background', $imgsrcparam ); ?>
                        <div class="preview"><a href="<?php the_permalink() ?>"><?php echo "$thumbID"; ?></a></div>

                    
                    <?php } else {?>
                        <div class="preview"><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/images/default-thumbnail.jpg" alt="<?php the_title(); ?>" /></a></div>
                    <?php } ?>

                    <div class="article-over">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                      
                      <div class="postmetadata">
                                                    
                          
                               <?php foreach((get_the_category()) as $cat) {
if (!($cat->cat_ID=='8')) echo '<a href="' . get_bloginfo('url') . '?cat=' . $cat->cat_ID . '/">'. $cat->cat_name . '</a>' . ' ';
} ?>

                          
                      </div>
                    </div>
	
	
	
	
	</li>
<?php endforeach; ?>
</ul>



              <ul class="mcol">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
              	<li class="article" id="post-<?php the_ID(); ?>">

			<?php
			if ( has_post_thumbnail() ) { ?>
                    	<?php 
                    	$imgsrcparam = array(
						'alt'	=> trim(strip_tags( $post->post_excerpt )),
						'title'	=> trim(strip_tags( $post->post_title )),
						);
                    	$thumbID = get_the_post_thumbnail( $post->ID, 'background', $imgsrcparam ); ?>
                        <div class="preview"><a href="<?php the_permalink() ?>"><?php echo "$thumbID"; ?></a></div>

                    
                    <?php } else {?>
                        <div class="preview"><a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/images/default-thumbnail.jpg" alt="<?php the_title(); ?>" /></a></div>
                    <?php } ?>

                    <div class="article-over">
                      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                      
                      <div class="postmetadata">
                                                    
                          
                                <?php foreach((get_the_category()) as $cat) {
if (!($cat->cat_ID=='8')) echo '<a href="' . get_bloginfo('url') . '?cat=' . $cat->cat_ID . '/">'. $cat->cat_name . '</a>' . ' ';
} ?>

                          
                      </div>
                    </div>
                </li> <?php ?>
            <?php endwhile; ?>
            <?php else : ?>


            <?php endif; ?>
            </ul>

            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <?php endwhile; ?>
            <?php else : ?>
                <h1 id="error"><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
            <?php endif; ?>


            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
<?php get_footer(); ?>