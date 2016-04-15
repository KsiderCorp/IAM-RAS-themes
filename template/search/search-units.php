<?php 
$labid = $post->post_name;
if(has_term( 'sunits', 'kind', $post->ID ) ){
$bossterm = 'boss';}
else {$bossterm = 'specboss';}

$args = array( 
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => $labid ,
		),
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => $bossterm,
			'operator' => 'AND',
		),
	),
'post_type'=>'employees',
'posts_per_page' => 1, 
'order'=> 'ASC', );
$postslist = get_posts( $args );?>

<style>
.result-cover.id-<?php the_ID(); ?> a{
	color:#2980b9;}
</style>
<div class="pure-g">
<div class="pure-u-1-5">
<div class="result-cover id-<?php the_ID(); ?>">
<h1><a href="/#otdely"><i class="icon-lab"></i></a></h1>
</div>
</div>

<div class="pure-u-4-5">
<div class="result-content"><div class="result-ttl">
<a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a>
</div>

<div class="result-excerpt">
<?php $postslist = get_posts( $args ); foreach ($postslist as $post) :  setup_postdata($post); include(TEMPLATEPATH . '/tp/boss.php');  wp_reset_postdata(); endforeach; ?>
</div></div>
</div>
</div>