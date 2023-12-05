<?php
    $conn = new mysqli('localhost','root','','bookingsysystem');
    if($conn->connect_error){
        die ("Connection failed: " .$conn->connect_error);
    }
?>