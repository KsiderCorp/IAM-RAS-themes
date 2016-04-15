<style> 
<?php if( get_field('mainpic') ): $attachment_id = get_field('mainpic'); $size = "full";$image = wp_get_attachment_image_src( $attachment_id, $size );?>
.result-content.id-<?php the_ID(); ?> {
background-image: url(<?php echo $image[0];?>);}
<?php else : endif; ?>	
</style>

<div class="result-content id-<?php the_ID(); ?> search-result_science">
<div class="date"><?php the_time('d.m.Y '); ?></div>
<div class="search-result_wrap">
 <a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a> <?php the_excerpt(); ?>  
</div>

</div>