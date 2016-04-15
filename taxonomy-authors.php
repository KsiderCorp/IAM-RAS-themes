<?php get_header(); ?>
<a id="navline"></a>
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
	endif;
	
$term_id = $wp_query->get_queried_object_id();
$taxonomy = "authors";
$term = get_term_by('id', $term_id, $taxonomy);
$counte = $term->count;
$description = term_description();	
	?>

<!-- тут верхнее изображение -->


<?php
if( get_field('id', 'authors_'.$term_id) ) :
$pagid = get_field('id', 'authors_'.$term_id);
?>

<?php 
$autpag = array( 
'post_type'=>'employees',
'page_id' => $pagid,);
$autorpages = get_posts( $autpag );  
foreach ($autorpages as $post) :  setup_postdata($post);?>
<?php if( get_field('photo') ): 
$attachment_id = get_field('photo'); 
$size = "medium"; 
$image = wp_get_attachment_image_src( $attachment_id, $size ); else : endif; ?>	

<style>
.portr.id-<?php echo $term_id; ?> {
	background:#fff url(<?php echo $image[0];?>);
	background-size: cover;
  	background-repeat: no-repeat;
  	background-position: center center;
    width: 100%;
    padding-bottom: 100%;
    border-radius:10%;
    }
</style>

<?php wp_reset_postdata(); ?>
<?php endforeach; ?>

<div class="block">

<div class="authorttl">
<div class="pure-g">
<div class="pure-u-1-5">
<div class="portr id-<?php echo $term_id; ?>"></div>
</div>
   
<div class="pure-u-4-5">
<h1>
<a href="<?php the_permalink(); ?>" class="post-link" rel="<?php the_field('id', 'authors_'.$term_id) ?>"  data-link="<?php echo home_url();?>/ajaxloader/">
<?php single_cat_title(''); ?><?php  echo ' <span class="count">('; echo $counte; echo ')</span>' ; ?>
</a>
</h1>
</div>

</div>
</div>

</div>

<div class="zoom-anim-dialog white-popup mfp-hide" id="cont-<?php the_ID(); ?>"><div id="single-post-container"></div></div>
<?php else :?>

<div class="block">
<div class="pure-g">
<div class="pure-u-1" >
<div class="singttl">
<h1><i class="icon-user-circle-outline"></i> <?php single_cat_title(''); ?><?php  echo ' <span class="count">('; echo $counte; echo ')</span>' ; ?> </h1>
</div>
<a id="navline"></a>
<div class="descript">
<?php  echo $description; ?>
<hr>

</div>
</div>
</div>
</div>

<?php endif; ?>


<div class="block">
<div class="pure-g">
<div class="pure-u-3-4" >
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="giftb">

<div class="pure-g">

<div class="pure-u-1-5 cover">

<?php if( get_field('cover') ):?>
<style>
.emptygift.id-<?php the_ID(); ?> {background-image: url(<?php the_field('cover'); ?>);}
</style>
<?php else : ?>
<style>
.emptygift.book {background-image: url(<?php bloginfo("template_url"); ?>/img/gifts/bookcover.svg);}
.emptygift.patent {background-image: url(<?php bloginfo("template_url"); ?>/img/gifts/idea.svg);}
.emptygift.gift {background-image: url(<?php bloginfo("template_url"); ?>/img/gifts/reward.svg);}
</style>
<?php endif; ?>	

<div class="emptygift id-<?php the_ID(); ?> <?php if( has_term('book', 'bookgift') ): echo 'book'; elseif( has_term('patents', 'bookgift') ): echo 'patent'; else : echo 'gift'; endif; ?>">
</div>

</div>

<div class="pure-u-4-5">
<div class="auth">
<?php echo get_the_term_list( $post->ID, 'authors', '', ', ', '' ); ?>
</div>

<div class="booktitle-si">
<a href="<?php the_permalink(); ?>" rel="<?php the_ID(); ?>" class="gift-link post-link"  data-link="<?php echo home_url();?>/ajaxloader/">
<?php the_title(); ?></a>
</div>

<div class="excerpt">
<?php the_excerpt(); ?>
</div>

</div>

</div>



</div>
<hr>
<?php endwhile; else : ?>
<?php endif; ?>
</div>
<div class="pure-u-1-4">

<div class="categories">	 
<ul>	
<?php 

$terms = get_terms('bookgift');
foreach ($terms as $term) {
	echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
}
?>
	
</ul>
</div>


</div>

</div>
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

	
<?php get_footer(); ?>