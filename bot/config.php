<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

date_default_timezone_set('Europe/Sofia');
ini_set("log_errors", "true");
error_reporting(0);


//Your Api key
$apiKey = '8293038390:AAH4iHVpQWFkD1viRXUL7PpYChbdfJJtRX0';
//Your bot name
$botUsername = 'ethos_tap_bot';
//Your domain name
$web_app = 'https://ethos_tap_bot.vercel.app';
//Youd database info
$DB = [
'dbname' => 'ethos_tap_bot',
'username' => 'ethostapbot',
'password' => 'demo12345'
];
//Add numbers only 
$admins_user_id = [
    561034013
];