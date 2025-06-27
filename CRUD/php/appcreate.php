<?php

    require 'config.php';

    
    $name=$_POST["name"];
    $email=$_POST["email"];
    $cid=$_POST["cid"];
    $date=$_POST["date"];

    $sql="INSERT INTO  appointment VALUES ('','$name','$email','$cid','$date')";

    if($con->query($sql))
    {
        echo "<script>alert('Your Messege has been sent Sucessfully');</script>";
    }
    else
    {
        echo "error".$con->error;
    }

    $con->close();

?>


<html>
    <head>
        <title >Succesful</title>
        <link rel="Stylesheet" href="C:\xampp\htdocs\php\styles\fg.css">
    <head>
    <body>
        <h2>View Appointment List</h2>
        <div class="button">
            <a href="appread.php"><input type="submit" name="view" value="View"></a>
        </div>
    </body>
</html>