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
            $x = 5;
            $y = 6;
            if (($x+$y)%2 == 0) {
                echo 'EL RESULTADO ES POSITIVO';
                echo $x.'+'.$y.'='.($x+$y);
            }
        ?>
    </body>
</html>
