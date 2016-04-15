<?php if( get_field('postphoto') ):?>
	<style>
		#navig.gettop,
		#navig.gettop #searchform,
		#navig.gettop #searchform input[type=search] {
			background: transparent;
			color: #fff;
		}
		
		#navig.gettop a {
			color: #fff;
		}
		
		#navig.gettop .logoblock a.logo {
			border-left: 4px solid #fff;
		}
		
		#navig #searchform input[type=search] {
			border: 1px solid #fff;
		}
		
		#searchform input[type=submit] {
			color: #fff;
		}
		
		.newsheader {
			position: relative;
			padding: 0;
			padding-top: 10%;
			background-image: url(<?php the_field('postphoto');
			?>);
			background-size: cover;
			background-repeat: no-repeat;
			background-position: 50% 100%;
			-webkit-box-shadow: 0 -12px 18px -15px rgba(0, 0, 0, 0.91) inset;
			box-shadow: 0 -12px 18px -15px rgba(0, 0, 0, 0.91) inset;
			color: #fff;
			text-shadow: 1px 1px 2px #000;
		}
		
		.newsheader a {
			color: #f2f2f2;
		}
		
		.newsheader > .block {
			z-index: 99;
			position: relative;
		}
		
		.shadow {
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background-color: #313131;
			opacity: 0.5;
			z-index: 97;
		}
	</style>
	<?php else : ?>
		<style>
			.newsheader {
				padding-top: 3em;
			}
			
			.shadow {
				display: none;
			}
		</style>
		<?php endif; ?>

			<div class="newsheader">
				<div class="block">

					<div class="singttl">
						<?php the_title(); ?>
					</div>
					<div class="pure-social">
						<div class="likely likely-small <?php if( get_field('postphoto') ): echo 'likely-light'; else : echo ' '; endif; ?>" data-single-title="Поделиться">
							<div class="facebook" title="Поделиться ссылкой на Фейсбуке"></div>
							<div class="twitter" title="Поделиться ссылкой в Твиттере"></div>
							<div class="vkontakte" title="Поделиться ссылкой во Вконтакте"></div>
							<div class="gplus" title="Поделиться ссылкой в Гугл-плюсе"></div>
						</div>
					</div>
					<a id="navline"></a>
				</div>
				<div class="shadow"></div>
			</div>



			<div class="block empcontent">
		<div class="pure-g">
				
		
				
		<div class="pure-u-4-5">
		<?php the_content(); ?>
		</div>
<div class="pure-u-1-5">
	<div class="sideofnews">
	<div class="sidedate">
<p><?php the_time('d.m.Y '); ?></p>
	</div>
	
	<div class="categories">
<?php the_category(', '); ?>
	</div>

	<div class="tags">
	<?php the_tags('', ' / '); ?>
	</div>
	</div>
	
		</div>
				</div>
			</div>


			<!-- коменты -->
			<div class="comm">

				<div class="pure-g">
					<div class="block">

						<div class="pure-u-1">
							<h3>Комментарии:</h3>
						</div>

					</div>
				</div>

				<div class="block">
					<div class="commblock">

						<div class="pure-g">
							<div class="pure-u-1">
								<div class="block">
<?php comments_template(); ?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>