<?php
$link = mysqli_connect("localhost", "codewizo_Notex", "rvsingh@1234", "codewizo_Notex");
if(mysqli_connect_error()){
    die('ERROR: Unable to connect:' . mysqli_connect_error()); 
    echo "<script>window.alert('Hi!')</script>";
}
    ?>
