<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php  if(is_singular('units') ) : 
 include(TEMPLATEPATH . '/single/single-lab.php'); 
 
 elseif( is_singular('equipment') ) : 
 include(TEMPLATEPATH . '/single/single-eqp.php'); 
 
 elseif( is_singular('conference') ) : 
 include(TEMPLATEPATH . '/single/single-conf.php');

 elseif( is_singular('employees') ) : 
 include(TEMPLATEPATH . '/single/single-employees.php');   
 
 elseif( is_singular('science') ) : 
 include(TEMPLATEPATH . '/single/single-science.php');  
 
 else : 
 include(TEMPLATEPATH . '/single/single-else.php'); 
 endif; ?>

<?php endwhile; else : ?>
<?php endif; ?>

	
<?php get_footer(); ?>