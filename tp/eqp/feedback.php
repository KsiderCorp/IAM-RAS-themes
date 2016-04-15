<?php // include(TEMPLATEPATH . '/tp/eqp/sentf.php'); ?>	<?php // include(TEMPLATEPATH . '/testmail.php'); ?>	


<form action="<?php // the_permalink(); ?>" method="post"  id="ToSend" class="order go confirmer">
<div class="expboss">
<?php 
$lid = $post->post_name;
$args = array( 
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
'order'=> 'ASC', );
$postslist = get_posts( $args );  
foreach ($postslist as $post) :  setup_postdata($post);?>

<?php include(TEMPLATEPATH . '/tp/peep.php'); ?>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>
</div>

<a class="formlink" href="mailto:laboratory@iam.ras.ru?subject=[Лаборатоия]<?php the_title(); ?>"><i class="icon-paperplane"></i> Напишите нам</a>
	
	</form>