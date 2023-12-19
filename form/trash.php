<?php 
include('config.php');


if(isset($_GET['id'])){
    $user_id = $_GET['id'];
}

$trash = "UPDATE `userdata` Set `status` = '0' WHERE `id` = '$user_id'";
$result = mysqli_query($connection, $trash);
if($result){
    header('location:trashdata.php');
}

?>