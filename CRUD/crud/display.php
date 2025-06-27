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
    body {
        background-color: #555; 
    }

    table {
        margin-top: 50px;
        margin-left: auto;
        margin-right: auto;
        width: 75%;
        border-collapse: separate; 
        border-spacing: 0; 
        background-color: #ccc; 
        border-radius: 10px; 
        overflow: hidden; 
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 2px solid #ddd;
        background-color: transparent;
    }

    th {
        background-color: #003366; 
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
    <th>Client ID </th>
    <th>Client Name</th>
    <th>Branch</th>
    <th>Amount </th>
    <th>Client Payment</th>
    <th>Operations</th>
  </tr>

  <?php

    $sql="Select * from `architect`";
    $result=mysqli_query($con,$sql);

    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['Client_ID'];
            $name=$row['Client_Name'];
            $type=$row['Branch'];
            $qua=$row['Amount'];
            $number=$row['Client_Payment'];

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
