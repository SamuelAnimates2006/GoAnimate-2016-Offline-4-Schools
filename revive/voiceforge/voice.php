<?php
$vName = $_GET['voice'];
$text = $_GET['msg'];
$permitted_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$randomstring = substr(str_shuffle($permitted_chars), 10, 20);
$arr = array("@gmail.com", "@outlook.com", "@icloud.com", "@yahoo.com");
shuffle($arr);
$domain = $arr[0];
$email = $randomstring . $domain;
?>
