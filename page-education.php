<?php get_header(); ?>

<?php if( get_field('nokimg') ):
$attachment_id = get_field('nokimg');
$size = "full";
$image = wp_get_attachment_image_src( $attachment_id, $size );?>

<style>
   .edu-nec {
   background-image: url(<?php echo $image[0]; ?>);
   } 
    
</style>


<?php else : endif; ?>	

<?php if( get_field('bakimg') ):
$attachment_id = get_field('bakimg');
$size = "large";
$imagenok = wp_get_attachment_image_src( $attachment_id, $size );?><?php else : endif; ?>	


<div class="edu">
    
    <div class="edu-header" id="header">
    <div class="block">
       
       
<span>Образование</span>
        
<ul class="edunav">
<li><a href="#nec" class="scrollto">НОЦ</a></li>
<li><a href="#chair" class="scrollto">Кафедра</a></li>
<li><a href="#postdoc" class="scrollto">Аспирантура</a></li>
</ul>

        
    </div> 
    </div>
        
    <div class="edu-nec">
      <div class="block">
       <div class="pure-g">
           <div class="pure-u-1-3">
   
<div class="edu-nec-header" id="chair">

        <span>Московский</span><br>
        <span>авиационный институт</span><br>
        <span class="base">(Базовая кафедра)</span><br>
 <div class="edu-nec_contacts">
   <?php 
$args = array( 
'post_type'=>'employees',
'include' => 559,
'posts_per_page' => 1,);
$postslist = get_posts( $args );  
foreach ($postslist as $post) :  setup_postdata($post);?>
<div class="chair-boss">
           <div class="pure-g">
            <div class="pure-u-3-4">
            
<div class="chair-boss_nameblock">
  <div class="chair-boss_zav">Заведующий кафедрой</div>                   
  <div class="chair-boss_name">
 <a href="<?php the_permalink(); ?>" class="post-link" rel="<?php the_ID(); ?>"  data-link="<?php echo home_url();?>/ajaxloader/">
     <?php the_title(); ?> 
     </a>
  </div>
  <div class="chair-boss_rank">
<?php if( get_field('position') ): the_field('position'); else : echo 'Должность'; endif; ?>, <?php if( get_field('rank') ): the_field('rank'); else : echo ''; endif; ?>
  </div>
  </div>                           
                              
            </div>
            <div class="pure-u-1-4">
      <div class="chair-boss_img id-<?php the_ID(); ?>">
<?php if( get_field('photo') ):
$attachment_id = get_field('photo');
$size = "medium";
$image = wp_get_attachment_image_src( $attachment_id, $size );?>
<style>
.chair-boss_img.id-<?php the_ID(); ?> {background-image: url(<?php echo $image[0]; ?>);}
</style>
<?php else : endif; ?>	   
</div>   
            </div>
        </div> 
</div>

<div class="zoom-anim-dialog white-popup mfp-hide" id="cont-<?php the_ID(); ?>">
<div id="single-post-container">

</div>
</div>
<?php wp_reset_postdata(); ?>
<?php endforeach; ?> 
        </div> 
    
</div>            
               
           </div>
           <div class="pure-u-2-3 clearfix">
           <div class="edu-nec-content clearfix">

<?php if( get_field('bak') ): the_field('bak'); else : echo 'Базовая кафедра'; endif; ?>         
          </div> 
         
                  
           </div>
       </div>
      </div>  
    </div>
    
    <div class="edu-chair" id="nec">
 
        <div class="block">
<div class="edu-chair-content">
   <h2>Научно-образовательный центр</h2>
   <?php if( get_field('nok') ): the_field('nok'); else : echo 'все:('; endif; ?>         
 </div>
         </div>

    </div>
    
    <div class="edu-postdoc" id="postdoc">
        <div class="block">
        <div class="pure-g">
            
<div class="pure-u-1-3">
              <div class="edu-postdoc_header">
                  <span>Послевузовское</span>
                  <span>образование</span>
              </div>
              
              <div class="edu-postdoc_contacts">
  <?php the_content(); ?> 
              
     <div class="edu-postdoc_boss">
        
