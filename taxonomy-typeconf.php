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
    a.backconf {
        background: #fff;
        color: #000;
        text-decoration: none;
        padding: 0 0.5em;
    }
</style>
<div class="archive-conference">
    <div class="block">
        
        <div class="conference-head center">
            <h1><?php single_cat_title(''); ?></h1>
            <h3><a href="/conference/" class="backconf"><i class="icon-arrow-left-1"></i> Все конференции</a></h3>
  <a id="navline"></a>
        </div>
 
 <div class="pure-g">
    
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
     <div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-2 pure-u-xl-1-3 ">
     <div class="conferece-item">
        
         <div class="conference-title">
             <div class="conference-date">
             <?php if( get_field('dates') ): the_field('dates');  else : endif; ?>
             </div>
             
            <div class="conference-name">
             <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
             
             <div class="conference-tax"><?php the_terms( $post->ID, 'typeconf', ''); ?></div>
             
         </div>
         
         <div class="conference-discription">
             <?php the_excerpt(); ?>
         </div>
         
         
         <div class="conference-download">
<div class="adown">
        <div class="archdownload clearfix"><?php the_field('download'); ?></div>
</div>
         </div>
         
     </div>
     </div>
 
 <?php endwhile; else : ?>
<?php endif; ?>    
     

<?php if (function_exists('wp_corenavi')) :?> 

<div class="pure-u-1" >

<div class="navigation center">
 <?php wp_corenavi(); ?>
</div>

</div>

<?php else : endif; ?>       
    
  <div class="pure-u-1">
      
<div class="mailchimp">

<div class="suscribe">
    Подписка
</div>

<div class="mfo clearfix">
<?php echo do_shortcode( '[mc4wp_form]' ); ?>
</div>

<div class="mchwhy mfo">
<p>После подтверждения подписки вы будете получать информацию о всех проводимых в ИПРИМ РАН конференциях.

Подписка осущетсвляется через сервис <a href="http://mailchimp.com"><img src="<?php bloginfo("template_url"); ?>/img/mailchimps.svg" class="mailchimp-img"></a></p>
</div>
</div>
      
  </div>      
 </div>       
                      
    </div>
</div>




<?php get_footer(); ?>