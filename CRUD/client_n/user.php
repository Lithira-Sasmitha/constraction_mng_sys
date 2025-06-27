<?php
include 'contact.php';

$errors = array();

if(isset($_POST['submit'])){
    $name = $_POST['Client_Name'];
    $type = $_POST['Material_Type'];
    $qua = $_POST['Quantity'];
    $number = $_POST['Phone_Number'];

    // Validation for Client Name
    if(empty($name)){
        $errors['Client_Name'] = "Client Name is required";
    }

    // Validation for Material Type
    if(empty($type)){
        $errors['Material_Type'] = "Material Type is required";
    }

    // Validation for Quantity
    if(empty($qua)){
        $errors['Quantity'] = "Quantity is required";
    } elseif(!is_numeric($qua)) {
        $errors['Quantity'] = "Quantity must be a number";
    }

    // Validation for Phone Number
    if(empty($number)){
        $errors['Phone_Number'] = "Phone Number is required";
    } elseif(!preg_match("/^\d{10}$/", $number)) {
        $errors['Phone_Number'] = "Invalid Phone Number";
    }

    // If there are no errors, insert data into the database
    if(empty($errors)){
        $sql = "INSERT INTO `client_n` (Client_Name, Material_Type, Quantity, Phone_Number) 
                VALUES ('$name', '$type', '$qua', '$number')";
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
    <form method="post" action="#" class="form">
        <div class="form-group">
            <label>Client Name</label>
            <input type="text" placeholder="Enter your name" name="Client_Name">
            <?php if(isset($errors['Client_Name'])): ?>
                <span class="error"><?php echo $errors['Client_Name']; ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Material Type</label>
            <input type="text" placeholder="Enter Material Type" name="Material_Type">
            <?php if(isset($errors['Material_Type'])): ?>
                <span class="error"><?php echo $errors['Material_Type']; ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="number" placeholder="Enter quantities" name="Quantity">
            <?php if(isset($errors['Quantity'])): ?>
                <span class="error"><?php echo $errors['Quantity']; ?></span>
            <?php endif; ?>
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" placeholder="Enter Phone Number" name="Phone_Number">
            <?php if(isset($errors['Phone_Number'])): ?>
                <span class="error"><?php echo $errors['Phone_Number']; ?></span>
            <?php endif; ?>
        </div>
        <button type="submit" class="stype" name="submit">Submit</button>
    </form>
</div>
</body>
</html>
