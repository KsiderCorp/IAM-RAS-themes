<div class="conf-closed">
	
	<div class="block">
	
<div class="conf-header">	
		<div class="conf-closed-title">
<h1><a href="/conference" class="conf-back"><i class="icon-arrow-left-1"></i></a><?php the_title(); ?></h1>
		</div>
		
<div class="pure-g">
	<div class="pure-u-1-2">
		<div class="left conf-dates">
<?php if( get_field('dates') ): the_field('dates');  else : endif; ?>
		</div>
	</div>
	<div class="pure-u-1-2 hide">
		<div class="center conf-info">
<?php the_terms( $post->ID, 'typeconf', ''); ?>
		</div>
	</div>
</div>

</div>	
<a id="navline"></a>				
	</div>	

	<div class="block">
	<div class="conf-content">
		<div class="pure-g">
			<div class="pure-u-1 pure-u-sm-1 pure-u-md-2-3 pure-u-lg-2-3 pure-u-xl-2-3 pure-right">
				<div class="conf-regform">

			<?php the_content(); ?>
						
				</div>
			</div>
			
			<div class="pure-u-1 pure-u-sm-1 pure-u-md-1-3 pure-u-lg-1-3 pure-u-xl-1-3 pure-right">
				<div class="conf-download">
<?php the_field('download'); ?>
				</div>
<div class="soc">	
<div class="likely likely-light likely-small" data-single-title="Поделиться">
<div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
<div class="twitter" title="Поделиться ссылкой в Твиттере"></div>
<div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
<div class="gplus" title="Поделиться ссылкой в Гугл-плюсе"></div>
</div>	
</div>	
			</div>	
			
		</div>
	</div>
	</div>	
<?php if( get_field('line1') ):?>	
	<div class="block">
	<div class="conf-line conference-gallery" id="photo">
		<div class="pure-g">

			<div class="pure-u-1">
				<div class="conf-line1">

			<?php the_field('line1'); ?>
						
				</div>
			</div>
		</div>
	</div>
	</div>
<?php else : ?>
<?php endif; ?>			
	

<div class="block">
   <div class="pure-g">
   <div class="pure-u-1-2">
          <div class="nextpost">
          <?php next_post_link('%link'); ?>
          </div>
    </div>
        <div class="pure-u-1-2">
       <div class="prevpost">
         <?php previous_post_link('%link'); ?>  
       </div>
    </div>
   </div>
</div>


<div class="block">

      
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
    
<div class="conf-shadow"></div>				
</div>




