<?php
/*
Template Name: Английская версия
*/
get_header(); ?>
<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/template/css/eng.css">
<!--<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/fw/kissui.scrollanim-master/build/scrollanim.min.css">-->




<?php if (have_posts()) : while (have_posts()) : the_post(); ?>   

<div class="eng-page">
    <div class="block">
        
<div class="pure-g" >
<div class="pure-u-2-3 pure-u-sm-1">
    
<div class="eng-header" >
    <div class="eng-start">Institute of</div>
    <div class="eng-name">Applied<br>Mechanics</div>
    <div class="eng-ras">of Russian Academy of Sciences</div>
</div>  
       
<div class="envelope-english">
   
<svg width="80" height="60" viewBox="5 0 80 60">
<path class="wave" fill="none" stroke="#313131" stroke-width="5" stroke-linecap="round" d="M 0 37.5 c 7.684299348848887 0 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15 s 7.172012725592294 15 15 15 s 7.172012725592294 -15 15 -15">
</svg>
   
   
    <div class="pure-g">

        <div class="pure-u-3-4">
            <ul class="adress" >
<li><a href="https://www.google.ru/maps/@55.7795358,37.5759433,18z?hl=ru">Leningradsky prt 7, Russia, Moscow 125040</a></li>
<li><strong>+7 495 946-18-06 | +7 495 946-18-03</strong></li>
<li><a href="mailto:iam@iam.ras.ru">iam@iam.ras.ru</a></li>
<li>    
    <div class="likely likely-small" data-single-title="Поделиться">
		<div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
		<div class="twitter" title="Поделиться ссылкой в Твиттере"></div>
		<div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
		<div class="gplus" title="Поделиться ссылкой в Гугл-плюсе"></div>
    </div>
</li>          
            </ul>
        </div>

    </div>

</div>       
        
</div>
    
<div class="pure-u-1-3 pure-u-sm-1" >
        
  
<div class="eng-journal">
   <div class="pure-g">
       
       <div class="pure-u-3-4">    
           <a href="http://mkmk.ras.ru/en/">The Journal of <strong>Mekhanika Kompozitsionnykh Materialov i&nbsp;Konstruktsii</strong></a>
       </div>
             <div class="pure-u-1-4">
           <div class="eng-cover hide"></div>    
       </div> 

   </div>
    
</div> 

<div class="eng-journal">
   <div class="pure-g">
       
       <div class="pure-u-3-4">    
           <a href="http://iam.ras.ru/continuum_mechanics/">Workshop <strong>Continuum Mechanics</strong></a>
       </div>
             <div class="pure-u-1-4">
       <!--    <div class="eng-cover"></div>  -->  
       </div> 

   </div>
    
</div> 

<div class="eng-journal">
   <div class="pure-g">
       
       
       
       <div class="pure-u-3-4">    
           <a href="http://iam.ras.ru/science/">Popular <strong>Science Project</strong></a>
           <p>Science video and articles</p>
       </div>
       
       <div class="pure-u-1-4">
           <div class="eng-cover science hide"></div>    
       </div> 

   </div>
    
</div> 
      
                  
       
        
    </div>
 </div>        
   
    
<div class="eng-develop">
  
<?php if( get_field('block') ):?>

<?php the_field('block'); ?>

<?php else : ?>

<?php the_excerpt(); ?>

<?php endif; ?>

</div>   

      
 </div>    
</div>  

<div class="eng-content" id="story">

    <div class="block">
        <div class="history">

            <div class="htext">

                <div class="pure-g">
                   
                    <div class="pure-u-1-2">
                        <h3>Live <a href="https://www.flickr.com/photos/iam_ras/"><i class="icon-photos-pictures"></i></a></h3>
<div class="gallery-flickr flickr clearfix" data-id="141750763@N05" data-count="16" data-size="c">
<div class="loader" title="2">
      <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve"><path fill="#f1c40f" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z"><animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.2s" repeatCount="indefinite"/></path></svg>
</div>
</div>
                        
                    </div>
                   
                    <div class="pure-u-1-2">
                       <h3>Our Story:</h3>
                        <div class="eng_history-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>


    </div>
    
    <!--<div class="story-back" id="story-back"></div>-->

</div>

<div class="eng-partners" >

<div class="block">
  
  <h2 class="center">Our Partners</h2>
  
    <div class="history-header_partners clearfix">

<div class="partners_link"><a href="http://rscf.ru/" class="rnf">РНФ</a></div>
<div class="partners_link"><a href="http://www.rfbr.ru/" class="rfbr">РФФИ</a></div>

<div class="partners_link"><a href="http://www.ciam.ru/" class="ciam">ФГУП ГНЦ Центральный институтавиационного моторостроения им. П.И.Баранова (ЦИАМ)</a> </div>
<div class="partners_link"><a href="http://msu.ru" class="msu">Московский Государственный Университет им. М.В.Ломоносова</a></div>
<div class="partners_link"><a href="http://mipt.ru/" class="mipt">Московский физико-технический институт </a></div>
<div class="partners_link"><a href="http://www.tsagi.ru/" class="tsagy">ЦАГИ</a></div>
<div class="partners_link"><a href="http://mai.ru" class="mai">Московский авиационный институт(Технический университет)</a></div>
<div class="partners_link"><a href="http://www.rudn.ru/" class="rudn">Университет дружбы народов им. П.Лумумбы</a></div>
<div class="partners_link"><a href="http://www.amursu.ru/" class="amur">ГОУ ВПО Амурский Государственный университет</a></div>
<div class="partners_link"><a href="http://www.mitht.ru/" class="mitht">МИТХТ им.М.В.Ломоносова</a></div>
<div class="partners_link"><a href="http://www.ipmnet.ru/" class="ipmeh">ИПМЕХ  А.Ю. Ишлинского</a></div>   
<div class="partners_link"><a href="http://niishp2.ru" class="niishp">ОАО НИИ шинной промышленности (НИИШП)</a></div>           
            
   </div>  
    
</div> 
    
</div>


<?php endwhile; else : ?>
<?php endif; ?> 

<!--<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/fw/kissui.scrollanim-master/build/scrollanim.js"></script>-->


<?php get_footer(); ?>