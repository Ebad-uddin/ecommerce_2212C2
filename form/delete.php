<?php 
include ('config.php');

if(isset($_GET['id'])){
    $user_id = $_GET['id'];
}

$delete = "DELETE from `userdata` where `id` = '$user_id'";
$query = mysqli_query($connection, $delete);

if($query){
    echo '<script>
    alert("data deleted successfully")
    window.location.href="regusers.php"
    </script>';
}

?>