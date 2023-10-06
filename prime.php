<?php 
# Write a PHP function to check if a given number is prime.
function prime($number){
    if ($number==1) {
        return 0 ;
    }
    
    for ($i=2; $i <=$number/2 ; $i++) { 
       if ($number%$i==0) {
        return 0;
       }
    }    

return 1;
}

$number = 39;
$flag = prime($number);

if ($flag==1) {
    echo "Given Number Is Prime.";
} else {
    echo "Given Number Is Not Prime";
}


?>