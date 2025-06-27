<?php
include 'contact.php';
  
if(isset($_POST['submit'])){
    $name = $_POST['Client_Name'];
    $type = $_POST['Branch'];
    $qua = $_POST['Amount'];
    $number = $_POST['Client_Payment'];

    $sql = "INSERT INTO `architect`(Client_Name, Branch, Amount, Client_Payment)
            VALUES ('$name', '$type', '$qua', '$number')";

    $result = mysqli_query($con, $sql);

    if($result) {
        header('Location: display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="user.css">
    <script>
    function validateForm() {
        var name = document.forms["myForm"]["Client_Name"].value;
        var branch = document.forms["myForm"]["Branch"].value;
        var amount = document.forms["myForm"]["Amount"].value;
        var payment = document.forms["myForm"]["Client_Payment"].value;

        if (name == "" || branch == "" || amount == "" || payment == "") {
            alert("All fields must be filled out");
            return false;
        }
        return true;
    }
    </script>
</head>
<body>
    <div class="container">
        <header>Details</header>
        <form method="post" action="#" class="form" name="myForm" onsubmit="return validateForm()">
            <div class="form-group">
                <label>Client Name</label>
                <input type="text" placeholder="Enter your name" name="Client_Name">
            </div>
            <div class="form-group">
                <label>Branch</label>
                <input type="text" placeholder="Enter the Branch" name="Branch">
            </div>
            <div class="form-group">
                <label>Amount</label>
                <input type="text" placeholder="Enter the Amount" name="Amount">
            </div>
            <div class="form-group">
                <label>Client Payment</label>
                <input type="number" placeholder="Enter Client Payment" name="Client_Payment">
            </div>
            <button type="submit" class="stype" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
