<?php

$name = htmlspecialchars($_POST['name']);
$phone = htmlspecialchars($_POST['phone']);
$city = htmlspecialchars($_POST['city']);
$message = 'Имя: ' . $name . '\n' . 'Телефон: ' . $phone . '\n' . 'Город: ' . $city;

if(mail('vla97657234@gmail.com', 'Информация с сайта', $message, 'From: info@example.com')){
	echo 'yes';
}else{
	echo "no";
}