<?php 
require "backend.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body{
            padding:20px;
            margin:20px;
        }
    </style>
</head>
<body>

    <h1>Response</h1>
    <div>
        <?php 
        if (isset($_POST['submit'])) {
          $number= $_POST['number'];

          echo check_if_number_is_even_or_odd($number);

        }else{
            echo " No Response Found";
        }
        ?>
    </div>


</body>
</html>