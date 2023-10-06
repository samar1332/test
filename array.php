<?php 
#Creating an Array.

$number = array(2,3,4,5,6,7,8,9,10);
# count array element
$length = count($number);
echo "Total Number : ";
echo count($number)."<br>";


# print all array element using loop
echo"Array Element : ";
for ($i=0; $i < $length; $i++) { 
    echo $number[$i]." ";
}
?>