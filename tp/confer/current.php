<div class="conf-current">
	<div class="block">
	
<div class="conf-header">	
		<div class="conf-title">
<h1><a href="/conference" class="conf-back"><i class="icon-arrow-left-1"></i></a><?php the_title(); ?></h1>
		</div>
		
<div class="pure-g">
	<div class="pure-u-1-2">
		<div class="left conf-dates">
<?php if( get_field('dates') ): the_field('dates');  else : endif; ?>
		</div>
	</div>
	<div class="pure-u-1-2">
		<div class="center conf-info">
<a href="<?php if( get_field('info') ): the_field('info'); else : endif; ?>">Информация</a>
		</div>
	</div>
</div>

</div>	
<a id="navline"></a>				
	</div>
	
	<div class="block">
	<div class="conf-timline">
		<div class="pure-g">
			<div class="pure-u-1-5">
				<div class="timeline">
		<?php the_field('download'); ?>
				</div>
			</div>
			<div class="pure-u-4-5">
				<div class="conf-regform">

<?php the_content(); ?>

<hr>
<?php include(TEMPLATEPATH . '/tp/confer/registration.php'); ?>
			
				</div>
			</div>
		</div>
	</div>
	</div>
	

<div class="block">
		<div class="check-pay" id="pay">
			<div class="pure-g">
			<div class="pure-u-1">
                <div class="how-pay">
                <h2>Оплата</h2>
					Организационный взнос можно оплатить через персональную страницу, ссылка на которую придет в письме сразу после регистрации.
				</div>			    
			</div>
			
<div class="pure-u-1">

	<div class="paydecript">
	
Организационный взнос составляет 2500&nbsp;₽ при оплате до 21 октября 2016 г. и 3000&nbsp;₽ после 21 октября 2016 г. Для аспирантов 1200&nbsp;₽ до 21 октября 2016 г. и 1500&nbsp;₽ после 21 октября 2016 г. Студенты освобождаются от организационного взноса.

	
	</div>

</div> 			
			
<div class="pure-u-1-3">
	<div class="bank-pay pay-variant">
	
<div class="banking center">
<img src="<?php bloginfo("template_url"); ?>/img/banking.svg"><br><strong>Банковским переводом</strong>
</div>

Воспользуйтесь <a href="#line1" class="popup-with-move-anim ">реквизитами</a> и <a href="https://www.dropbox.com/s/lquwfbaqg8j2ves/poruchenie.doc?dl=1" target="_blank">образцом оформления платежного поручения</a> и <a href="https://www.dropbox.com/s/cen74pw7ob3ufsj/kvitancia.xls?dl=1">образцом квитанции</a>. 
После оплаты нужно будет прикрепить скан квитанции на персональной странице.

 	</div>	

<div class="zoom-anim-dialog white-popup mfp-hide" id="line1">
	<div class="requisites-pay pay-variant">
<?php if( get_field('line1') ): the_field('line1'); else : endif; ?>
	</div>	
</div>   
            
</div>		
      
<div class="pure-u-1-3">
	<div class="cash-pay pay-variant">
<div class="banking center">
<img src="http://iam.ras.ru/wp-content/themes/iam-purevedro2/img/cash.svg"><br><strong>Наличными</strong>
</div>
Оплатить оргвзнос, можно наличными непосредсвенно во время конференции.
В этом случае потребуется заключать договор.
	</div>	
</div>
      
<div class="pure-u-1-3">
	<div class="yandex-pay pay-variant">
<div class="banking">
<img src="<?php bloginfo("template_url"); ?>/img/yandex_money.svg"><br>
<strong>&nbsp;</strong>
</div>	
Через систему <a href="https://money.yandex.ru/" class="">Яндекс.деньги</a> оплатить можно как со своего Яндекс.кошелька, так и с банковской карты.
	</div>	
	    
</div>
				</div>
		</div>
</div>
			
	<div class="block">
<div class="conf-support">
<h4 class="center">Поддержка</h4>  

<div class="pure-g">

	<div class="pure-u-1-3">
<span class="supp-t">Вопросы оплаты:</span>
<?php echo emp_insert('143'); ?>		
	</div>
	
	<div class="pure-u-1-3">
<span class="supp-t">Регистрация и работа сайта:</span>
<?php echo emp_insert('143'); ?>		
	</div>
	
	<div class="pure-u-1-3">
<span class="supp-t">Общие вопросы:</span>
<?php echo emp_insert('22'); ?>		
	</div>
	
</div>

		
			
</div>
	</div>		
	
<div class="block">
<div class="conf-support">
			
<?php if( get_field('line2') ):?>		
<div class="block">
	<div class="parner conf-info-parners">
<div class="conf-part">
Партнеры
</div>


	<div class="conf-info-terms conf-info-supports">
<?php if( get_field('line2') ): the_field('line2'); else : endif;  ?>	
    </div>

	
	</div>
</div>	
<?php else : ?>
<?php endif; ?>			
			
</div>
	</div>	
</div>


<div class="conf-bottom">
	<i class="icon-31-shuttle"></i>
	<div class="conf-noiz"></div>
</div>

<script>
    
function generatePassword(length) {
    var length,
        charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789",
        retVal = "";
    for (var i = 0, n = charset.length; i < length; ++i) {
        retVal += charset.charAt(Math.floor(Math.random() * n));
    }
    return retVal;
}  
  
var date = new Date();

var numLow = date.getHours();
var numHigh = date.getMinutes();
var adjustedHigh = (parseFloat(numHigh) - parseFloat(numLow)) + 1;
// var numRand = Math.floor(Math.random()*adjustedHigh) + parseFloat(numLow);
var numRand = numHigh+''+numLow;

 
document.getElementById('passgen').value = generatePassword(25); 
document.getElementById('gen').value = generatePassword(2)+numRand;     
    
   
  
</script>