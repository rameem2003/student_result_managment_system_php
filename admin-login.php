<?php 

    include './configuration/connection.php';
    session_start();

    if(isset($_POST['login'])){
        $admin_user = $_POST['admin_user'];
        $admin_pass = $_POST['admin_pass'];

        $login_query = "SELECT * FROM `admin` WHERE admin_user = '$admin_user' AND admin_pass = '$admin_pass'";

        $run = mysqli_query($conn, $login_query);
        if(mysqli_num_rows($run) > 0){
            $row = mysqli_fetch_assoc($run);

            $_SESSION['admin_id'] = $row['id'];
            header('location:dashboard.php');
        }else{
            echo "<script> alert('Invalid user name or pasword') </script>";
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- local css -->
    <link rel="stylesheet" href="./css/admin.css">
</head>
<body>
    <form action="" method="post">
        <h4>Admin login</h4>
        <div class="input-group">
            <input class="form-control mb-3 d-block" name="admin_user" type="text" name="" id="" placeholder="Enter username ">
        </div>

        <div class="input-group">
            <input class="form-control mb-3 d-block" name="admin_pass" type="password" name="" id="" placeholder="Enter password: ">
        </div>

        <div class="input-group">
            <input class="btn btn-success ms-auto" name="login" type="submit" value="Login">
        </div>
    </form>
    
    <!-- boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>