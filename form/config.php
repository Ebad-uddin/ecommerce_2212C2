<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db = "form";


$connection = mysqli_connect($servername, $username, $password, $db);
if(!$connection){
    echo mysqli_connect_error();
}



?>