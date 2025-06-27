<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SL2MY</title>
    <link rel="stylesheet" href="index.css">
    
   
</head>


<body>

    <div class="container">  

        <h2>List of Clients</h2>

        <a class="btn btn-primary" href="create.php" role="button">New Client</a>
        <br>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Project Type</th>
                <th>Action</th>
            </tr>

            <?php
                
                require 'config.php';


                // Check connection
                if($con->connect_error) {
                    die("Connection failed : " . $con->connect_error);
                }

                // Read all rows from the database table
                $sql = "SELECT * FROM clients";
                $result = $con->query($sql);


                if(!$result) {
                    die("Invalid query : " . $con->connect_error);
                }

                // Read data of each row
                while($row = $result->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['project']}</td>
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
