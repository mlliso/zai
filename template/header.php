<?php
    if (isset($_GET['logout'])){
        $loginManager = new LoginManager();
        $loginManager->logout();
    }
?>
<div class="header">
    <h1 class="title">Projekt ZAI</h1>
    <a href="?logout=1" class="logoutLink">Wyloguj</a>
</div>
