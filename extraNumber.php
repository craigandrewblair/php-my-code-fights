<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Phone Challenge</title>
    </head>
    <body>
        <?php

        function extraNumber($a, $b, $c) {
            
            //print array
            $numArr = array($a, $b, $c);
            echo '<pre>';
            print_r($numArr);
            echo '</pre>';
            
            //create count array
            $countArr = array_count_values($numArr);
            print_r($countArr);
        
            //return the value that has a count of one
            print_r(array_search(1 , $countArr, FALSE));
            array_search(1 , $countArr, FALSE);
            
//            switch (true){
//                case (array_search ($a , $numArr, TRUE)):
//                    return print_r($a);
//                    break;
//                case (array_search ($b , $numArr, TRUE)):
//                    return print_r($b);
//                    break;
//                case (array_search ($c , $numArr, TRUE)):
//                    return print_r($c);
//                    break;
//            }
            
        }

        extraNumber(1, 3, 1);

        //var_dump(extraNumber(3, 7, 3));

        ?>
    </body>
</html>
