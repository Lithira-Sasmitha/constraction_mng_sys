<?php
include 'contact.php';
 $id=$_GET['updateid'];
 $sql="select * from `client_n` where Oder_ID=$id";
 $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_assoc($result);
 $name=$row['Client_Name'];
 $type=$row['Material_Type'];
 $qua=$row['Quantity'];
 $number=$row['Phone_Number'];

  if(isset($_POST['submit'])){
    $name=$_POST['Client_Name'];
    $type=$_POST['Material_Type'];
    $qua=$_POST['Quantity'];
    $number=$_POST['Phone_Number'];
  

  $sql="update `client_n` set Oder_ID=$id,Client_Name='$name',
  Material_Type='$type',Quantity='$qua',Phone_Number='$number'
  where Oder_ID=$id";

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
            name="Client_Name" value=<?php echo $name;?>>
        </div>
        <div class="form-group">
            <labal>Material Type</labal>
            <input type="text"  placeholder="Enter Material Type" 
            name="Material_Type" value=<?php echo $type;?>>
        </div> 
        <div class="form-group">
            <labal>Quantity</labal>
            <input type="text"  placeholder="Enter quantities" 
            name="Quantity" value=<?php echo $qua;?>>
        </div> 
        <div class="form-group">
            <labal>Phone Number</labal>
            <input type="number"  placeholder="Enter your Phone Number" 
            name="Phone_Number" value=<?php echo $number;?>>
        </div> 
     
        <button type="submit" class="stype" name="submit"> Update </button>

        

     </form>

 </div>
     
    
</body>
</html>