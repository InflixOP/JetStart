<?php

$server = "localhost";
            $usernam = "root";
            $password = "";
            error_reporting(E_ERROR | E_PARSE);
            $con = mysqli_connect($server, $usernam, $password, "website");
            $sql = "UPDATE `signup_admin` SET `login`=0 WHERE `login`=1";
    
            $result = mysqli_query($con, $sql);
                header("Location:home.html");
            
?>