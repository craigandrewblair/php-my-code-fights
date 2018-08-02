<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Challenge</title>
    </head>
    <body>
        <?php
        function isInfiniteProcess($a, $b) {
            //infinite true cases
            //  ($a < $b) && (($a + $b) % 2 == 1) || $a > $b
            return ($a < $b) && (($a + $b) % 2 == 1) || $a > $b ? true : false;
        
        }
        isInfiniteProcess(1, 1)
        ?>
    </body>
</html>

