<?php

include_once './users/LoginManager.php';
$loginManager = new LoginManager;

$menu = "menu.php";
$header = "header.php";
$content = "registrationForm.php";

$pagetitle = "Strona do rejestracji użytkowników";

include dirname(__FILE__) . '/template/template.php';
