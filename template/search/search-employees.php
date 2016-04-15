<?php if( get_field('photo') ):
$attachment_id = get_field('photo');
$size = "large"; // (thumbnail, medium, large, full or custom size)
$image = wp_get_attachment_image_src( $attachment_id, $size );
else : endif; ?>

<style>

.result-cover.id-<?php the_ID(); ?> {
	width:50%; 
	padding-bottom:50%;
	background-image: url(<?php if( get_field('photo') ): echo $image[0]; else : echo '' . bloginfo("template_url") .'/img/emploers/yo.svg';  endif; ?>);
	background-size: cover; 
	background-repeat:no-repeat;
	background-position:30% 50%;}


</style>
<div class="pure-g">
<div class="pure-u-1-5">
<div class="result-cover id-<?php the_ID(); ?>"></div>
</div>

<div class="pure-u-4-5">
<div class="result-content">
<div class="result-ttl">
<a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a>
</div>

<div class="result-excerpt">
<p><?php the_excerpt(); ?></p>
</div>
</div>
</div>
</div>