<!DOCTYPE html>
<html>
    <head>
        <title>Strona Michała Lisieckiego. <?= $pagetitle ?></title>
        <link rel="stylesheet" href="/zai/styles/style.css"/>
        <script type="text/javascript" src="/zai/js/jstools.js"></script>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <div class="page">
            <div class="header">
                <?php
                if (!empty($header)) {
                    include $header;
                }
                ?>
            </div>
            <table>
                <tr>
                    <td class="menu">
                        <?php
                        if (!empty($menu)) {
                            include $menu;
                        }
                        ?>
                    </td>
                    <td class="content">
                        <?php
                        if (!empty($content)) {
                            include $content;
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>

