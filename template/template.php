<!DOCTYPE html>
<html>
    <head>
        <title>Strona Michała Lisieckiego. <?= $pagetitle ?></title>
        <link rel="stylesheet" href="/zai/styles/style.css"/>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <div class="page">
            <?php
            if (!empty($header)) {
                include $header;
            }
            if (!empty($menu)) {
                include $menu;
            }
            if(!empty($content)){
                include $content;
            }
            ?>
        </div>
    </body>
</html>

