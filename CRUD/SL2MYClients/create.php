<?php

require 'config.php';


$name = isset($_POST["name"]) ? $_POST["name"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
$address = isset($_POST["address"]) ? $_POST["address"] : "";
$project = isset($_POST["project"]) ? $_POST["project"] : "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($name) || empty($email) || empty($phone) || empty($address) || empty($project)) {
        echo "<script>alert('All fields are required');</script>";
    } else {
        // Add client to database here
        $sql = "INSERT INTO clients (name, email, phone, address, project) VALUES ('$name', '$email', '$phone', '$address', '$project')";
        $result = $con->query($sql);

        if ($result) {
            // Clear form fields after successful submission
            $name = $email = $phone = $address = $project = "";
            $successMessage = "Client added successfully";
            // JavaScript alert for success
            echo "<script>alert('Client added successfully');</script>";
        } else {
            $errorMessage = "Error: " . $sql . "<br>" . $con->error;
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


