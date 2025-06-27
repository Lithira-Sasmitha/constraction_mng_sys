<?php                                                                                                                                                        
if(isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sl2my";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    // Check if the client exists
    $sql = "SELECT * FROM user WHERE id=$id";
    $result = $connection->query($sql);
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

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sl2my";

    // Create connection
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM user WHERE id=$id";
    $connection->query($sql);

    // Redirect to index page after deletion
    header("Location:index.php");
    exit;
}
?>