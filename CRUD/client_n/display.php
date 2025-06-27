<?php
 
 include 'contact.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Colorful Table</title>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    th {
        background-color: #4CAF50;
        color: white;
    }
    
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    
    
    tr:nth-child(odd) {
        background-color: #ffcc00;
    }
</style>
</head>
<body>
<button><a href="user.php">Add details</a></button>
<table>
  <tr>
    <th>Oder ID </th>
    <th>Client Name</th>
    <th>Material Type</th>
    <th>Quantity</th>
    <th>Phone Number</th>
    <th>Operations</th>
  </tr>

  <?php

    $sql="Select * from `client_n`";
    $result=mysqli_query($con,$sql);

    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['Oder_ID'];
            $name=$row['Client_Name'];
            $type=$row['Material_Type'];
            $qua=$row['Quantity'];
            $number=$row['Phone_Number'];

            echo'<tr>
            <td>'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$type.'</td>
            <td>'.$qua.'</td>
            <td>'.$number.'</td>
            
            <td>
            <button> <a href="update.php?
            updateid='.$id.'"> Update </a> </button>
            <button> <a href="delete.php?
            deleteid='.$id.'"> Delete </a> </button>
          </td>

          </tr>';
        }
    }

  ?>

  <!--<tr>
    <td>Data 1</td>
    <td>Data 2</td>
    <td>Data 3</td>
    <td>Data 4</td>
    <td>Data 5</td>
    <td>Data 6</td>
  </tr>
  <tr>
    <td>Data 7</td>
    <td>Data 8</td>
    <td>Data 9</td>
    <td>Data 10</td>
    <td>Data 11</td>
    <td>Data 12</td>
  </tr>
  <tr>
    <td>Data 13</td>
    <td>Data 14</td>
    <td>Data 15</td>
    <td>Data 16</td>
    <td>Data 17</td>
    <td>Data 18</td>
  </tr>
</table>

</body>
</html>
