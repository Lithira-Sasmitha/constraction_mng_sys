<?php


    $con=new mysqli("localhost","root","","sl2my");

    if($con->connect_error)
    {
        die("Connection Failed".$con->connect_error);
    }
    

?>