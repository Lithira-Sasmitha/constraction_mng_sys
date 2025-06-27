<?php
include 'contact.php';

$errors = array();

if(isset($_POST['submit'])){
    
    if(empty($_POST['Client_Name'])){
        $errors[] = "Client Name is required";
    } else {
        $name = $_POST['Client_Name'];
    }

    
    if(empty($_POST['Material_Type'])){
        $errors[] = "Material Type is required";
    } else {
        $type = $_POST['Material_Type'];
    }

    
    if(empty($_POST['Quantity'])){
        $errors[] = "Quantity is required";
    } elseif(!is_numeric($_POST['Quantity'])) {
        $errors[] = "Quantity must be a number";
    } else {
        $qua = $_POST['Quantity'];
    }

    
    if(empty($_POST['Phone_Number'])){
        $errors[] = "Phone Number is required";
    } elseif(!preg_match("/^[0-9]{10}$/", $_POST['Phone_Number'])) {
        $errors[] = "Invalid Phone Number";
    } else {
        $number = $_POST['Phone_Number'];
    }

    
    if(empty($errors)){
        $sql = "INSERT INTO `client_n`(Client_Name, Material_Type, Quantity, Phone_Number) 
                VALUES('$name','$type','$qua','$number')";
        $result = mysqli_query($con, $sql);
        
        if($result){
            header('location:display.php');
            exit(); 
        } else {
            $errors[] = mysqli_error($con);
        }
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
    <?php if(!empty($errors)): ?>
        <div class="errors">
            <ul>
                <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
    <form method="post" action="#" class="form">
        <div class="form-group">
            <label>Client Name</label>
            <input type="text" placeholder="Enter your name" name="Client_Name">
        </div>
        <div class="form-group">
            <label>Material Type</label>
            <input type="text" placeholder="Enter Material Type" name="Material_Type">
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="text" placeholder="Enter quantities" name="Quantity">
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" placeholder="Enter your Phone Number" name="Phone_Number">
        </div>
        <button type="submit" class="stype" name="submit">Submit</button>
    </form>
</div>
</body>
</html>
