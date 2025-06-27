<?php                                                                     
$servername = "localhost";
$username = "root";
$password = "";
$database = "sl2my";

$connection = new mysqli($servername, $username, $password, $database);

$name = $email = $phone = $address = $project = "";
$id = $errorMessage = $successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["id"])) {
        header("location: index.php");
        exit;
    }
    $id = $_GET["id"];

    $sql = "SELECT * FROM user WHERE id=$id";
    $result = $connection->query($sql);
    
    if (!$result || $result->num_rows == 0) {
        header("location: index.php");
        exit;
    }

    $row = $result->fetch_assoc();
    $name = $row["name"];
    $email = $row["email"];
    
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    if (empty($id) || empty($name) || empty($email) ) {
        echo "<script>alert('All fields are required');</script>";
    } else {
        $sql = "UPDATE user SET name='$name', email='$email' WHERE id=$id";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
        } else {
            $successMessage = "Client updated correctly";
            header("location: index.php");
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL2MY</title>
    <link rel="stylesheet" href="create.css">
</head>
<body>
    <div class="container">
        <h2>Update User</h2>
        <?php if (!empty($errorMessage)) : ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>

        <form method="post">
            <input type="hidden" value="<?php echo htmlspecialchars($id); ?>" name="id">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
            </div>

            <input type="submit" class="btn-primary">
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>


