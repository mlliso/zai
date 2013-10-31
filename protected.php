<?php
session_start();
include dirname(__FILE__) . '/common.php';
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
