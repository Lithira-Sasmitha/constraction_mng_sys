<?php

include 'contact.php';

 $id=$_GET['updateid'];

 $sql="select * from `architect` where Client_ID=$id";

 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);

    $name=$row['Client_Name'];
    $type=$row['Branch'];
    $qua=$row['Amount'];
    $number=$row['Client_Payment'];

      if(isset($_POST['submit'])){
        $name=$_POST['Client_Name'];
        $type=$_POST['Branch'];
        $qua=$_POST['Amount'];
        $number=$_POST['Client_Payment'];
      

      $sql="update `architect` set Client_ID=$id,Client_Name='$name',
      Branch='$type',Amount='$qua',Client_Payment='$number'
      where Client_ID=$id";

      $result=mysqli_query($con,$sql);

      if($result)
      {
        header('location:display.php');
      }
      else
      {
        die(mysqli_error($con));
      }
      }


?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>

    <link rel="stylesheet" href="user.css">
    
</head>
<body>
     
 <div class="container">

     <header>Details</header>

     <form method="post" action="#" class="form">
        <div class="form-group">
            <labal>Client Name</labal>
            <input type="text"  placeholder="Enter your name" 
            name="Client_Name" value=<?php echo $name?>>
        </div>
        <div class="form-group">
            <labal>Branch</labal>
            <input type="text"  placeholder="Enter the Branch" 
            name="Branch" value=<?php echo $type?>>
        </div> 
        <div class="form-group">
            <labal>Amount</labal>
            <input type="text"  placeholder="Enter the Amount" 
            name="Amount" value=<?php echo $qua?>>
        </div> 
        <div class="form-group">
            <labal>Client Payment</labal>
            <input type="number"  placeholder="Enter Client Payment" 
            name="Client_Payment" value=<?php echo $number?>>
        </div> 
     
        <button type="submit" class="stype" name="submit"> Update </button>

        

     </form>

 </div>
     

     
    
</body>
</html>