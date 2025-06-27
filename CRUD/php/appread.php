<?php
    require 'config.php';

    $sql="SELECT  AppointmentNo,Name,Email,ClientId,Date  FROM appointment";

    $result=$con->query($sql);

    if($result->num_rows>0)
    {
        echo "<br><br><h2>List of Appointments</h2><br><br>";
        echo "<table border='0' width='100%'>";
        echo "<tr><th>AppointmentNo</th><th>Name</th><th>Email</th><th>ClientId</th><th>Date</th></tr>";
        while($row=$result->fetch_assoc())
        {
            echo "<tr>";
            echo  "<td>".$row["AppointmentNo"]."</td>"."<td>".$row["Name"]."</td>"."<td>".$row["Email"]."</td>"."<td>".$row["ClientId"]."</td>"."<td>".$row["Date"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "No Entries";
    }
    ?>

<html>
    <head>
    
        <meta charset="UTF-8">
        <title>View Appointments</title>  
        <link rel="Stylesheet" href="styles/fg.css">
        
       
        
        <meta name="viewpoint" content="width=device-width,initial-scale=1.0">




    </head>
    <body>
        <br><br>
        <div class="button" >
        <center>
        <a href="appointmentupd.php"><input type="submit" name="update" value="Update"></a>
        <a href="appointmentdlt.php"><input type="submit" name="delete" value="Delete"></a>
        </center>
        </div>
    







    </body>

</html>