<?php

if(isset($_POST['get_text'])){
    $text=$_POST['get_text'];
    $text_upper=strtoupper($text);
    // sleep(2);
    echo $text_upper;
}

?>