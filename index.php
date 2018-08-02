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

        function willYou($young, $beautiful, $loved) {
            
            return($young && $beautiful && !$loved || !$young && $beautiful && $loved || !$young && !$beautiful&& $loved || $young && !$beautiful && $loved)?true:false;

//              if ($young && !$beautiful && !$loved) {
//                 return false;
//             }
//             if ($young && $beautiful && !$loved) {
//                 return true;
//             }
//             if ($young && $beautiful && $loved) {
//                 return false;
//             }
//             if (!$young && $beautiful && $loved) {
//                 return true;
//             }
//             if (!$young && !$beautiful&& $loved) {
//                 return true;
//             }
//             if (!$young && !$beautiful && !$loved) {
//                 return false;
//             }
//             if (!$young && $beautiful && !$loved) {
//                 return false;
//             }
//             if ($young && !$beautiful && $loved) {
//                 return true;
//             }
        
//tff = f
//ttf = t
//ttt = f
//ftt = t
//fft = t
//fff = f
//ftf = f
//tft = t
        
        }

        //willYou(young, beautiful, loved) = false
        //willYou(young, beautiful, loved) = true
        ?>

    </body>
</html>



