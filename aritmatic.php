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

        function arithmeticExpression($a, $b, $c) {
            // switch ($c) {               
            //                case ($a + $b):
            //                    return true;
            //                    break;
            //                case ($a - $b):
            //                    return true;
            //                    break;
            //                case ($a * $b):
            //                    return true;
            //                    break;
            //                case ($a / $b):
            //                    return true;
            //                    break;
            //                default :
            //                    return false;
            //                    break;                   
            //             }
            return $a + $b == $c || $a - $b == $c || $a * $b == $c || $a / $b == $c ? true : false;
        }
        ?>
    </body>
</html>



