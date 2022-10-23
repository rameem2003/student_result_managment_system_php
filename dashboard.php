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

    // data upload
    if(isset($_POST['upload'])){
        $name = $_POST['student_name'];
        $roll = $_POST['board_roll'];
        $regi = $_POST['regi_number'];
        $f_name = $_POST['f_name'];
        $m_name = $_POST['m_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $pse_mn = $_POST['pse_mn'];
        $pse_pn = $_POST['pse_pn'];
        $pse_cn = $_POST['pse_cn'];

        $mi_mn = $_POST['mi_mn'];
        $mi_pn = $_POST['mi_pn'];
        $mi_cn = $_POST['mi_cn'];

        $ma_mn = $_POST['ma_mn'];
        $ma_pn = $_POST['ma_pn'];
        $ma_cn = $_POST['ma_cn'];

        $db_mn = $_POST['db_mn'];
        $db_pn = $_POST['db_pn'];
        $db_cn = $_POST['db_cn'];

        $wm_mn = $_POST['wm_mn'];
        $wm_pn = $_POST['wm_pn'];
        $wm_cn = $_POST['wm_cn'];

        $es_mn = $_POST['es_mn'];
        $es_pn = $_POST['es_pn'];
        $es_cn = $_POST['es_cn'];

        $im_mn = $_POST['im_mn'];
        $im_pn = $_POST['im_pn'];
        $im_cn = $_POST['im_cn'];

        $upload_data_query = "INSERT INTO `semester_6th_data`(name, roll, regi, f_name, m_name, phone, email, pse_mn, pse_pn, pse_cn, mi_mn, mi_pn, mi_cn, ma_mn, ma_pn, ma_cn, db_mn, db_pn, db_cn, wm_mn, wm_pn, wm_cn, es_mn, es_pn, es_cn, im_mn, im_pn, im_cn) VALUES ('$name','$roll','$regi','$f_name','$m_name','$phone','$email','$pse_mn','$pse_pn','$pse_cn','$mi_mn','$mi_pn','$mi_cn','$ma_mn','$ma_pn','$ma_cn','$db_mn','$db_pn','$db_cn','$wm_mn','$wm_pn','$wm_cn','$es_mn','$es_pn','$es_cn','$im_mn','$im_pn','$im_cn')";


        if(mysqli_query($conn, $upload_data_query)){
            echo "<script> alert('Upload Successfull') </script>";
        }else{
            echo "<script> alert('Somthing went wrong!!!') </script>";
        }
    }

    // total student count
    $total_student_query = "SELECT * FROM `semester_6th_data`";
    $run_total_student_query = mysqli_query($conn, $total_student_query);
    $total_student = mysqli_num_rows($run_total_student_query);

    // search student function
    if(isset($_POST['search_roll_admin'])){
        $student_roll = $_POST['search_roll'];
        $search_query = "SELECT * FROM `semester_6th_data` WHERE roll = '$student_roll'";

        $run_query = mysqli_query($conn, $search_query);

        if(mysqli_num_rows($run_query) > 0){
            $student_info = mysqli_fetch_assoc($run_query);
            $_SESSION['st_info'] = $student_info['roll'];
            header("location:view_result_admin.php");
        }
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
                <a class="btn btn-primary d-block my-3" href="./student_list.php" target="_blank">Show Student list</a>
                <a class="btn btn-primary d-block my-3" href="#search_box">Search Student</a>
                <a class="btn btn-primary d-block my-3" href="#">Add Admin</a>
            </div>
        </div>
        <div class="col-md-9 right position-relative">
            <div class="position-fixed w-100 head">
                <div class="row m-0 py-2 bg-dark text-light">
                    <div class="col-md-7 d-flex justify-content-center align-items-center">
                        <h1>Computer Technology 6th Semester</h1>
                    </div>
                    <div class="col-md-5">
                        <div class="box rounded-circle bg-danger d-flex justify-content-center align-items-center flex-column">
                            <p class="fw-bold">Total Student</p>
                            <h1><?php echo $total_student ?></h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- add student form -->
            <div class="form_section" id="add_student_info">
                <form class="rounded p-3" action="" method="POST">
                    <h1>Basic Info</h1>
                    <div class="row my-3">
                        <div class="col">
                            <input type="text" class="form-control" name="student_name" placeholder="Enter Student Name">
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col">
                          <input type="text" class="form-control" name="board_roll" placeholder="Enter Student Board Roll:">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" name="regi_number" placeholder="Enter Student Registration No:">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                          <input type="text" class="form-control" name="f_name" placeholder="Father's Name: ">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" name="m_name" placeholder="Mother's Name: ">
                        </div>
                    </div>

                    <div class="row my-3">
                        <div class="col">
                          <input type="text" class="form-control" name="phone" placeholder="Phone Number: ">
                        </div>
                        <div class="col">
                          <input type="email" class="form-control" name="email" placeholder="Email: ">
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
                                        <td><input type="number" name="pse_mn" class="form-control" placeholder="Midtarm Number: "></td>
                                        <td><input type="number" name="pse_pn" class="form-control" placeholder="Practical Number "></td>
                                        <td><input type="number" name="pse_cn" class="form-control" placeholder="Contineous Assessment Number "></td>
                                    </tr>

                                    <tr>
                                        <td>Microprocessor & Interfacing</td>
                                        <td><input type="number" name="mi_mn" class="form-control" placeholder="Midtarm Number: "></td>
                                        <td><input type="number" name="mi_pn" class="form-control" placeholder="Practical Number "></td>
                                        <td><input type="number" name="mi_cn" class="form-control" placeholder="Contineous Assessment Number "></td>
                                    </tr>

                                    <tr>
                                        <td>Microcontroller Application</td>
                                        <td><input type="number" name="ma_mn" class="form-control" placeholder="Midtarm Number: "></td>
                                        <td><input type="number" name="ma_pn" class="form-control" placeholder="Practical Number "></td>
                                        <td><input type="number" name="ma_cn" class="form-control" placeholder="Contineous Assessment Number "></td>
                                    </tr>

                                    <tr>
                                        <td>DBMS</td>
                                        <td><input type="number" name="db_mn" class="form-control" placeholder="Midtarm Number: "></td>
                                        <td><input type="number" name="db_pn" class="form-control" placeholder="Practical Number "></td>
                                        <td><input type="number" name="db_cn" class="form-control" placeholder="Contineous Assessment Number "></td>
                                    </tr>

                                    <tr>
                                        <td>Web Mastering</td>
                                        <td><input type="number" name="wm_mn" class="form-control" placeholder="Midtarm Number: "></td>
                                        <td><input type="number" name="wm_pn" class="form-control" placeholder="Practical Number "></td>
                                        <td><input type="number" name="wm_cn" class="form-control" placeholder="Contineous Assessment Number "></td>
                                    </tr>

                                    <tr>
                                        <td>Environmental Studies</td>
                                        <td><input type="number" name="es_mn" class="form-control" placeholder="Midtarm Number: "></td>
                                        <td><input type="number" name="es_pn" class="form-control" placeholder="Practical Number "></td>
                                        <td><input type="number" name="es_cn" class="form-control" placeholder="Contineous Assessment Number "></td>
                                    </tr>


                                    <tr>
                                        <td>Industrial Management</td>
                                        <td><input type="number" name="im_mn" class="form-control" placeholder="Midtarm Number: "></td>
                                        <td><input type="number" name="im_pn" class="form-control" placeholder="Practical Number "></td>
                                        <td><input type="number" name="im_cn" class="form-control" placeholder="Contineous Assessment Number "></td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>
                    <input class="btn btn-danger" name="upload" type="submit" value="Upload">
                </form>
            </div>

            <!-- search student -->
            <div class="search_box d-flex align-items-center justify-content-center" id="search_box">
                <form class="bg-secondary rounded text-light p-4" action="" method="post">
                    <h3 class="mb-3 text-center">Search Student & update data</h3>
                    <div class="row text-center">
                        <div class="col-md-10 p-0">
                            <input class="form-control" type="text" name="search_roll" id="" placeholder="Search roll....">
                        </div>

                        <div class="col-md-2 p-0">
                            <input class="btn btn-primary" name="search_roll_admin" type="submit" value="Search">
                        </div>
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