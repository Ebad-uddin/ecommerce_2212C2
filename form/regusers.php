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
<div class="container">
    <h1> Welcome to my website </h1>
<?php 
    
    $fetch_data = "SELECT * from `userdata` where `status` = '1'";
    $result = mysqli_query($connection, $fetch_data);
    if($result){
        if(mysqli_num_rows($result) > 0){
        

?>
<table class="table table-bordered mt-5">
    <thead class="table bg-dark text-white">
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <!-- loop will start form here -->
        <?php 
          while($data = mysqli_fetch_assoc($result)){

        ?>
        <tr>
            <td> <?php echo $data['fname'] ?> </td>
            <td> <?php echo $data['lname'] ?> </td>
            <td> <?php echo $data['email'] ?> </td>
            <td> <?php echo $data['password'] ?> </td>
            <td class="text-center"> <a class="btn btn-primary text-center" href="update.php?id=<?php echo $data['id'] ?>"> <i class="fa-solid fa-pen-to-square"></i></a>  </td>
            <td class="text-center"> <a class="btn btn-danger text-center" href="trash.php?id=<?php echo $data['id'] ?>"> <i class="fa-solid fa-trash"></i></a>  </td>
        </tr>
        <?php 
            }
            }
        }
        ?>

        <!-- loop will end on this line -->
    </tbody>
</table>

</div>


    
</body>
</html>