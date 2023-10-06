<?php
/* Write a PHP function to calculate the factorial of a given number. */

function factorial ($number){
    $factorial = 1;
    for($i=1; $i<= $number;$i++){
        $factorial = $factorial * $i;
    }
    return $factorial;
}
/*$num = readline("Enter Any To Find Factorial");*/
$factorial=factorial(5); 
echo"$factorial";

?>