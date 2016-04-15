<?php
/*

Template Name: Conference Reports

*/
get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/template/badge.css">
<a href="" id="navline"></a>

<div class="report_page">

<div class="report_side clearfix">

<div class="report_logo" ><a href="/"><img src="<?php bloginfo("template_url"); ?>/img/confer.svg"></a>
<div class="shad"></div></div>
   
    <div class="report_menu">
    <div class="spied">
<?php if( get_field('download') ): the_field('download'); else : endif;  ?>
    </div>      
    </div>
</div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="report_content">

<div class="report_titel" id="report_titel">
      	<?php the_title(); ?>           
</div>
       
<div class="report_text-block">
<div class="block"><?php the_content(); ?></div>

<?php if( get_field('line1') ): the_field('line1'); else : endif;  ?>                
</div>
     
</div>

<?php endwhile; else : ?>
	<?php endif; ?>


</div>





<?php get_footer(); ?>