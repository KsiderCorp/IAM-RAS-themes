<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="block">
<div class="pure-g">
<div class="pure-u-1">
<div class="singttl"><h1><?php the_title(); ?></h1></div>
<hr>
<a id="navline"></a>
</div>
</div>


<!-- Content -->
<div class="pure-g">
<div class="pure-u-3-4">
<?php the_content(); ?>
</div>
<div class="pure-u-1-4">

<div class="categories">
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


<!-- коменты -->
<div class="comm">

<div class="pure-g">
<div class="block">

<div class="pure-u-1">
<h3>Коментарии:</h3>
</div>

</div>
</div>

<div class="block">
<div class="commblock">

<div class="pure-g">
<div class="pure-u-1" >
<div class="block"><?php comments_template(); ?></div>
</div>
</div>

</div>
</div>
</div>

<?php endwhile; else : ?>
<?php endif; ?>

	
<?php get_footer(); ?>