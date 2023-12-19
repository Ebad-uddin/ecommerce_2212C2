<?php 
include('config.php');


if(isset($_GET['id'])){
    $user_id = $_GET['id'];
    // echo $user_id;

    $fetch_record = "SELECT * from `userdata` where `id` = '$user_id'";
    $result = mysqli_query($connection,$fetch_record);
    if($result){
        if(mysqli_num_rows($result) > 0){

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
    <?php 
                while($row = mysqli_fetch_assoc($result)){

    ?>
        
        <h1>Form Handling</h1>
        <form action="updatedata.php" method="POST" class="form-group mt-5">
            <label for=""> FirstName</label>
            <input type="hidden" name="userid" class="form-control" required value="<?php echo $row['id'] ?>">
            <input type="text" name="fname" class="form-control" required value="<?php echo $row['fname'] ?>">
            <label for=""> LastName</label>
            <input type="text" name="lname" class="form-control" required value="<?php echo $row['lname'] ?>">
            <label for=""> Email</label>
            <input type="email" name="email" class="form-control" required value="<?php echo $row['email'] ?>">
            <input type="submit" name="update" value="Update" class="btn btn-primary mt-2">
        </form>
        
    </div>
     <?php 
          }
        }
    }
}
    ?>
</body>
</html>