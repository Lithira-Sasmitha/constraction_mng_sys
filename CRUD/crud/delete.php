<?php
include 'contact.php';

if(isset($_GET['deleteid'])){

    $id=$_GET['deleteid'];

    $sql="delete from  `architect` where Client_ID=$id";
    $result=mysqli_query($con,$sql);

    if($result)
    {
        //echo "Deleted successfull";
        header('location:display.php');

    }


    else
    {
        die(mysqli_error($con));
    }
}



?>