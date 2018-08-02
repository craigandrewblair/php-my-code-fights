<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            function killKthBit($n, $k) {
                
                return print_r( decbin($n)[$k] == 0 ? print_r($n) : 
                    
                    substr_replace($n, '0', $k, 0));
                
            }
                
            killKthBit(37, 3);
            
        ?>
    </body>
</html>





