<?php
if(isset($_POST['sub'])) {

remove_all_filters( 'wp_mail_from' );
remove_all_filters( 'wp_mail_from_name' );

	$mailTo = 'laboratory@iam.ras.ru';
	$bossmail = sanitize_text_field($_POST['bossname']);
	$fio = sanitize_text_field($_POST['fio']);
	$tPhone = sanitize_text_field($_POST['tPhone']);
	$cemail = sanitize_text_field($_POST['cemail']);
	$msgj = sanitize_text_field($_POST['msgj']);		
	$title = get_the_title();
	$subject = "ИПРИМ РАН ".$title."" ;
	
// body	
$template = "
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta name='viewport' content='width=device-width' />
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<title>".$title."</title>

</head>
<body style='font-family: Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6; margin: 0; padding: 2em;'>
Письмо со страницы прибора ".$title.", от ".$fio.".<br>
<em>Телефон ".$tPhone.", Почта ".$cemail."</em>
<h4>Сообщение:</h4> 
<p>".$msgj."</p>
</body>
</html>";


$from = "info@iam.ras.ru";
$headers  = "From: ".$fio." <" . $from . ">\r\n";
$headers .= "Reply-To: <". $cemail . ">\r\n";
$headers .= "Cc: ". $bossmail . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

wp_mail($mailTo, $subject, $template, $headers);
 }

?>