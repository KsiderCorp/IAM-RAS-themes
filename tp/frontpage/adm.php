<?php 
$hboss = array( 
'post_type'=>'employees',
'emptype' =>  'admpack', 
'emptype' =>  'hightboss', 
'posts_per_page' => 3, 
'orderby'=> 'date',
'order'=> 'DESC' );

$admin = array( 
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => 'admpack' ,
		),
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => 'hightboss',
			'operator' => 'NOT IN',
		),
	),
'post_type'=>'employees',
'posts_per_page' => -1, 
'orderby'=> 'date',
'order'=> 'DESC', ); ?>

<!-- Администрация -->
<div class="pure-g">
<div class="pure-u-1">
<h2 class="center">Администрация</h2>

</div>

<?php $postslist = get_posts( $hboss );  
foreach ($postslist as $post) :  setup_postdata($post);?>

<?php if( get_field('photo') ):
	$attachment_id = get_field('photo');
	$size = "thumbnail"; 
	$image = wp_get_attachment_image_src( $attachment_id, $size );
?>
<style>
.cat-it.id-<?php the_ID(); ?> {
background-image: url(<?php echo $image[0]; ?>);} 
</style>
<?php else :?>
<style>
.cat-it.id-<?php the_ID(); ?> {
background-image: url(<?php bloginfo("template_url"); ?>/img/emploers/yo.svg);}
</style>
<?php endif; ?>	

<div class="pure-u-1-3">
<?php include(TEMPLATEPATH . '/tp/peep.php'); ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>
</div>
<hr>
<div class="pure-g">

<?php $postslist = get_posts( $admin );  
foreach ($postslist as $post) :  setup_postdata($post);?>
<div class="pure-u-1-5  pure-u-sm-1">
<?php include(TEMPLATEPATH . '/tp/peep.php'); ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

</div>


<div class="all_emloy"><a href="/employees/">Все сотрудники</a></div>