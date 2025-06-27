<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL2MY</title>
    <link rel="stylesheet" href="index.css">
    
    </style>
</head>
<body>
    <div class="container">     
        <h2>List of User</h2>
        <a class="btn btn-primary" href="create.php" role="button">New User</a>
        <br>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "sl2my";

                // Create connection
                $connection = new mysqli($servername, $username, $password, $database);

                // Check connection
                if($connection->connect_error) {
                    die("Connection failed : " . $connection->connect_error);
                }

                // Read all rows from the database table
                $sql = "SELECT * FROM user";
                $result = $connection->query($sql);

                if(!$result) {
                    die("Invalid query : " . $connection->connect_error);
                }

                // Read data of each row
                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td class='action-buttons'>
                            <a class='btn btn-primary btn-sm' href='update.php?id={$row['id']}'> Update </a>
                            <a class='btn btn-danger btn-sm' href='delete.php?id={$row['id']}'> Delete </a>
                        </td>
                    </tr>";
                }
            ?>
        </table>
    </div>
</body>
</html>












