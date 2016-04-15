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
<?php 
$award = 'reward';
$patents = 'patent';
$book = 'book-1';
	if( has_term('gift', 'bookgift')  ): 
	$icon = $award;
	elseif ( has_term('book', 'bookgift')  ):  
	$icon = $book; 
	else :
	$icon = $patents; 
	endif; ?>

<div class="bookift">
<div class="block">    
    

<div class="eqarhhead">
<div class="pure-g">
<div class="pure-u-1">
<h1 class="center"><?php single_cat_title(''); ?></h1>
<p><a id="navline"></a></p>

<div class="catg">
    
<ul>	
<?php 
$terms = get_terms('bookgift');
$currentterm = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

foreach ($terms as $term) {
$class = $currentterm->slug == $term->slug ? 'current' : '' ;
    
	echo '<li class="'. $class .'"><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';} ?>
</ul>
   
</div>
</div>
</div>
</div>


<div class="pure-g">
<?php 
query_posts($query_string . "&posts_per_page=-1");
if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php if( get_field('cover') ):?>
<style>
.emptygift.id-<?php the_ID(); ?> {background-image: url(<?php the_field('cover'); ?>);}
</style>
<?php else : ?>
<?php endif; ?>	

<div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-3 pure-u-xl-1-3">

<div class="bookitems">

<div class="emptygift id-<?php the_ID(); ?> <?php if( has_term('book', 'bookgift') ): echo 'book'; elseif( has_term('patents', 'bookgift') ): echo 'patent'; else : echo 'gift'; endif; ?>">
</div>

<div class="auth">
<?php echo get_the_term_list( $post->ID, 'authors', '', ', ', '' ); ?>
</div>
<div class="booktitle-si">
<a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="gift-link post-link"  data-link="<?php echo home_url();?>/ajaxloader/">
<?php the_title(); ?>
</a>
</div>



<div class="excerpt hide">
<?php the_excerpt(); ?>
</div>

</div>

</div>
<?php endwhile; else : ?>
<?php endif; ?>
</div>
<div class="bookcontent zoom-anim-dialog white-popup mfp-hide" id="gift">
<div id="single-post-container">

</div>
</div>


<?php if (function_exists('wp_corenavi')) :?> 

<div class="pure-g">
<div class="pure-u-1" >
<div class="navigation center">
 <?php wp_corenavi(); ?>
</div>
</div>
</div>

<?php else : endif; ?>

</div>
</div>
	
<?php get_footer(); ?>