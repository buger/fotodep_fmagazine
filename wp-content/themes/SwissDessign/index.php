<?php get_header(); ?>
  
  <div id="left_container">
  
    <h3>Portfolio</h3>
    <ul class="left_list">
    
       <?php
         global $post;
         $myposts = get_posts('numberposts=9&category_name=Portfolio');
         foreach($myposts as $post) :
           setup_postdata($post);
         ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      
       <?php endforeach; ?>    
    </ul>
    
    <h3>About</h3>
    
    <p>Mike Kikuchi 1980.10.21/Designer Born in Vienna Living in London</p>

    <p>Expert in web design &amp; user interface. Illustrations design, focus on font and usability.</p>
    
    <h3>Contact</h3>
    
    <ul class="left_list">
      <li>Mike Kikuchi</li>
      <li><a href="mailto:info@dessign.net">info@dessign.net</a></li>
       <li><a href="http://www.twitter.com">Twitter</a></li>
      <li><a href="http://www.facebook.com">Facebook</a></li>
      <li><a href="http://www.tumblr.com">Tumblr</a></li>
      <li class="last"><a href="http://www.flickr.com">Flickr</a></li>
    </ul>
    
    <h3>Links</h3>
    
    <ul class="left_list">
      <?php wp_list_bookmarks('title_li=&categorize=0'); ?>
    </ul>
    
  </div><!--//left_container-->
  
  
  <div id="center_container">
  
     <?php
       global $post;
       $myposts = get_posts('numberposts=5&category_name=Featured Small');
       foreach($myposts as $post) :
         setup_postdata($post);
       ?>
       
    
    <div class="featured_post">
      <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); //echo substr(get_the_title(),0,35); ?></a></li>
      
      <?php
      if ( has_post_thumbnail() ) {
        ?> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-small'); ?></a> <?php
      } else {
        ?> <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" /></a> <?php
      }
      ?>
    </div><!--//featured_post-->
    
     <?php endforeach; ?>    
    
  </div><!--//center_container-->
  
  
  <div id="right_container">
  
     <?php
       global $post;
       $myposts = get_posts('numberposts=5&category_name=Featured Big');
       foreach($myposts as $post) :
         setup_postdata($post);
       ?>
       
    <div class="featured_post">
      <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); //echo substr(get_the_title(),0,85); ?></a></h3>
      
      <?php
      if ( has_post_thumbnail() ) {
        ?> <span class="home_image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-big'); ?></a></span> <?php
      } else {
        ?> <a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image() ?>" class="featured_big" /></a> <?php
      }
      ?>
      
    </div><!--//featured_post-->
  
     <?php endforeach; ?>    
    
  </div>
  
<?php get_footer(); ?>