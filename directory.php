<?php
/*
Template Name: Directory
*/
?>

<?php get_header(); ?> 


        

            <div id="main">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
                <h1 style="margin-top:20px;"><?php the_title(); ?></h1>
                <br />
                <div style="clear:both"></div>
                
                
                
                
        
                
                
                <div class="article">
                      <?php the_content(); ?>
                	  
                </div>
            <?php endwhile; ?>
            <?php else : ?>
                <h1><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
            <?php endif; ?>
            
            
            
            
<div class="dir">
 <h4>Art & Design</h4><br /><br />
                <ul>
<?php
query_posts('cat=3$posts_per_page=-1&orderby=title&order=ASC'); // query to show all posts independent from what is in the centre;
if (have_posts()) :
   while (have_posts()) :
      the_post(); ?>
<li>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</li>
<?php  endwhile;
endif;
wp_reset_query();
?>
</ul>
</div>

<div class="dir">
    <h4>Fashion Design</h4><br /><br />
                <ul>
<?php
query_posts('cat=5$posts_per_page=-1&orderby=title&order=ASC'); // query to show all posts independent from what is in the centre;
if (have_posts()) :
   while (have_posts()) :
      the_post(); ?>
<li>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</li>
<?php  endwhile;
endif;
wp_reset_query();
?>
</ul>
</div>

<div class="dir">
                <h4>Graphic & Communication Design</h4><br />
                <ul>
<?php
query_posts('cat=6$posts_per_page=-1&orderby=title&order=ASC'); // query to show all posts independent from what is in the centre;
if (have_posts()) :
   while (have_posts()) :
      the_post(); ?>
<li>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</li>
<?php  endwhile;
endif;
wp_reset_query();
?>
</ul>
</div>

<div class="dir">
        <h4>Textile Design</h4><br /><br />
                <ul>
<?php
query_posts('cat=7$posts_per_page=-1&orderby=title&order=ASC'); // query to show all posts independent from what is in the centre;
if (have_posts()) :
   while (have_posts()) :
      the_post(); ?>
<li>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
</li>
<?php  endwhile;
endif;
wp_reset_query();
?>
</ul>



</div>
            
            
            
<?php get_footer(); ?>