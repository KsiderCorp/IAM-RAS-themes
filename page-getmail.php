<?php get_header(); ?>

<?php
if(isset($_POST['sub'])) {

remove_all_filters( 'wp_mail_from' );
remove_all_filters( 'wp_mail_from_name' );

	$mailTo = 'wtf@iam.ras.ru';
	$fio = $_POST['fio'];
	$otdely = $_POST['otdely'];
	$getmail = $_POST['getmail'];
	$email = $_POST['email'];
	$subject = "Запрос на почту" ;
	
// body	
$template = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta name='viewport' content='width=device-width' />
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title></title>

</head>
<body style='font-family: Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6; margin: 0; padding: 2em;'>
Имя: <b>".$fio."</b><br>
<em>".$otdely."</em><br>
Запрашиваемая Почта: <i>".$getmail."</i>@iam.ras.ru<br>
Почта для ответа: <i>".$email."</i><br>
</body>
</html>";


$from = "info@iam.ras.ru";
$headers  = "From: ".$fio." <" . $from . ">\r\n";
$headers .= "Reply-To: <". $email . ">\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

wp_mail($mailTo, $subject, $template, $headers);
 }

?>


<style>
#navig.gettop,
#navig.gettop #searchform,
#navig.gettop #searchform input[type=search]
		{background:transparent; color:#ecf0f1;} 
#navig.gettop a { color:#ecf0f1;}				
</style>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="getmailbody">
<div class="getemail">


<div class="pure-g">
<div class="block">
<div class="pure-u-3-5">
<div class="getmailcontent">
<h3><?php the_title(); ?></h3>
<a id="navline"></a>
<?php the_content(); ?></div>
</div>

<div class="pure-u-2-5">
<div class="getform">

<form action="<?php the_permalink(); ?>" method="post"  class="confirmer">

<div class="getline pure-g">
<div class="pure-u-1-2">
<input id="fio" name="fio" type="text" class="requiredField getfio"  placeholder="ФИО">
</div>
<div class="pure-u-1-2">

<input id="mail" name="email" type="text" class="requiredField email getfio"  placeholder="Email">
</div>

<div class="pure-u-1">
<select id="otdely" name="otdely" class="field select medium"> 
    <option value="Отдел механики структурированной и гетерогенной среды">Отдел механики структурированной и гетерогенной среды</option>
    <option value="Отдел механики адаптивных композиционных материалов">Отдел механики адаптивных композиционных материалов</option>
    <option value="Лаборатория физико-химической механики">Лаборатория физико-химической механики</option>
    <option value="Лаборатория физико-химической механики перспективных технологий">Лаборатория физико-химической механики перспективных технологий</option>
    <option value="Лаборатория неклассических моделей механики композиционных материалов">Лаборатория неклассических моделей механики композиционных материалов</option>
</select>
</div>
</div>

<div class="pure-g getline">
<div class="pure-u-1">
<input id="getmailinput" name="getmail" type="text" class="requiredField getmailinput" tabindex="1" placeholder="login"><span>@iam.ras.ru</span>
</div>
</div>

<div class="pure-g getline clearfix">
<div class="pure-u-1">

<div class="blocksub">
<input type="hidden" name="sub"  value="sub" />
<input type="submit" name="submited" class="button" value="Отправить" id="reqsent"/>
<div class="disable"></div>
</div>

</div>
</div>

</form>

</div>
</div></div>
</div>

</div>
</div>

<?php endwhile; else : ?>
<?php endif; ?>

	
<?php get_footer(); ?>