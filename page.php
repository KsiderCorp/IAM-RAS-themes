<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/template/css/science.css">

<style>
.sc_single-head { background-image: url(https://source.unsplash.com/1600x900/?technology); }
</style>



<div class="sc_single-txt sc_single-head">
<div class="sc_single-title novideo">
    <div class="sc_single-name">
      
       <?php the_title(); ?>
            
    </div>
</div>
 
<div class="shadows"></div>
</div>

<div class="sc_single-footer">
        
       <div class="pure-g">
       <div class="block">
        <div class="pure-u-1-3">
            
        <div class="science-date">
           <span><?php the_time('j F, Y | G:i'); ?></span>	 
        </div>
            
        </div>
  <div class="pure-u-1-3 center">

    <div class="likely likely-small" data-single-title="Поделиться">
		<div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
		<div class="twitter" title="Поделиться ссылкой в Твиттере"></div>
		<div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
		<div class="gplus" title="Поделиться ссылкой в Гугл-плюсе"></div>
    </div>
    
 </div>

       </div>
    </div>  
   
        
    </div>    

 

<div class="sc_single-content" id="content">
    
<div class="block">
       
       <div class="pure-g">
           <div class="pure-u-2-3">    
        <div class="sc_single-block">
            <?php the_content(); ?>
        </div>
          </div>

       </div>

        


</div>  
</div>



<div class="science-single_comment">
     <div class="block">
     <h3 class="center">Коментарии</h3>
     <?php comments_template(); ?>
     </div>
</div> 




<?php endwhile; else : ?>
<?php endif; ?>

	
<?php get_footer(); ?>