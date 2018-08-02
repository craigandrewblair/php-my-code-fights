<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Phone Challenge</title>
    </head>
    <body>
        <?php

        function reachNextLevel($experience, $threshold, $reward) {
            
            print($experience + $reward >= $threshold ? TRUE : FALSE);
            
        }
        
        reachNextLevel(10, 15, 5);
                
//        experience: 10
//        threshold: 15
//        reward: 5        
        ?>
    </body>
</html>
