<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    if (
	wp_mail("ksider@yandex.ru", "Test mail", "Проверка отправки почты")
	) {
          echo "ok";
    } else {
           echo "error";}
?>
