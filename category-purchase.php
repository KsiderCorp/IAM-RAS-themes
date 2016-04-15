<?php get_header(); ?>

<div class="cathead">
<div class="block">
<div class="pure-g">
<div class="pure-u-1" >
<div class="singttl">Закупки и тендеры</div>
<p>В разделе представлены сведения о проводимых Институтом тендеров через систему государтсвенных закупок</p>

<a id="navline"></a>
</div>
</div>
</div>
</div>

<div class="block">
<div class="pure-g">
<div class="pure-u-3-4">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="puritems">

<div class="purttl">

<?php the_title(); ?>

</div>

<div class="pure-g">
<div class="pure-u-1-2" >
<div class="purdate">
<?php the_time('d.m.Y '); ?> <?php if( in_category('purchasend') ): echo('(завершено)'); else : echo ''; endif; ?>
</div>
</div>
<div class="pure-u-1-2" >
<div class="purnumb">№ <a href="<?php if( get_field('link') ): the_field('link'); else : echo '#'; endif; ?>"><?php if( get_field('num') ): the_field('num'); else : echo '#'; endif; ?></a></div>
</div>
</div>

<hr>
</div>

<?php endwhile; else : ?>
<?php endif; ?>


</div>
<div class="pure-u-1-4" >
<div class="laws">

<ul>
<li><h4>Законы:</h4></li>
<li><a href="http://www.rg.ru/2011/07/22/zakupki-dok.html"> ФЗ №223-ФЗ</a></li>
<li><a href="http://www.rg.ru/2013/04/12/goszakupki-dok.html"> ФЗ №44-ФЗ</a></li>

</ul>
</div>
</div>
</div>

</div>



<?php if (function_exists('wp_corenavi')) :?> 
<div class="pure-g">
<div class="pure-u-1" >

<div class="navigation center">
 <?php wp_corenavi(); ?>
</div>

</div>
</div>
<?php else : endif; ?>

	
<?php get_footer(); ?>