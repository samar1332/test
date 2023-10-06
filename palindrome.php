<?php 
/*Write a PHP function to check if a given string is a palindrome. */

function palindrome($number){
    $temp= $number;
    $compare=0;

    while (floor($temp)) {
        $rem=$temp%10;
        $compare=$compare*10+$rem;
        $temp=$temp /10;
    }

    if ($compare==$number) {
        return 1;
    }else {
        return 0;
    }
}
 $number=123;
 echo"Given Number : $number"."<br>";
if (palindrome($number)) {
    echo"Palindrone Number";
}else {
    echo"Not Palindrone Number";
}

?>