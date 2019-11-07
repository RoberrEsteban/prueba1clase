<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $login_inc = TRUE;
        do {
            if (($u == $user) && ($p == $pass)) {
                $login_inc = FALSE;
            }
        } while ($login_inc)
        ?>
    </body>
</html>
