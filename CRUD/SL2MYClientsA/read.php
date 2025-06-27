<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }

        .btn-add
        {
            background-color: green;
            margin-top: 15px;
            display: inline-block;
            padding: 10px 20px;
            
            border-radius: 5px;
        }
        .btn-add a{
            text-decoration: none;
            color: white;
        }

        .container {
            max-width: auto;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .btn-primary {
            background-color: #dc3545;
            color: #fff;
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-danger {
            color: #fff;
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-primary:hover, .btn-danger:hover {
            opacity: 0.8;
        }


    </style>
</head>
<body>
    <div class="btn-add">
    <a href="index.php">Add a new client</a>
    </div>

    <div class="container">
    <?php
    require 'config.php';

    $sql="SELECT id,name,email,phone,address, project FROM clients"; 
    $result=$con->query($sql);

    if($result->num_rows>0)
    {
        echo "<table border='2'>";
        echo "<tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Project</th>
                <th>Action</th>
            </tr>";
        while($row=$result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$row["id"]."</td> "."<td>". $row["name"]."</td> "."<td>". $row["email"]."</td>"."<td>". $row["phone"]."</td>"."<td>". $row["address"]."</td>"."<td>". $row["project"]."</td>".
            "<td class='action-buttons'>
                        <a class='btn-primary' href='update-index.php'> Update </a>
                        <a class='btn-danger' href='delete-index.php'> Delete </a>
            </td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else
    {
        echo "No resultss";
    }
   

    $con->close();
    ?>
</div>
</body>
</html>

