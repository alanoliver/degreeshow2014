<?php
/*
Template Name: Information
*/
?>

<?php get_header(); ?> 


        

            <div id="main">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
              
                <br />
                <div style="clear:both"></div>
                
                
                
                
        
                
                
                <div class="article">
                      <?php the_content(); ?>
                	  
                </div>
            <?php endwhile; ?>
            <?php else : ?>
                <h1><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
            <?php endif; ?>
            
            
      <div class ="info_image"><img src="http://i49.tinypic.com/2s0z1vp.jpg" alt="Speakman LT" title="Speakman LT" width="626" height="" /></a>     </div>            


<div id="info_copy">
  <h1><?php the_title(); ?></h1>
  <br><br><br>
The University of Leeds School of Design<br> Degree Show 2014 will take place between<br> June 16th and June 20th.
<br><br>
The show will feature work from<br> students of all five of our courses:<br><br>
BA Hons Art & Design<br>
BA Hons Design & Technology Management<br>
BA Hons Fashion Design<br>
BA Hons Graphic & Communication Design<br>
BA Hons Textile Design<br>

</div>

     <div class ="info_image"><img src="http://i47.tinypic.com/25gquky.jpg " alt="Longest Corridor" title="Longest Corridor" width="626" height="" /></a>     </div>            



    <div class ="info_image"><img src="http://i49.tinypic.com/24mascy.jpg" alt="Car Park" title="Car Park" width="415" height="" /></a>     </div>


 <div class ="info_image"><img src="http://i48.tinypic.com/k9b8jn.jpg" alt="Great Hall" title="Great Hall" width="626" height="" /></a>     </div>
    
    
     <div class ="info_image"><img src="http://i50.tinypic.com/14cz89e.jpg" alt="Courtyard" title="Courtyard" width="626" height="" /></a>     </div>
      
      <div class ="info_image"><img src="http://i48.tinypic.com/1zf3gk9.jpg" alt="Parkinson Building" title="Parkinson Building" width="415" height="" /></a> </div>
      
      
     <div class ="info_image"><img src="http://i46.tinypic.com/29monqv.jpg" alt="Roger Stevens" title="Roger Stevens" width="626" height="" /></a>     </div>            
      
      <div class ="info_image"><img src="http://i50.tinypic.com/jry5jq.jpg" alt="Rock" title="Rock" width="415" height="" /></a> </div>
       

<div class ="info_image"><img src="http://i50.tinypic.com/2ykxdza.jpg" alt="Lake" title="Lake" width="626" height="" /></a>     </div>
        
<div class ="info_image"><img src="http://i48.tinypic.com/2z8nggh.jpg" alt="Lecture Theatre" title="Lecture Theatre" width="626" height="" /></a> </div>




<div class ="info_image"><img src="http://i50.tinypic.com/x3hapw.jpg" alt="EC Stoner" title="EC Stoner" width="415" height="" /></a> </div>

<div class ="info_image"><img src="http://i48.tinypic.com/243jeiv.jpg" alt="Studio" title="Studio" width="626" height="" /></a> </div>



            
            
<?php get_footer(); ?>
