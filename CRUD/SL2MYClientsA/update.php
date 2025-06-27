
<?php
require 'config.php';

$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$project=$_POST["project"];

if(empty($id) || empty($name) || empty($email) || empty($phone) || empty($address) || empty($project))
{
    echo "All fields required";
}
else
{
    
    $sql = "UPDATE clients SET id='$id' ,name='$name', email='$email', phone='$phone', address='$address', project='$project' WHERE id='$id'";

    if($con->query($sql))
    {
        echo "<script>alert('Updated successfully'); window.location.href = 'read.php';</script>";
    }
    else
    {
        echo "Not Updated";
    }
}
?>


