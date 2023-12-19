<?php 
include('config.php');
include('header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<div class="container mt-5">
        
        <h1>Form Handling</h1>
        <form action="insert.php" method="POST" class="form-group mt-5">
            <label for=""> FirstName</label>
            <input type="text" name="fname" class="form-control" required>
            <label for=""> LastName</label>
            <input type="text" name="lname" class="form-control" required>
            <label for=""> Email</label>
            <input type="email" name="email" class="form-control" required>
            <label for=""> Password</label>
            <input type="password" name="pass" class="form-control" required>
            <input type="submit" name="register" value="Register" class="btn btn-primary mt-2">
        </form>
        
    </div>
   
    
</body>
</html>