<?php $args = array( 
'post_type'=>'employees','include' => 28);
$postdoc = get_posts( $args );  
foreach ($postdoc as $post) :  setup_postdata($post);?>
       
       <div class="postdoc-boss">
        
         <div class="postdoc-boss_name">
<span><?php if( get_field('position') ): the_field('position'); else : echo 'Должность'; endif; ?>, <?php if( get_field('rank') ): the_field('rank'); else : echo ''; endif; ?></span>

<a href="<?php the_permalink(); ?>" class="post-link" rel="<?php the_ID(); ?>"  data-link="<?php echo home_url();?>/ajaxloader/"><?php the_title(); ?></a>             
         </div>
         
         <div class="postdoc-boss_cont">
<?php if( get_field('phone') ):?><span>тел.:</span><?php the_field('phone'); else : endif; ?>	             
         </div>
         <div class="postdoc-boss_cont">
 <?php if( get_field('email') ):?><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
<?php else : endif; ?>            
         </div>   
            
       </div>
       
<div class="zoom-anim-dialog white-popup mfp-hide" id="cont-<?php the_ID(); ?>">
<div id="single-post-container">

</div>
</div>      
       
<?php wp_reset_postdata(); ?>
<?php endforeach; ?> 
        
       
     </div>                       
                                                          
              </div>    
            </div>
            
<div class="pure-u-2-3">

<div class="edu-postdoc_formula">

     <div class="edu-postdoc_call">
        <span>Механика деформируемого<br>твердого тела</span>
         <div class="edu-code">
          <a href="http://vak.ed.gov.ru/documents/10179/2327517/01.02.04+%D0%9C%D0%B5%D1%85%D0%B0%D0%BD%D0%B8%D0%BA%D0%B0%20%D0%B4%D0%B5%D1%84%D0%BE%D1%80%D0%BC%D0%B8%D1%80%D1%83%D0%B5%D0%BC%D0%BE%D0%B3%D0%BE%20%D1%82%D0%B2%D0%B5%D1%80%D0%B4%D0%BE%D0%B3%D0%BE%20%D1%82%D0%B5%D0%BB%D0%B0.doc/da2a8dc9-3bc5-475c-b8f5-dcaa81cb083d">01.02.04</a>   
         </div>
     </div> 

<p>
&laquo;Механика деформируемого твердого тела&raquo;&nbsp;&mdash; область науки и&nbsp;техники, изучающая закономерности процессов деформирования, повреждения и&nbsp;разрушения материалов различной природы, а&nbsp;также напряженно-деформированное состояние твердых тел из&nbsp;этих материалов, при механических, тепловых, радиационных, статических и&nbsp;динамических воздействиях в&nbsp;пассивных и&nbsp;активных, газовых и&nbsp;жидких средах и&nbsp;полях различной природы.
</p>

                 

</div>      

  
<div class="edu-postdoc_formula">

     <div class="edu-postdoc_call">
        <span>Физика конденсированного состояния</span>
         <div class="edu-code">
          <a href="http://vak.ed.gov.ru/documents/10179/2327517/01.04.07+%D0%A4%D0%B8%D0%B7%D0%B8%D0%BA%D0%B0%20%D0%BA%D0%BE%D0%BD%D0%B4%D0%B5%D0%BD%D1%81%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B3%D0%BE%20%D1%81%D0%BE%D1%81%D1%82%D0%BE%D1%8F%D0%BD%D0%B8%D1%8F.doc/26b15bc0-db7d-4fee-ac69-a6990328fc4e">01.04.07 </a> 
         </div>
     </div>     
    
<p>
Основой специальности является теоретическое и экспериментальное исследование природы кристаллических и аморфных, неорганических и органических веществ в твердом и жидком состояниях и изменение их физических свойств при различных внешних воздействиях.
</p>    


</div>                                      
</div>
            
        </div>
     </div>   
  </div>   
       
    
</div>


<?php get_footer(); ?>