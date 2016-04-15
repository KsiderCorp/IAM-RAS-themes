<?php get_header(); ?>
<style>
#navig.gettop,
#navig.gettop #searchform,
#navig.gettop #searchform input[type=search]
		{background:transparent; color:#fff;} 
#navig.gettop a { color:#fff;}	
#navig.gettop .logoblock a.logo {border-left: 4px solid #fff;
}		
</style>
<?php 
$hboss = array( 
'post_type'=>'employees',
'emptype' =>  'admpack', 
'emptype' =>  'hightboss', 
'posts_per_page' => 3, 
'orderby'=> 'date',
'order'=> 'DESC' );

$labboss = array( 
'post_type'=>'employees',
'emptype' =>  'boss', 
'posts_per_page' => 5, 
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
'order'=> 'DESC', ); 

$employ = array( 
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => 'hightboss',
			'operator' => 'NOT IN',
		),
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => 'admpack',
			'operator' => 'NOT IN',
		),
		array(
			'taxonomy' => 'emptype',
			'field' => 'slug',
			'terms' => 'boss',
			'operator' => 'NOT IN',
		),
	),
'post_type'=>'employees',
'posts_per_page' => -1, 
    
'orderby'=> 'rand',
'order'=> 'ASC', ); 
?>

<div class="emphead">

<div class="empttl">
Люди
</div>
<a id="navline"></a>

</div>

<div id="administration" class="adm">
<div class=" block">
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
<div class="pure-u-1-5">
<?php include(TEMPLATEPATH . '/tp/peep.php'); ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

</div>
</div>
</div>  


<div id="emp" class="emp">
<div class=" block">
<div class="pure-g">
<div class="pure-u-1">
<h2 class="center">Сотрудники</h2>
</div>

</div>

<div class="pure-g">
<?php $postslist = get_posts( $labboss );  
foreach ($postslist as $post) :  setup_postdata($post);?>
<div class="pure-u-1-5">
<?php include(TEMPLATEPATH . '/tp/peep.php'); ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>
</div>

<hr>

<div class="pure-g">
    <div class="pure-u-1-5">
<div class="allpeep_filter">
    
<form action="javascript:void(null);" id="filterform">
      
       <div class="sid-flt">
    <input type="radio" id="lnmmk" name="filtr" value="lnmmk" >
    <label for="lnmmk">Лаборатория неклассических моделей механики композиционных материалов</label>           
       </div>
       
       <div class="sid-flt">
       <input type="radio" id="omsgtm" name="filtr" value="omsgtm" >
    <label for="omsgtm">Отдел механики структурированной и гетерогенной среды</label>         
       </div>
       
       <div class="sid-flt">
      <input type="radio" id="omakm" name="filtr" value="omakm" >
    <label for="omakm">Отдел механики адаптивных композиционных материалов</label>          
       </div>
       
       <div class="sid-flt">
     <input type="radio" id="lfhm" name="filtr" value="lfhm" >
    <label for="lfhm">Лаборатория физико-химической механики</label>           
       </div>
       
       <div class="sid-flt">
    <input type="radio" id="lpcmpt" name="filtr" value="lpcmpt" >
    <label for="lpcmpt">Лаборатория физико-химической механики перспективных технологий</label>            
       </div>
       
     <div class="sid-flt">    
    <input type="radio" id="nosc" name="filtr" value="nonescience" checked>
    <label for="nosc">Не научные должности</label>
      </div>
       
      <div class="sid-flt">    
    <input type="radio" id="termall" name="filtr" value="eqall" checked>
    <label for="termall">Все</label>
      </div>
  
    
</form>
    
</div>
        
    </div>
    <div class="pure-u-4-5">
<div class="pure-g" id="eqlist">
<?php $postslist = get_posts( $employ );  
foreach ($postslist as $post) :  setup_postdata($post); 

if( has_term( '', 'emptype', $post->ID ) ){ 
$depart = get_the_terms( $post->ID, 'emptype' );
$dep_id = array();
foreach($depart as $depart_term){
    $dep_id[] = $depart_term->slug;}
} ?>    
    
<div class="pure-u-1-5 eqit <?php echo implode(" ", $dep_id); ?> eqall">
<?php include(TEMPLATEPATH . '/tp/peep.php'); ?>
</div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?>
</div>
        
    </div>
</div>




</div>
</div>   




	
<?php get_footer(); ?>