<?php
    function fizzBuzz($value)
    {
        $n = $value;
        for ($i= 1; $i <= $n; $i++) 
        { 
            if ($bagi = $i % 3 == 0) {
                echo ' fizz ';
            } else if ($bagi = $i % 5 == 0) {
                echo ' buzz ';
            } else if ($bagi = $i % 5 == 0 && $i % 3 == 0) {
                echo ' FIZZBUZZ ';
            } else {
                echo $i. ' ';
            }
        }
    }
    
    fizzBuzz(15);
?>
