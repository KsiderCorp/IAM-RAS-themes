<?php get_header(); ?>

<style>
#navig.gettop,
#navig.gettop #searchform,
#navig.gettop #searchform input[type=search]
		{background:transparent; color:#fff;} 
#navig.gettop a { color:#fff;}		
	
	#vote {
	background: #E0505F;
	padding:10% 0;
	-webkit-box-shadow: 0 10px 10px #fff;
	box-shadow: 0 10px 10px #fff;}
	
.vote {
	padding-bottom:1em;
	text-align: center;
	font-size:4em;
	color:#fff;
	font-family:'Roboto Slab', Helvetica Narrow, Arial, sans-serif;
-webkit-transition:background 0.5s ease-in-out;
-o-transition:background 0.5s ease-in-out;
transition:background 0.5s ease-in-out;
	}

.exerpt {
	background:#fff;
	padding:2em;
    margin:1em;
-webkit-box-shadow:1px 2px 10px 0 rgba(0, 0, 0, .5);
	box-shadow:1px 2px 10px 0 rgba(0, 0, 0, .5);
}
.exerpt a {
	color:#313131;
	font-size:1.3em; 
	font-weight:bold;}	
	
.timline {
	margin-top:1em;
	padding-top:1em; 
	border-top:1px solid #ddd;
	font-size:0.8em;}	
</style>

<div id="vote" class="voter">
	
<div class="vote">
	
<div class="block">
<div class="pure-g">
	<div class="pure-u-1">

		Выборы директора
		<a id="navline"></a>


	</div>
	
</div>

</div>

</div>
	
<div class="block">
	<div class="pure-g">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="pure-u-1-2">
<div class="exerpt">

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
<div class="slipcover id<?php the_ID(); ?>"></div>

 <?php elseif( get_field('postphoto') ):?>
<style>
.slipcover.id<?php the_ID(); ?> {
background:	#2c3e50 url(<?php the_field('postphoto'); ?>);
	background-size:cover; 
	background-repeat:no-repeat;
	background-position:50% 50%;}
</style>
<div class="slipcover id<?php the_ID(); ?>"></div>
<?php else : ?>
<?php endif; ?>




<a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>

<p>
<?php the_excerpt(); ?>
</p>

<div class="timline">	
<div class="pure-g">
	<div class="pure-u-1 center"><?php the_time('d.m.Y '); ?></div>
</div>
</div>
	
</div>
</div>

<?php endwhile; else : ?>
<?php endif; ?>
		
		
	</div>
</div>
</div>

	
<?php get_footer(); ?>