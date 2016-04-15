<div class="overnews" id="news">
<div class="news">
<div class="block">


<div class="pure-g">

<div class="pure-u-2-3 pure-u-sm-1">

<div class="pure-g">
  
              
        <?php
$do_not_duplicate = array();    
$sticky = get_option('sticky_posts');
rsort( $sticky );
$sticky = array_slice( $sticky, 0, 10);
$argst = array( 
'category_name' => 'news',
'posts_per_page' => 2, 
'order'=> 'DESC',
'post__in' => $sticky,
'caller_get_posts' => 1, );
query_posts($argst );
if (have_posts()) :  while (have_posts()) : the_post(); $do_not_duplicate[] = $post->ID;?>
<div class="pure-u-1-2 pure-u-sm-1">
<div class="slipnews">

<?php if( has_post_thumbnail() ):?>
 <?php
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id);
$image_url = $image_url[0];?>


<style>
.slipcover.id<?php the_ID(); ?> {
background:	#2c3e50 url(<?php echo $image_url;?>);
	background-size:cover; 
	background-repeat:no-repeat;
	background-position:50% 50%;}
</style>

 <?php elseif( get_field('postphoto') ):?>
<style>
.slipcover.id<?php the_ID(); ?> {
background:	#2c3e50 url(<?php the_field('postphoto'); ?>);
	background-size:cover; 
	background-repeat:no-repeat;
	background-position:50% 50%;}
</style>
<?php else : ?>
<style>
.slipcover.id<?php the_ID(); ?> {
background:	url(<?php bloginfo("template_url"); ?>/img/newsfon.svg);
	background-size:cover; 
	background-repeat:no-repeat;
	background-position:50% 50%;}
</style>
<?php endif; ?>




<div class="slipcover id<?php the_ID(); ?>">
    <div class="slipcontent">
        <h3>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</h3>
        <p>
            <?php the_excerpt(); ?>
        </p>
    </div>

    <div class="shadow animation"></div>
</div>

</div>
 </div>
<?php endwhile; endif; ?>

</div>

<div class="linenews">

<div class="pure-g">
<?php 
$tags = array( 
'posts_per_page' => 8, 
'order'=> 'DESC',
'orderby' =>'date', 
'post__not_in' => $do_not_duplicate,
'tax_query' => array(
		array(
			'taxonomy' => 'category',
			'field' => 'slug',
			'terms' => 'news',
            'include_children' => false,)
    ),
);
query_posts($tags);
if (have_posts()) : while (have_posts()) : the_post(); $do_not_duplicate[] = $post->ID;?>

<div class="pure-u-1-4 nlineblock_wrap">
<div class="nlineblock id<?php the_ID(); ?>">


<a href="<?php the_permalink(); ?>">
<div class="fdates">
<?php the_time('d.m.Y '); ?>
</div>
<?php the_title(); ?>

</a>

<a class="shadow" href="<?php the_permalink(); ?>"></a>
</div>
</div>

<?php wp_reset_postdata(); ?>
<?php endwhile; else : endif; ?>

<div class="pure-u-1 nlineblock_wrap">
<div class=" center">

<h3>
<a href="/category/news/">
Архив
</a>
</h3>
</div>
</div>

</div>


</div>
</div>



<div class="pure-u-1-3 pure-u-sm-1">

<div class="front_science-block">

    <div class="science-category">
    <a href="/science/">
        <span>Научно-</span>
         <span>популярная</span>
          <span>деятельность</span>
    </a>
    </div>

<?php 
$scienceblog = array( 
'post_type' => 'science',
'posts_per_page' => 1, 
'order'=> 'DESC',
'orderby' =>'date', );
query_posts($scienceblog);
if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php if( get_field('mainpic') ): $attachment_id = get_field('mainpic'); $size = "medium";$image = wp_get_attachment_image_src( $attachment_id, $size );?>
<style>.frontpage_science-news.id-<?php the_ID(); ?> {background-image:url(<?php echo $image[0]; ?>);}</style>
<?php else : endif; ?>	

<a class="frontpage_science-news id-<?php the_ID(); ?>" href="<?php the_permalink(); ?>">
   
   <div class="frontpage_science-content">
    <div class="science-date"><?php the_time('d.m.Y '); ?></div>
    <div class="science-titel"><?php the_title(); ?></div>
    
    
   </div>     
   
 <div class="shadow"></div>    
</a>

<?php wp_reset_postdata(); ?>
<?php endwhile; else : ?>
<?php endif; ?>
</div>

</div>

</div>

</div>
</div>
</div>
