<?php
include('config.php');
include('header.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

    <div class="container mt-5">

        <h1>User Login </h1>
        <form action="login.php" method="POST" class="form-group mt-5">

            <label for=""> Email</label>
            <input type="email" name="email" class="form-control" required>
            <label for=""> Password</label>
            <input type="password" name="pass" class="form-control" required>
            <input type="submit" name="login" value="Login" class="btn btn-primary mt-2">
        </form>

    </div>

    <?php
    if (isset($_POST['login'])) {

        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $pass = mysqli_real_escape_string($connection, $_POST['pass']);

        $verify = "SELECT * from `userdata` where `email` = '$email'";
        $result = mysqli_query($connection, $verify);
        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                // print_r($row);
                $dbpass = $row['password'];
                // echo $dbpass;
                $verifyPass = password_verify($pass, $dbpass);
                if ($verifyPass) {
                    echo "<script> alert('login successful')
                    window.location.href='regusers.php'
                    </script>";
                } else {
                    echo "<script> alert('Invalid Password') </script>";
                }
            } else {
                echo "<script> alert('Invalid Email') </script>";
            }
        }
    }

    ?>


</body>

</html>