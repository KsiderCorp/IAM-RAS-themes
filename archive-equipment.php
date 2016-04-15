<?php get_header(); ?>
<style>
#navig.gettop,
#navig.gettop #searchform,
#navig.gettop #searchform input[type=search]
		{background:transparent; color:#fff;} 
#navig.gettop a { color:#fff;}	
.logoblock a.logo {
  border-left: 4px solid #fff;
}
</style>

<div class="eauipmentbody">
<div class="block">

<div class="eqarhhead">
<div class="pure-g">

<div class="pure-u-1">
<h1 class="center">Экспериментальная база</h1>
<p><a id="navline"></a></p>
<div class="fltr">
    
    <form action="javascript:void(null);" id="filterform">
    <input type="radio" id="termall" name="filtr" value="eqall" checked> <label for="termall">Все</label>
    <?php 
$args = array(
	'orderby'       => 'id', 
    'hierarchicals' => false,
	'order'         => 'ASC',
	'hide_empty'    => false, );  
$terms = get_terms('kindofuse', $args);
foreach ($terms as $term) {
echo '<input type="radio" id="term'.$term->term_id.'" name="filtr" value="'.$term->term_id.'" > <label for="term'.$term->term_id.'">'.$term->name.'</label>';}
?>
  </form>
    
</div>
</div>
</div>

</div>

<div class="pure-g" id="eqlist">
<?php 
query_posts($query_string . "&posts_per_page=-1");
if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-3 pure-u-xl-1-4 eqit eqall <?php 
if( has_term( '', 'kindofuse', $post->ID ) ){
$cur_terms = get_the_terms( $post->ID, 'kindofuse' );
foreach($cur_terms as $cur_term){
	echo ' '.$cur_term->term_id.' ';};};  ?>">



<div class="eauipmentitems">
<style>
<?php if( get_field('mainpic') ):?>
.eqarch-cover.id-<?php the_ID(); ?> {
	width:100%; 
	padding-bottom:60%;
	border-radius:0;
	background-image: url(<?php the_field('mainpic'); ?>);
	background-size: cover; 
	background-repeat:no-repeat;
	background-position:30% 50%;}
<?php else : ?>
<?php endif; ?> 
</style>

<div class="eqarch">
<div class="eqarch-cover id-<?php the_ID(); ?>"></div>
</div>


<div class="eqarch-content">
<div class="eqarch-ttl">
<a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a>
</div>

<div class="eqarch-excerpt">
<?php the_excerpt(); ?>
</div>
</div>


</div>
</div>
<?php endwhile; else : ?>
<?php endif; ?>
</div>


<?php if (function_exists('wp_corenavi')) :?> 
<div class="block"><div class="pure-g">
<div class="pure-u-1" >

<div class="navigation center">
 <?php wp_corenavi(); ?>
</div>

</div>
</div></div>
<?php else : endif; ?>
</div>
</div>	
<?php get_footer(); ?>