<?php
    include './configuration/connection.php';
    session_start();
    // search student function
    if(isset($_POST['student_query'])){
        $student_search_index = $_POST['student_search'];
        if($student_search_index != ""){
            $search_query_index = "SELECT * FROM `semester_6th_data` WHERE roll = '$student_search_index'";

            $run_query = mysqli_query($conn, $search_query_index);

            if(mysqli_num_rows($run_query) > 0){
                $student_info = mysqli_fetch_assoc($run_query);
                $_SESSION['search_student'] = $student_info['roll'];
                header("location:view_result_student.php");
            }
        }else{
            echo "<script> alert('Please Enter Your Roll') </script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Technology 2019-20</title>

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- local css -->
    <link rel="stylesheet" href="./css/search-result.css">
</head>
<body class="bg-secondary">
    <h1 class="bg-primary py-3 text-center text-light">Search Your Result</h1>

    <form action="" method="post">
        <h4>Search your result</h4>
        <div class="input-group">
            <input class="form-control mb-4" type="text" name="student_search" id="" placeholder="Enter roll number: ">
        </div>

        <div class="input-group">
            <input class="btn btn-success ms-auto" name="student_query" type="submit" value="Search">
        </div>
    </form>
    
    <a class="btn btn-danger fw-bold" id="adminBtn" href="./admin-login.php">Admin Login</a>

    
    <!-- boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>