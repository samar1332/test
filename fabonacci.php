<?php 
/*Write a PHP function to generate the Fibonacci sequence up to a specified number of terms. */
function Fibonacci($num){
$num1=0;
$num2=1;

$count = 0 ;

     while ($count < $num) {
  
    echo $num1." ";
    $num3 = $num1 + $num2;
    // Swapping numbers
    $num1 = $num2;
    $num2 = $num3;
     
    $count = $count + 1;
     }

}

$num = 10;
Fibonacci($num);
?>