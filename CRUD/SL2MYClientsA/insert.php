<?php

require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $project = $_POST["project"];

    $sql = "INSERT INTO clients VALUES ('$id', '$name', '$email', '$phone', '$address', '$project')";

    if ($con->query($sql)) {
        echo "<script>alert('Insert successfully'); window.location.href = 'read.php';</script>";
    } else {
        echo "<script>alert('all feild required'); window.location.href = 'index.php';</script>";

    }

    $con->close();
} else {
    header("Location: index.php");
    exit;
}

?>
