<?php
/*

*/
 get_header(); ?>

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


<div class="memlist">
	
<div class="block">	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="mem-titel"><h1>
<?php the_title(); ?>
<a href="" id="navline"></a>
</h1></div>

<div class="memlist-content">
<?php the_content(); ?>
</div>

<?php endwhile; else : ?>
<?php endif; ?>

</div>	
</div>
	
<?php get_footer(); ?>