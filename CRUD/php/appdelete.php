<?php
    require 'config.php';

    $ano=$_POST["ano"];
    $cid=$_POST["cid"];

    $sql="DELETE FROM Appointment WHERE AppointmentNo='$ano'";

    if($con->query($sql))
    {
        echo "<script>alert('Deleted!');</script>";

    }
    else
    {
        echo "<script>alert('Not Deleted');</script>";
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
    <br><br>
    <div class="button">
        <a href="appread.php"><input type="submit" name="view" value="View"></a>
    </div>
    







</body>

</html>