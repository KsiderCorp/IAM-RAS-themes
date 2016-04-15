<style> 
<?php if( get_field('mainpic') ):?>
.result-cover.id-<?php the_ID(); ?> {
	background-image: url(<?php the_field('postphoto'); ?>);}
<?php elseif( has_post_thumbnail() ):
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id);
$image_url = $image_url[0];?>

.result-cover.id-<?php the_ID(); ?> {
background-image: url(<?php echo $image_url;?>);}
    
<?php else : ?>
<?php endif; ?> 
</style>

<div class="pure-g">
<div class="pure-u-1-5">
<div class="result-cover id-<?php the_ID(); ?>"></div>
</div>

<div class="pure-u-4-5">
<div class="result-content">

<div class="date"><?php the_time('d.m.Y '); ?></div>
<div class="result-ttl">
<a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a>
</div>

<div class="result-excerpt">
<?php the_excerpt(); ?>
</div>


</div>
</div>
</div>