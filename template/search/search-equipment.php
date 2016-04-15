<?php 
$lid = $post->post_name;
$eqp = array( 
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => 'exp-admpack' ,
		),
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => $lid,
			'operator' => 'AND',
		),
	),
'post_type'=>'employees',
'posts_per_page' => -1, 
'order'=> 'ASC', );?>

<style>
<?php if( get_field('mainpic') ):?>
.result-cover.id-<?php the_ID(); ?> {
	width:100%; padding-bottom:100%;
	background-image: url(<?php the_field('mainpic'); ?>);
	background-size: contain; 
	background-repeat:no-repeat;
	background-position:30% 50%;}
<?php else : ?>
<?php endif; ?> 
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


<?php $postslist = get_posts( $eqp ); foreach ($postslist as $post) :  setup_postdata($post); ?>

<?php if( get_field('photo') ):
$attachment_id = get_field('photo');
$size = "large"; // (thumbnail, medium, large, full or custom size)
$image = wp_get_attachment_image_src( $attachment_id, $size );

else : endif; ?>	

<div class="fbposition">Ответсвенный за прибор, <?php if( get_field('rank') ): the_field('rank'); else : echo ''; endif; ?>
<a href="#cont-<?php the_ID(); ?>" class="popup-with-move-anim">
<?php the_title(); ?>
</a></div>


<div class="zoom-anim-dialog white-popup mfp-hide" id="cont-<?php the_ID(); ?>">
<h2><?php the_title(); ?> <a href="<?php the_permalink(); ?>" class="pouplink"><i class="icon-link"></i></a></h2>

<div class="pure-g">
<div class="pure-u-2-3" >

<?php if( get_field('position') ): the_field('position'); else : echo 'Должность'; endif; ?>,<br>
<?php if( get_field('rank') ): the_field('rank'); else : echo ''; endif; ?><br>
<?php if( get_field('phone') ):?>
<a href="tel:<?php the_field('phone'); ?>" class="peepcontl"><?php the_field('phone'); ?></a>
<?php else : endif; ?>	

<?php if( get_field('email') ):?>
<a href="mailto:<?php the_field('email'); ?>" class="peepcontl"><?php the_field('email'); ?></a>
<?php else : endif; ?>	

<?php the_content(); ?>

</div>

<div class="pure-u-1-3" >
<img src="<?php if( get_field('photo') ): echo $image[0]; else : echo '' . bloginfo("template_url") .'/img/emploers/yo.svg';  endif; ?>" class="peepimg">
</div>
</div>

</div>
<?php wp_reset_postdata(); endforeach; ?>

<p><?php the_excerpt(); ?></p>
</div>
</div>
</div>
</div>