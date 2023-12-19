<?php 
include('config.php');


if(isset($_POST['register'])){
    $fname = mysqli_real_escape_string($connection,$_POST['fname']);
    $lname = mysqli_real_escape_string($connection,$_POST['lname']);
    $email = mysqli_real_escape_string($connection,$_POST['email']);
    $pass = mysqli_real_escape_string($connection,$_POST['pass']);
   
    // blowfish algorithm
    $enc_pass = password_hash($pass, PASSWORD_BCRYPT);    

    // echo "$fname , $lname , $email , $enc_pass ";

    $insert  = "INSERT INTO `userdata` (`fname`, `lname`, `email`, `password`) VALUES ('$fname', '$lname', '$email', '$enc_pass')";
    $result = mysqli_query($connection, $insert);
    if($result){
        echo '<script>
        alert("data inserted successfully")
        window.location.href="index.php"
        </script>';
    }
}




?>