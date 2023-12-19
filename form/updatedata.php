<?php 
include('config.php');

if(isset($_POST['update'])){
    $userid = $_POST['userid'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    $update = "UPDATE `userdata` SET `fname` = '$fname', `lname` = '$lname', 
    `email` = '$email' WHERE `id` = '$userid'";
    $res = mysqli_query($connection, $update);
    if($res){
        echo '<script>
        alert("data updated successfully")
        window.location.href="regusers.php"
        </script>';
    }
}




?>