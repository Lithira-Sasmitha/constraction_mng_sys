<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sl2my";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

$name = isset($_POST["name"]) ? $_POST["name"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($name) || empty($email) ) {
        echo "<script>alert('All fields are required');</script>";
    } else {
        // Add client to database here
        $sql = "INSERT INTO user (name, email) VALUES ('$name', '$email')";
        $result = $connection->query($sql);

        if ($result) {
            // Clear form fields after successful submission
            $name = $email = "";
            $successMessage = "Client added successfully";
            // JavaScript alert for success
            echo "<script>alert('Client added successfully');</script>";
        } else {
            $errorMessage = "Error: " . $sql . "<br>" . $connection->error;
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
        <h2>New Client</h2>
        <?php if (!empty($errorMessage)) : ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $errorMessage; ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($successMessage)) : ?>
            <div class="alert alert-success" role="alert">
                <?php echo $successMessage; ?>
            </div>
        <?php endif; ?>

        <form method="post">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>">
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
            </div>

            
            

            <button type="submit" class="btn-primary">Submit</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>

            
        </form>
    </div>
</body>
</html>