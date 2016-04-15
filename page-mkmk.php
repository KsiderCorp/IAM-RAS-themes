<?php get_header(); ?>
<script language = 'javascript'>
  var delay = 100;
  setTimeout("document.location.href='http://mkmk.ras.ru'", delay);
</script>

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
	
.loader1{
	position: relative;
	height: 80px;
	width: 80px;
	border-radius: 80px;
	border: 3px solid  rgba(255,255,255, .7);

	top: 28%;
	top: -webkit-calc(50% - 43px);
	top: calc(50% - 43px);
	left: 35%;
	left: -webkit-calc(50% - 43px);
	left: calc(50% - 43px);

	-webkit-transform-origin: 50% 50%;
			transform-origin: 50% 50%;
	-webkit-animation: loader1 3s linear infinite;
			animation: loader1 3s linear infinite;
}

.loader1:after{
	content: "";
	position: absolute;
	top: -5px;
	left: 20px;
	width: 11px;
	height: 11px;
	border-radius: 10px;
	background-color: #fff;
}

@-webkit-keyframes loader1{
    0%{-webkit-transform:rotate(0deg);}
    100%{-webkit-transform:rotate(360deg);}
}

@keyframes loader1{
    0%{transform:rotate(0deg);}
    100%{transform:rotate(360deg);}
}
	
			
.headers {
	position:relative;
	height:100%;
	text-align:left;
	color: #fff;
	z-index:14;
background: #595959 url(<?php bloginfo("template_url");?>/img/bc/86858683373348de6a0f6de258f07a9a.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	background-position: 50% 50%;
	
	display: flex;
	align-items: center;
}
.shadow {
			position: absolute;
			top: 0;bottom: 0;left: 0;right: 0;
			background-color: #313131;
			opacity: 0;
			z-index: 99;
	}
	.ttll {
		display: inline-block;
		margin: 0 auto;
		text-align: center;
		position: relative;
		z-index: 999;
	}


	
	
</style>
<div class="headers" id="mkmk">
<div class="shadow"></div>

<div class="ttll">
	
		<div class="box">
			<div class="loader1"></div>
		</div>
	
</div>

</div>

<?php get_footer(); ?>