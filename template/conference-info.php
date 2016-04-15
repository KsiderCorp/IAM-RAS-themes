<?php
/*
Template Name: Conference Info
*/
get_header(); ?>
<style>
#navig.gettop,
#navig.gettop #searchform,
#navig.gettop #searchform input[type=search]
		{background:transparent; color:#fff;} 
#navig.gettop a { color:#fff;}	
.logoblock a.logo {
  border-left: 4px solid #fff;}
</style>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="conf-information">
	<div class="block">
<div class="conf-info-title">
	<h1><?php the_title(); ?></h1><a id="navline"></a>
</div>	
	
		<div class="pure-g">
			<div class="pure-u-1-2">
				<div class="conf-info-date">
<?php if( get_field('date') ): the_field('date'); else : endif;  ?>		
				</div>
			</div>
			<div class="pure-u-1-2">
		<div class="conf-info-reg">
<a href="<?php if( get_field('reglink') ): the_field('reglink'); else : endif; ?>">Регистрация</a>
		</div>
			</div>
		</div>
	

		
	<div class="conf-info-block">	
	
	<div class="pure-g">
		<div class="pure-u-2-3">
			<div class="conf-info-content">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="pure-u-1-3">
			<div class="conf-info-mdate">
<?php if( get_field('dates') ): the_field('dates'); else : endif;  ?>		
			</div>
			<div class="rek">
				<a href="#rek" class="popup-with-move-anim post-link">Реквизиты</a>
<div id="rek" class="zoom-anim-dialog white-popup mfp-hide">
	<?php if( get_field('rekv') ): the_field('rekv'); else : endif;  ?>
</div>
			</div>			
			
			<div class="rek">
<a href="#rules" class="popup-with-move-anim post-link">Правила оформления</a>
<div id="rules" class="zoom-anim-dialog white-popup mfp-hide">
<?php if( get_field('rules') ): the_field('rules'); else : endif;  ?>
</div>
			</div>	
					
			<div class="rek">
<a href="https://www.dropbox.com/s/19rrq3bxun24xjc/info2015.doc?dl=0">Скачать информационное сообщение</a>
			</div>			
			<div class="rek">
<div class="likely likely-small" data-single-title="Поделиться">
<div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
<div class="twitter" title="Поделиться ссылкой в Твиттере"></div>
<div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
<div class="gplus" title="Поделиться ссылкой в Гугл-плюсе"></div>
</div>
			</div>
		</div>
	</div>	
	
	<div class="maper">
	<div class="places">
	Место проведения конференции здание ИПРИМ РАН находящиеся по адресу <strong>Ленинградский проспект д.7, город Москва</strong> 
	</div>
	<div id="map"></div>
	</div>
	
	</div>

	<div class="conf-info-block">	
	<div class="pure-g">
		<div class="pure-u-1">
			<div class="conf-info-parners">
<?php if( get_field('b1') ): the_field('b1'); else : endif;  ?>
			</div>
		</div>
	</div>	
	</div>	
		
	<div class="conf-info-block">	
	<div class="pure-g">
        <div class="pure-u-1 center"><h3>Организационный комитет</h3></div>
		<div class="pure-u-1-2">
			<div class="conf-info-terms">
<?php if( get_field('b3') ): the_field('b3'); else : endif;  ?>
			</div>
		</div>
		<div class="pure-u-1-2">
		<div class="conf-info-members">
		<div class="pure-g">
		<div class="pure-u-1">
			<div class="conf-info-terms">
<?php if( get_field('b4') ): the_field('b4'); else : endif;  ?>
			</div>
		</div>
			
		<div class="pure-u-1">
			<div class="conf-info-terms">
<?php if( get_field('b5') ): the_field('b5'); else : endif;  ?>
			</div>
		</div>
		</div>
		</div>
		</div>
	</div>	
	</div>	
	
	<div class="conf-info-block">	
	<div class="pure-g">
		<div class="pure-u-1">
			<div class="conf-info-terms">
<?php if( get_field('b2') ): the_field('b2'); else : endif;  ?>
			</div>
		</div>
	</div>	
	</div>	
	
	
	
	
	
	<div class="conf-info-block">	
	<div class="pure-g">
		<div class="pure-u-1">
		<div class="conf-info-terms conf-info-supports">
<?php if( get_field('b6') ): the_field('b6'); else : endif;  ?>	</div>
		</div>
	</div>	
	</div>	
	
	
	</div>
</div>

<?php endwhile; else : ?>
<?php endif; ?>

<div class="inf-bottom">
	<i class="icon-47-rocket"></i>
</div>
	
<?php get_footer(); ?>