<?php get_header(); ?> 

<div class="course_name">
				  <?php /* If this is a category archive */ if (is_category()) { ?>
                    <h1 class="course_name_1"><?php printf(__('%s'), single_cat_title('', false)); ?></h1>
                  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                    <h1 class="course_name_1"><?php printf(__('Posts Tagged &#8216;%s&#8217;'), single_tag_title('', false) ); ?></h1>
                  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                    <h1 class="course_name_1"><?php printf(_c('Archive for %s|Daily archive page'), get_the_time(__('F jS, Y'))); ?></h1>
                  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                    <h1 class="course_name_1"><?php printf(_c('Archive for %s|Monthly archive page'), get_the_time(__('F, Y'))); ?></h1>
                  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                    <h1 class="course_name_1"><?php printf(_c('Archive for %s|Yearly archive page'), get_the_time(__('Y'))); ?></h1>
                  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                    <h1 class="course_name_1"><?php _e('Author Archive'); ?></h1>
                  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                    <h1 class="course_name_1"><?php _e('Blog Archives'); ?></h1>
                  <?php } ?>
</div>

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