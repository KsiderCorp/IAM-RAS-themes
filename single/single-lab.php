<?php if( get_field('topimg') ):?>

<?php include(TEMPLATEPATH . '/template/navstyle.php'); ?>	
	
	<style>
		
		.newsheader {
			position: relative;
			padding: 0;
			padding-top: 10%;
background-image: url(<?php the_field('topimg');?>);
			background-size: cover;
			background-repeat: no-repeat;
			background-position: 50% 100%;
			-webkit-box-shadow: 0 -12px 18px -15px rgba(0, 0, 0, 0.91) inset;
			box-shadow: 0 -12px 18px -15px rgba(0, 0, 0, 0.91) inset;
			color: #fff;
			text-shadow: 1px 1px 2px #000;
		}
		
		.newsheader a{
			color: #f2f2f2;
		}
		.newsheader > .block {
			z-index: 99;
			position: relative;
		}
		.shadow {
			position: absolute;
			top: 0;bottom: 0;left: 0;right: 0;
			background-color: #313131;
			opacity: 0.5;
			z-index: 97;
		}
	</style>
<?php else : ?>
<style>
.newsheader {
padding-top:3em;}
</style>

<?php endif; ?>

<!-- TTL -->
<div class="newsheader">
		<div class="block">
<div class="singttl">
<?php the_title(); ?>
</div>
<a id="navline"></a>

					<div class="pure-g">

						<div class="pure-u-1">
							<div class="sidedate">

<div class="likely likely-small <?php if( get_field('topimg') ): echo 'likely-light'; else : echo ' '; endif; ?>" data-single-title="Поделиться">
<div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
<div class="twitter" title="Поделиться ссылкой в Твиттере"></div>
<div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
<div class="gplus" title="Поделиться ссылкой в Гугл-плюсе"></div>
</div>						
	
							</div>
						</div>

		
					</div>

				</div>
		<div class="shadow"></div>
		</div>



<div class="block">

<!-- Content -->
<div class="pure-g">
<div class="pure-u-3-4">
<?php the_content(); ?>
</div>
<div class="pure-u-1-4">
<div class="singsideblock">
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
$postslist = get_posts( $args );  
foreach ($postslist as $post) :  setup_postdata($post);?>

<?php include(TEMPLATEPATH . '/tp/peep.php'); ?>

<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

</div>
</div>

<div class="pure-u-1">

<?php if ( get_field( 'eaup' ) ): ?>
<div class="equipment">
<ul>	
<h4>Оборудование отдела</h4>
<?php $args = array( 'post_type'=>'equipment', 'eqlab' => $labid , 'posts_per_page' => -1, 'order'=> 'ASC', );
$postslist = get_posts( $args );  
foreach ($postslist as $post) :  setup_postdata($post);?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

</ul>
</div>
<?php else:  ?>
<?php endif; ?>

<!-- pic -->
<!-- тут блок изображений -->

<div class="imglab">
<?php if( get_field('labphoto') ):?>
<?php the_field('labphoto'); ?>
<?php elseif( get_field('expphoto') ):?>
<?php the_field('expphoto'); ?>
<?php else : ?>
<?php endif; ?>
</div>

</div>
</div>

</div>


<!-- employers -->

<div class="employers">

<div class="pure-g">
<div class="block">

<div class="pure-u-1">
<h3>Сотрудники отдела:</h3>
</div>

</div>
</div>

<div class="pure-g">
<div class="block emplb">

<?php 
$labid = $post->post_name;
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
			'operator' => 'NOT IN',
		),
	),
'post_type'=>'employees',
'posts_per_page' => -1, 
'orderby'=> 'title',
'order'=> 'ASC', );
$postslist = get_posts( $args );  
foreach ($postslist as $post) :  setup_postdata($post);?>

<div class="pure-u-1-5">
<?php include(TEMPLATEPATH . '/tp/peep.php'); ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>
</div>
</div>

</div>


<!-- тут блок из публикаций -->
<div class="block">
<div class="pure-g">

<div class="pure-u-1" >
<?php if( get_field('public') ):?>
<?php the_field('public'); ?>

<hr>
<?php else : ?>
<?php endif; ?>

</div>

</div>
</div>