<?php get_header('science'); ?>


<?php 
 $tid = $wp_query->get_queried_object_id(); 

if( get_field('photo', 'science_categories_'.$tid) ):
$attachment_id = get_field('photo', 'science_categories_'.$tid);
$size = "full"; // (thumbnail, medium, large, full or custom size)
$image = wp_get_attachment_image_src( $attachment_id, $size );?>

<style>
.science-wrap.id<?php echo $tid; ?> {
	background-image: url(<?php echo $image[0]; ?>);
}
</style>
<?php else :?>
<?php endif; ?>	


<div class="science-wrap taxonomy id<?php echo $tid; ?>">
    <div class="block">
       
<div class="science-head_block">
<div class="science-logo paged">
     <a href="/science/"><i class="icon-arrow-left-1"></i></a> <?php single_cat_title(''); ?> <a href="feed/"><i class="icon-rss-3"></i></a>
 
</div>   
   <div class="description">
 <?php 
       $description = term_description();
       echo $description;?>      
   </div>
    
<!--<div class="science_navigation">
<ul>
<?php $sciebc = array(  
		'container' => false,
		'theme_location'  => 'science', 
		'items_wrap' => '%3$s'		);  
    wp_nav_menu($sciebc); ?>
</ul>    
</div>  -->

    </div>     
         
<div class="science-content">

<div class="pure-g">

<div class="pure-u-1">
<?php 
$do_not_duplicate = array(); 
 $month = '';   
$arg = array( 
    'post_type' => 'science',
    'posts_per_page'=> -1,
    'post__not_in' => $do_not_duplicate,
    'order' => 'ASC',
    'post_status' => array( 'publish', 'future' ),
    'tax_query' => array(
		array(
			'taxonomy' => 'science_categories',
			'field' => 'id',
			'terms' => $tid)),
);
$query = new WP_Query( $arg );
while ( $query->have_posts() ) : $query->the_post(); 
$postdate = get_the_time( 'j F, Y', $post->ID ); 
$posttime = get_the_time( 'G:i', $post->ID ); 
$status = get_post_status();
$do_not_duplicate[] = $post->ID;    
    
$current_month = get_the_date( 'F' ); 
if ( $month != $current_month ) echo '<div class="pure-u-1"><div class="curent_term"><h4>' . $current_month . '</h4></div></div>';   
    ?>
 
<div class="science-term_archive <?php echo $status; ?> ">
   <div class="science-term_date">
       <div class="futures_date">
         <?php echo $postdate; ?>  
       </div>
   </div>
    <div class="science-term_exerpt">
       <div class="science-term_title">
        <a href="<?php the_permalink(); ?>">
           <span class="title">
<?php if(has_post_format( 'video' ) ) : ?>
<i class="icon-video"></i>
<?php elseif( has_post_format( 'aside' ) ) : ?>
    <i class="icon-news"></i>
<?php else : ?>
    <i class="icon-news"></i>
<?php endif; ?> <?php the_title(); ?>:</span>
           <span class="discription"><?php the_excerpt(); ?></span>
        </a>
       </div>
       <div class="science-term_dicript">
           <div class="pure-g">
               <div class="pure-u-4-5">
  <?php the_terms( $post->ID, 'science_categories', ' '); ?>	           
              </div>
 
           </div>
       </div> 
    </div>
</div> 
    

<?php 
 $month = $current_month;  
 wp_reset_postdata(); ?>
<?php endwhile; ?>
</div> 



</div>        
        

    
</div>
    

   
  </div>
  
<div class="shadow"></div>   
</div>



<?php get_footer(); ?>