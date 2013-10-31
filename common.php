<?php
include_once './users/LoginManager.php';

$loginManager = new LoginManager();
if (isset($_GET['logout'])) {
    $loginManager->logout();
}
