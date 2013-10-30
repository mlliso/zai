<?php

include_once './users/LoginManager.php';
$loginManager = new LoginManager;
if (!$loginManager->isLoggedIn() && !$loginManager->login()) {
    $menu = "menu.php";
    $header = "header.php";
    $content = "loginForm.php";
} else {
    $menu = "menu.php";
    $header = "header.php";
    $content = "protectedPage.php";
}
$pagetitle = "Strona wymagająca logowania";

include dirname(__FILE__) . '/template/template.php';
