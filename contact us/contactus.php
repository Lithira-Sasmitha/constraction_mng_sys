<?php
    require 'config.php';

    $cnctname=$_POST["name"];
    $cnctemail=$_POST["email"];
    $cnctmsg=$_POST["message"];

    $sql="INSERT INTO contactus VALUES ('$cnctname','$cnctemail','$cnctmsg')";

    if($con->query($sql))
    {
        echo "Your Messege has been sent Sucessfully";
    }
    else
    {
        echo "error".$con->error;
    }

    $con->close();

?>