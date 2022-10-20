<?php 

    include './configuration/connection.php';

    session_start();

    // show admin name
    $admin_id = $_SESSION['admin_id'];
    $show_admin = "SELECT * FROM `admin` WHERE id = '$admin_id'";

    $run_admin = mysqli_query($conn, $show_admin);

    if(mysqli_num_rows($run_admin) > 0){
        $admin_name = mysqli_fetch_assoc($run_admin);
    }

    if(!isset($admin_id)){
        header('location:admin-login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- local css -->
    <link rel="stylesheet" href="./css/dashbboard.css">
</head>
<body>
    
    <div class="row wrapper">
        <div class="col-md-3 bg-dark text-light left">
            <div class="title">
                <h1>Dashboard</h1>
                <h2>Welcome <?php echo $admin_name['admin_user'] ?></h2>
            </div>

            <div class="option mt-5">
                <a class="btn btn-primary d-block my-3" href="#add_student_info">Add Student Info</a>
                <a class="btn btn-primary d-block my-3" href="./student_list.html" target="_blank">Show Student list</a>
                <a class="btn btn-primary d-block my-3" href="#">Search Student</a>
                <a class="btn btn-primary d-block my-3" href="#">Add Admin</a>
            </div>
        </div>
        <div class="col-md-9 right">
            <div class="head">
                <div class="row m-0 py-2 bg-dark text-light">
                    <div class="col-md-8 d-flex justify-content-center align-items-center">
                        <h1>Computer Technology 6th Semester</h1>
                    </div>
                    <div class="col-md-4">
                        <div class="box rounded-circle bg-danger d-flex justify-content-center align-items-center flex-column">
                            <p class="fw-bold">Total Student</p>
                            <h1>100</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- add student form -->
            <div class="form_section" id="add_student_info">
                <form class="rounded p-3" action="">
                    <h1>Basic Info</h1>
                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Enter Student Name">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Enter Student Board Roll:">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Enter Student Registration No:">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Father's Name: ">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Mother's Name: ">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Phone Number: ">
                        </div>
                        <div class="col">
                          <input type="email" class="form-control" placeholder="Email: ">
                        </div>
                    </div>

                    <h1>Academic Info</h1>

                    <div class="row my-3">
                        <table class="table table-striped table-hover table-dark">
                            <thead>
                                <tr>
                                    <td>Subject</td>
                                    <td>Midtarm Number</td>
                                    <td>Practical Number</td>
                                    <td>Contineous Assessment Number</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Principals of Software Engineering</td>
                                    <td><input type="number" class="form-control" placeholder="Midtarm Number: "></td>
                                    <td><input type="number" class="form-control" placeholder="Practical Number "></td>
                                    <td><input type="number" class="form-control" placeholder="Contineous Assessment Number "></td>
                                </tr>

                                <tr>
                                    <td>Microprocessor & Interfacing</td>
                                    <td><input type="number" class="form-control" placeholder="Midtarm Number: "></td>
                                    <td><input type="number" class="form-control" placeholder="Practical Number "></td>
                                    <td><input type="number" class="form-control" placeholder="Contineous Assessment Number "></td>
                                </tr>

                                <tr>
                                    <td>Microcontroller Application</td>
                                    <td><input type="number" class="form-control" placeholder="Midtarm Number: "></td>
                                    <td><input type="number" class="form-control" placeholder="Practical Number "></td>
                                    <td><input type="number" class="form-control" placeholder="Contineous Assessment Number "></td>
                                </tr>

                                <tr>
                                    <td>Microcontroller Application</td>
                                    <td><input type="number" class="form-control" placeholder="Midtarm Number: "></td>
                                    <td><input type="number" class="form-control" placeholder="Practical Number "></td>
                                    <td><input type="number" class="form-control" placeholder="Contineous Assessment Number "></td>
                                </tr>

                                <tr>
                                    <td>Web Mastering</td>
                                    <td><input type="number" class="form-control" placeholder="Midtarm Number: "></td>
                                    <td><input type="number" class="form-control" placeholder="Practical Number "></td>
                                    <td><input type="number" class="form-control" placeholder="Contineous Assessment Number "></td>
                                </tr>

                                <tr>
                                    <td>Environmental Studies</td>
                                    <td><input type="number" class="form-control" placeholder="Midtarm Number: "></td>
                                    <td><input type="number" class="form-control" placeholder="Practical Number "></td>
                                    <td><input type="number" class="form-control" placeholder="Contineous Assessment Number "></td>
                                </tr>


                                <tr>
                                    <td>Industrial Management</td>
                                    <td><input type="number" class="form-control" placeholder="Midtarm Number: "></td>
                                    <td><input type="number" class="form-control" placeholder="Practical Number "></td>
                                    <td><input type="number" class="form-control" placeholder="Contineous Assessment Number "></td>
                                </tr>
                            </tbody>
                        </table>

                        <input class="btn btn-danger" type="submit" value="Upload">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>