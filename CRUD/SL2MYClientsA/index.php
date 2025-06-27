<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        border-radius: 10px;
        background-color: #f9f9f9;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .container fieldset {
        border: none;
        margin: 0;
        padding: 0;
    }

    .container legend {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .container input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .btn input, .btn a {
        width: 25%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        text-decoration: none;
    }

    .btn :hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
   
<div class="container">
    <fieldset>
        <legend>client information </legend>
        <form method="post" action="insert.php">
            ID : <input type="text"  name="id" ><br><br>
            Name : <input type="text" name="name" ><br><br>
            Email : <input type="text" name="email" ><br><br>
            Contact : <input type="text" name="phone" ><br><br>
            Address : <input type="text" name="address" ><br><br>
            Project : <input type="text" name="project" ><br><br>
            
            <div class="btn">
                <input type="submit">
                
            <a href="read.php"> Cancel </a>
            </div>
        </form>
    </fieldset>
</div>
</body>
</html>

