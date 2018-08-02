<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Phone Challenge</title>
    </head>
    <body>
        <?php

        function phoneCall($min1, $min2_10, $min11, $s) {
            // the first minute costs 3 cents, which leaves you with 20 - 3 = 17 cents;
            $maxTime = 0;
            if ($s >= $min1) {
                $s = $s - $min1;
                $maxTime = $maxTime + 1;
                // the total cost of minutes 2 through 10 is 1 * 9 = 9, so you can talk 9 more minutes and still have 17 - 9 = 8 cents;
                if ($s >= $min2_10) {
                    // each next minute costs 2 cents, which means that you can talk 8 / 2 = 4 more minutes.
                    for ($i = 0; $i < 9; $i++) {
                        if ($s >= $min2_10) {
                            $s = $s - $min2_10;
                            $maxTime = $maxTime + 1;
                        } else if ($s < $min2_10){
                            return $maxTime;
                        }            
                    }
                    while ($s > $min11) {
                            $s = $s - $min11;
                            $maxTime = $maxTime + 1;
                        }
                } else {
                    return $maxTime;
                }
            } else {
                return $maxTime;
            }
            return $maxTime;
        }

        print(phoneCall(3, 1, 2, 20));
        //print(phoneCall(10, 1, 2, 22));

// Test 1
// min1: 3
// min2_10: 1
// min11: 2
// s: 20
// expected: 14
        
// Test 3
// min1: 10
// min2_10: 1
// min11: 2
// s: 22   
// expected: 11        
        ?>
    </body>
</html>
