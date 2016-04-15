<?php get_header(); ?>


<div class="block indexwrap">
<div class="pure-g">
<a id="navline"></a>
<div class="pure-u-3-4">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="pure-g">
<div class="pure-u-1">
<div class="singttl"><h3><?php the_title(); ?></h3></div>
<hr>
</div>

<div class="pure-u-3-4">
<?php the_excerpt(); ?>
</div>

</div>


<?php endwhile; else : ?>
<?php endif; ?>

</div>

<div class="pure-u-1-4">
<div class="categories">
<a id="navline"></a>
Новости:	 
<ul>	
<?php wp_list_categories('title_li=&orderby=id');?>	
</ul>

Достижения:
<ul><?php 
$terms = get_terms('bookgift');
foreach ($terms as $term) {
	echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';}
?></ul>
</div>
</div>

</div>
</div>



<?php if (function_exists('wp_corenavi')) :?> 
<!-- коменты -->
<div class="comm">

<div class="block">
<div class="commblock">

<div class="pure-g">
<div class="pure-u-1" >

<div class="navigation center">
 <?php wp_corenavi(); ?>
</div>

</div>
</div>
</div>

</div>
</div>


<?php else : endif; ?>
	
<?php get_footer(); ?>