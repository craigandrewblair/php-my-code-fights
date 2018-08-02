<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Phone Challenge</title>
    </head>
    <body>
        <?php

        function knapsackLight($value1, $weight1, $value2, $weight2, $maxW) {


            // if($maxW - $weight1 < 0 && $maxW - $weight2 < 0){
            //     return 0;
            // }
            // if($maxW - ($weight1 + $weight2) >= 0){
            //     return $value1 + $value2;
            // }
            // if($value1 >= $value2 && ($maxW - $weight1) >= 0){
            //     return $value1;
            // }
            // if($value1 < $value2 && ($maxW - $weight2) >= 0){
            //     return $value2;
            // }
            // if($value1 < $value2 && ($maxW - $weight1) >= 0){
            //     return $value1;
            // }

            switch (true) {

                case ($maxW - $weight1 < 0 && $maxW - $weight2 < 0):
                    return 0;
                    break;
                case ($maxW - ($weight1 + $weight2) >= 0):
                    return $value1 + $value2;
                    break;
                case ($value1 >= $value2 && ($maxW - $weight1) >= 0):
                    return $value1;
                    break;
                case ($value1 < $value2 && ($maxW - $weight2) >= 0):
                    return $value2;
                    break;
                case ($value1 < $value2 && ($maxW - $weight1) >= 0):
                    return $value1;
                    break;
            }
        }
        ?>
    </body>
</html>
