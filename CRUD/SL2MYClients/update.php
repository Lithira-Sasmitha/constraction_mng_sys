<?php


require 'config.php';

$name = $email = $phone = $address = $project = "";
$id = $errorMessage = $successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (!isset($_GET["id"])) {
        header("location: index.php");
        exit;
    }
    $id = $_GET["id"];

    $sql = "SELECT * FROM clients WHERE id=$id";

    $result = $con->query($sql);
    
    if (!$result || $result->num_rows == 0) {
        header("location: index.php");
        exit;
    }

    $row = $result->fetch_assoc();
    $name = $row["name"];
    $email = $row["email"];
    $phone = $row["phone"];
    $address = $row["address"];
    $project = $row["project"];

} 
elseif 
($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $project = $_POST["project"];

    if (empty($id) || empty($name) || empty($email) || empty($phone) || empty($address) || empty($project)) {
        echo "<script>alert('All fields are required');</script>";
    } else {
        $sql = "UPDATE clients SET name='$name', email='$email', phone='$phone', address='$address', project='$project' WHERE id=$id";
        $result = $con->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $con->error;
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
    <link rel="stylesheet" href="styles/create.css">
</head>

<body>
    <div class="container">
        <h2>Update Client</h2>
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

            <div class="form-group">
                <label for="phone" class="form-label">Phone number</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
            </div>

            <div class="form-group">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo htmlspecialchars($address); ?>">
            </div>

            <div class="form-group">
                <label for="project" class="form-label">Project type</label>
                <input type="text" class="form-control" id="project" name="project" value="<?php echo htmlspecialchars($project); ?>">
            </div>

            <input type="submit" class="btn-primary">
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
