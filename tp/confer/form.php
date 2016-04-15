<form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml" class="yamoney">

	<div class="moneysum" id="summa">
	
<div class="hide">
		<div class="line">
			<input type="radio" name="course" class="selectmon" value="2500" id="maxsum" checked>
			<label for="maxsum">Оргвзнос 1500 ₽</label>
			<div class="yd_add">
<a class="addc" rel="1500">+</a><a class="addc" rel="-1500">-</a>
			</div>
		</div>

		<div class="line">
			<input type="radio" name="course" class="selectmon" class="selectmon" value="1500" id="studsum">
			<label for="studsum">Оргвзнос для студентов и аспирантов 1500 ₽</label>
			<div class="yd_add">
<a class="addc" rel="1500">+</a><a class="addc" rel="-1500">-</a>
			</div>
		</div>
	

		<div class="line">
			<input type="radio" name="course" class="selectmon" value="1300" id="zaoch">
			<label for="zaoch">Заочное участие 1300 ₽</label>
			<div class="yd_add">
				<a class="addc" rel="1300">+</a><a class="addc" rel="-1300">-</a>
			</div>
		</div>
</div>	

		<div class="summary">
			<label for="sum">Оргвзнос:
				<input type="text" id="inp" name="sum" value="1500" data-type="number"> ₽</label> <div class="yd_add">
<a class="addc" rel="1500">+</a><a class="addc" rel="-1500">-</a>
			</div>

			<p>Если платите за несколько докладов, просто перепешите итоговую сумму</p>
		</div>

	</div>

	<label for="review-text">Необходимо указать ID докладов, они отправлены вам по почте после регистрации (но не более 200 символов)</label>
	<div class="comments">
		<input type="hidden" name="comment-needed" value="true">
		<textarea name="comment" value="true" id="review-text" placeholder="Не более 200 символов"></textarea>
		<span id="counter"></span>
	</div>

	<div class="paytype">
		<input type="radio" name="paymentType" value="PC" id="yd">
		<label for="yd">Яндекс.Деньгами</label>
		<input type="radio" name="paymentType" value="AC" id="bc" checked>
		<label for="bc">Банковской картой</label>
	</div>

	<input type="hidden" name="receiver" value="410012284451679">
	<input type="hidden" name="formcomment" value="Организационный взнос">
	<input type="hidden" name="short-dest" value="Организационный взнос">
	<input type="hidden" name="label" value="Оргвзнос">
	<input type="hidden" name="quickpay-form" value="shop">
	<input type="hidden" name="targets" value="Оплата организационного взноса">

	<input type="hidden" name="need-fio" value="true">
	<input type="hidden" name="need-email" value="true">
	<input type="hidden" name="need-phone" value="false">
	<input type="hidden" name="need-address" value="false">


	<input type="submit" name="submit-button" value="Оплатить">

</form>