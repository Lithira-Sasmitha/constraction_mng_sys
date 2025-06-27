<?php
require 'config.php';

$id = $_POST["id"];

$sql = "DELETE FROM clients WHERE Id='$id'";

if ($con->query($sql)) {
    echo "<script>
    var confirmed = confirm('Do you want to delete ?');
    if (confirmed) {
        window.location.href = 'read.php'; // Redirect to form page or any other page
    } else {
        window.history.back(); // Go back to the previous page
    }
  </script>";
} else {
    echo "Error: " . $con->error;
}
$con->close();
?>
