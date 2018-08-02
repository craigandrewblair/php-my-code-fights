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

        function tennisSet($score1, $score2) {
            switch (true) {
                case $score1 >= 5 && $score2 >= 5 && $score1 == $score2:
                    echo 'false';
                    return false;
                    break;
                case $score1 == 6 && $score2 < 5 || $score2 == 6 && $score1 < 5:
                    echo 'true';
                    return true;
                    break;
                case $score1 == 5 && $score2 == 7 || $score1 == 6 && $score2 == 7 || $score2 == 5 && $score1 == 7 || $score2 == 6 && $score1 == 7:
                    echo 'true';
                    return true;
                    break;
                default:
                    echo 'false';
                    return false;
                    break;
            }
        }

        tennisSet(7, 9);
        ?>
    </body>
</html>



