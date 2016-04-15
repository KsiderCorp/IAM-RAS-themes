<?php get_header('science'); ?>

<div class="science-wrap" id="top">

<div class="block">
<?php if(!is_paged() ) : ?> 

     <div class="science-head_block">
        <div class="science-logo">
        <div class="signature"></div> 
        </div>   
    </div>  
    
<div class="science_navigation-paged">
<ul>
<?php
$terms = get_terms( 'science_categories', array('parent' => 0, 'hierarchical' => 0, 'hide_empty' => 1 ) );
foreach ( $terms as $term ){    
    $tid =  $term->term_id; 
    $termname = 'science_categories';
    $image = '';   
if( get_field('photo', 'science_categories_'.$tid) ):
    $attachment_id = get_field('photo', 'science_categories_'.$tid);
    $size = "medium";
    $image = wp_get_attachment_image_src( $attachment_id, $size );
else : endif;  
    $termname = $term->name;
    $termlink = get_term_link( $term );
?>
<!--<style>
.coID.i<?php echo $tid; ?> {
	background-image:url(<?php echo $image[0];?>);}
</style>-->

<li class="coID i<?php echo $tid;?>">
<a href="<?php echo $termlink;?>"><span><?php echo $termname;?></span></a>
</li>

<?php  } ?> 

</ul>    
</div> 

<?php else : ?>

     <div class="science-head_block">
        <div class="science-logo paged">
        <div class="signature"></div> 
        </div>   
    </div>  
    
<div class="science_navigation">
<ul>
<?php $sciebc = array(  
		'container' => false,
		'theme_location'  => 'science', 
		'items_wrap' => '%3$s'		);  
    wp_nav_menu($sciebc); ?>
    
    <li><a href="feed/"><i class="icon-rss-2"></i></a></li>
</ul>    
</div> 
  
<?php  endif; ?>   
</div> 
   
<a id="scline"></a> 
<div class="science-ribbon"><a href="#top" class="scrollto"></a></div>  
    
<div class="science-content">
   <div class="block">
    <div class="pure-g">

<?php 
$paged = get_query_var('paged') ? get_query_var('paged') : 1;   
$arg = array( 
    'paged'=> $paged,
    'post_type' => 'science',
    'posts_per_page'=> 24,
);
query_posts($arg);
$count = 0; 
$do_not_duplicate = array();          
if (have_posts()) : while (have_posts()) : the_post(); $do_not_duplicate[] = $post->ID; $count++;	
$postdates = get_the_time( 'j M, Y', $post->ID ); 
$posttime = get_the_time( 'G:i', $post->ID ); 
        
$image = '';
if( get_field('mainpic') ): 
$attachment_id = get_field('mainpic'); 
$size = "full";
$image = wp_get_attachment_image_src($attachment_id, $size );
else : endif; 
        
$cur_terms = get_the_terms( $post->ID, 'science_authors' );
$autors = ' ';
foreach($cur_terms as $cur_term){
    $term_id = $cur_term->term_id;
    if( get_field('weblink', 'science_authors_'.$term_id) ) :
    $link = get_field('weblink', 'science_authors_'.$term_id);
    else : endif;   
    $posit = '';
    if( get_field('webpos', 'science_authors_'.$term_id) ) :
    $pos = get_field('webpos', 'science_authors_'.$term_id);
    $posit = '<span class="position">'.$pos.'</span> ';
    else : endif;
	$autors = $posit.'<a href="'.$link.'" class="sc_aithors-link">'. $cur_term->name .'</a>';
}
?>
<style>
.science-post_margin.id-<?php the_ID(); ?> {background-image:url(<?php echo $image[0]; ?>);}
</style>

<div class="pure-u-1">
   <div class="science-post_margin id-<?php the_ID(); ?>">
    <div class="pure-g">

<div class="pure-u-1-5">
   
    <div class="science-post_type">
<?php if(has_post_format( 'video' ) ) : ?>

<?php 
 if(get_field('link') ) : 
$vidlink = get_field('link');
 else : 
$vidlink = 'XRGFpqdIQRE'; 
 endif; ?>
 
<a href="http://www.youtube.com/watch?v=<?php echo $vidlink; ?>" class="science-video-l popup-youtube"></a>
 

<?php elseif( has_post_format( 'aside' ) ) : ?>
<?php else : ?>

<span><i class="icon-news"></i></span>

<?php endif; ?>
   </div>
    
</div>
<div class="pure-u-4-5">
    
    <div class="science-post">
      
       <div class="science-post_dates">
   <span><?php echo $postdates; ?> </span>
   <span><?php echo $posttime; ?></span>
       </div>
    
    <div class="science-post_excerpt">
   <span><?php the_title(); ?></span>
   <?php the_excerpt(); ?>
    </div>
    
    <div class="science-post_authors">
<i class="icon-ios-mic-outline"></i> <?php echo $autors; ?>
    </div>
    
    
<a href="<?php the_permalink(); ?>" class="science-post_link"></a>

    </div>
    
</div>

    </div>
    
    <div class="shadow"></div>
   </div> 
</div>

<?php wp_reset_postdata(); ?>
 <?php endwhile; else :  endif; ?> 

</div>        
        

<div class="pure-g">
    <div class="pure-u-1">
<div class="science-pagination">
<?php
  $nv =   array(
'mid_size'           => 1,
'prev_text'          => __( '<i class="icon-arrow-left-1"></i>' ),
'next_text'          => __( '<i class="icon-arrow-right-1"></i>' ),
'screen_reader_text' => __( '' ),
);
  
$nav = get_the_posts_pagination($nv);
$nav = preg_replace('~<h2.*?h2>~', '', $nav);
echo $nav; ?>

</div>
    </div>
</div>     
        
    </div>     
    </div>
<?php if(!is_paged() ) : ?> 
      
<div class="block">
    <div class="science-editors">
    <div class="editors-list">
       <h4>Редакция:</h4>
        <ul>
<?php 
$editors = get_users('blog_id=1&orderby=nicename&order=DESC&role=science'); 
foreach($editors as $user) :
    $user_pic = $user->user_login;
    $the_user = get_user_by('login', $user_pic);
    $the_user_id = $the_user->ID;
    $the_user_url = $the_user->user_url;
    $user_email = $user->user_email;
    $avatar = get_wp_user_avatar_src($the_user_id, 'full'); 
	$string = $user->display_name;
	?> 
<li><a href="mailto:<?php echo $user_email;?>"><?php echo $string;?></a> — <span class="posit"><?php echo get_user_meta($the_user_id, 'position', true); ?></span></li>
<?php endforeach;?>
        </ul>
    </div>

       
<div class="science-subscribe clearfix">
        <p>Если вы оставите свой адрес электронной почты, то мы пришлем вам приглашения на наши мироприятия за неделю до их проведения</p>
        
<?php echo do_shortcode( '[mc4wp_form]' ); ?>
      
      <p>Подписаться можно на обновления RSS <a href="feed/"><i class="icon-rss-2"></i></a></p>
       </div>
        
    </div>
</div>    
<?php else : ?>
<?php  endif; ?> 
     
<div class="shadow"></div> 
</div>
 

<?php get_footer(); ?>