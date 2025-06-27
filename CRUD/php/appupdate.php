<?php
    require 'config.php';


    $ano=$_POST["ano"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $cid=$_POST["cid"];
    $date=$_POST["date"];

    if(empty($ano)||empty($name)||empty($email)||empty($cid)||empty($date))
    {
        echo "Must fill all entries";
    }
    else{
        $sql="UPDATE Appointment SET Name='$name', Email='$email',ClientId='$cid',Date='$date' WHERE AppointmentNo='$ano'";

       

        if($con->query($sql))
        {
            echo "<script>alert('Update')</script>" ;
            
        }
        else
        {
            echo "<script>alert('Not Updated')</script>";
        }
    }



?>
<html>
<head>
    
    <meta charset="UTF-8">
    <title>View Appointments</title>  
    <link rel="Stylesheet" href="C:\xampp\htdocs\php\styles\fg.css">
        
       
        
    <meta name="viewpoint" content="width=device-width,initial-scale=1.0">




</head>
<body>

    <div class="button">
        <a href="appread.php"><input type="submit" name="view" value="View"></a>
    </div>







</body>

</html>