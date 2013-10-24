<?php

include_once './users/LoginManager.php';
$loginManager = new LoginManager;
if (!$loginManager->isLoggedIn()) {
    $loginManager->requireLogin();
    $menu = "";
    $header = "";
    $content = "error401.php";
} else {
    $menu = "menu.php";
    $header = "header.php";
}
$pagetitle = "Strona wymagająca logowania";

include dirname(__FILE__) . '/template/template.php';
