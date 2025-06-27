<?php
if(isset($_GET["id"])) {
    $id = $_GET["id"];

   require 'config.php';


    // Check if the client exists
    $sql = "SELECT * FROM clients WHERE id=$id";

    $result = $con->query($sql);
    if ($result->num_rows == 0) {
        echo '<script>alert("Client not found!");</script>';
    } else {
        // Use JavaScript confirm dialog to confirm deletion
        echo '<script>';
        echo 'if(confirm("Are you sure you want to delete this client?")) {';
        echo '  window.location.href = "delete.php?id=' . $id . '&confirmed=1";';
        echo '}';
        echo '</script>';
    }
}

// If deletion is confirmed, proceed with deletion
if(isset($_GET["id"]) && isset($_GET["confirmed"]) && $_GET["confirmed"] == 1) {
    $id = $_GET["id"];

    require 'config.php';

    $sql = "DELETE FROM clients WHERE id=$id";
    $con->query($sql);

    // Redirect to index page after deletion
    header("Location: index.php");
    exit;
}
?>

