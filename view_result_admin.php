<?php

    include './configuration/connection.php';
    session_start();

    // load student data ion form
    $student_info = $_SESSION['st_info'];

    $view_info_query = "SELECT * FROM `semester_6th_data` WHERE roll = '$student_info'";

    $view_info = mysqli_query($conn, $view_info_query);

    if(mysqli_num_rows($view_info) > 0){
        $row = mysqli_fetch_assoc($view_info);
    }

    // logout from this page
    if(isset($_GET['logout'])){
        unset($student_info);
        header('location:dashboard.php');
    }

    if(isset($_POST['update'])){
        $update_name = $_POST['update_student_name'];
        $update_roll = $_POST['update_board_roll'];
        $update_regi = $_POST['update_regi_number'];
        $update_f_name = $_POST['update_f_name'];
        $update_m_name = $_POST['update_m_name'];
        $update_phone = $_POST['update_phone'];
        $update_email = $_POST['update_email'];

        $u_pse_mn = $_POST['u_pse_mn'];
        $u_pse_pn = $_POST['u_pse_pn'];
        $u_pse_cn = $_POST['u_pse_cn'];

        $u_mi_mn = $_POST['u_mi_mn'];
        $u_mi_pn = $_POST['u_mi_pn'];
        $u_mi_cn = $_POST['u_mi_cn'];

        $u_ma_mn = $_POST['u_ma_mn'];
        $u_ma_pn = $_POST['u_ma_pn'];
        $u_ma_cn = $_POST['u_ma_cn'];

        $u_db_mn = $_POST['u_db_mn'];
        $u_db_pn = $_POST['u_db_pn'];
        $u_db_cn = $_POST['u_db_cn'];

        $u_wm_mn = $_POST['u_wm_mn'];
        $u_wm_pn = $_POST['u_wm_pn'];
        $u_wm_cn = $_POST['u_wm_cn'];

        $u_es_mn = $_POST['u_es_mn'];
        $u_es_pn = $_POST['u_es_pn'];
        $u_es_cn = $_POST['u_es_cn'];

        $u_im_mn = $_POST['u_im_mn'];
        $u_im_pn = $_POST['u_im_pn'];
        $u_im_cn = $_POST['u_im_cn'];


        $update_student_query = "UPDATE `semester_6th_data` SET name='$update_name', roll ='$update_roll', regi ='$update_regi',f_name ='$update_f_name', m_name ='$update_m_name', phone='$update_phone', email ='$update_email', pse_mn ='$u_pse_mn', pse_pn ='$u_pse_pn', pse_cn ='$u_pse_cn', mi_mn ='$u_mi_mn', mi_pn ='$u_mi_pn', mi_cn ='$u_mi_cn', ma_mn ='$u_ma_mn', ma_pn ='$u_ma_pn', ma_cn ='$u_ma_cn', db_mn ='$u_db_mn', db_pn ='$u_db_pn', db_cn ='$u_db_cn', wm_mn ='$u_wm_mn', wm_pn ='$u_wm_pn', wm_cn ='$u_wm_cn', es_mn ='$u_es_mn', es_pn ='$u_es_pn', es_cn ='$u_es_cn', im_mn ='$u_im_mn', im_pn ='$u_im_pn', im_cn ='$u_im_cn' WHERE roll = '$student_info'";


        if(mysqli_query($conn, $update_student_query)){
            echo "<script> alert('Update Successfull') </script>";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['name'] ?></title>

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- local css -->
    <link rel="stylesheet" href="./css/view_result.css">
</head>
<body class="bg-secondary">
    <div class="form_page p-3 rounded">
        <form class="rounded p-3" action="" method="POST">
            <h1>Basic Info</h1>
            <div class="row my-3">
                <div class="col">
                    <h4>Student Name: </h4>
                    <input type="text" class="form-control" name="update_student_name" value="<?php echo $row['name'] ?>">
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <h4>Student Board Roll: </h4>
                    <input type="text" class="form-control" name="update_board_roll" value="<?php echo $row['roll'] ?>">
                </div>
                    <div class="col">
                        <h4>Student Registration No: </h4>
                    <input type="text" class="form-control" name="update_regi_number" value="<?php echo $row['regi'] ?>">
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <h4>Father's Name:</h4>
                    <input type="text" class="form-control" name="update_f_name" value="<?php echo $row['f_name'] ?>">
                </div>
                <div class="col">
                    <h4>Mother's Name:</h4>
                    <input type="text" class="form-control" name="update_m_name" value="<?php echo $row['m_name'] ?>">
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <h4>Phone:</h4>
                    <input type="text" class="form-control" name="update_phone" value="<?php echo $row['phone'] ?>">
                </div>
                <div class="col">
                    <h4>Email:</h4>
                    <input type="email" class="form-control" name="update_email" value="<?php echo $row['email'] ?>">
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
                                <td><input type="number" name="u_pse_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['pse_mn'] ?>"></td>
                                <td><input type="number" name="u_pse_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['pse_pn'] ?>"></td>
                                <td><input type="number" name="u_pse_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['pse_cn'] ?>"></td>
                            </tr>

                            <tr>
                                <td>Microprocessor & Interfacing</td>
                                <td><input type="number" name="u_mi_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['mi_mn'] ?>"></td>
                                <td><input type="number" name="u_mi_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['mi_pn'] ?>"></td>
                                <td><input type="number" name="u_mi_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['mi_cn'] ?>"></td>
                            </tr>

                            <tr>
                                <td>Microcontroller Application</td>
                                <td><input type="number" name="u_ma_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['ma_mn'] ?>"></td>
                                <td><input type="number" name="u_ma_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['ma_pn'] ?>"></td>
                                <td><input type="number" name="u_ma_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['ma_cn'] ?>"></td>
                            </tr>

                            <tr>
                                <td>DBMS</td>
                                <td><input type="number" name="u_db_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['db_mn'] ?>"></td>
                                <td><input type="number" name="u_db_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['db_pn'] ?>"></td>
                                <td><input type="number" name="u_db_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['db_cn'] ?>"></td>
                            </tr>

                            <tr>
                                <td>Web Mastering</td>
                                <td><input type="number" name="u_wm_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['wm_mn'] ?>"></td>
                                <td><input type="number" name="u_wm_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['wm_pn'] ?>"></td>
                                <td><input type="number" name="u_wm_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['wm_cn'] ?>"></td>
                            </tr>

                            <tr>
                                <td>Environmental Studies</td>
                                <td><input type="number" name="u_es_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['es_mn'] ?>"></td>
                                <td><input type="number" name="u_es_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['es_pn'] ?>"></td>
                                <td><input type="number" name="u_es_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['es_cn'] ?>"></td>
                            </tr>


                            <tr>
                                <td>Industrial Management</td>
                                <td><input type="number" name="u_im_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['im_mn'] ?>"></td>
                                <td><input type="number" name="u_im_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['im_pn'] ?>"></td>
                                <td><input type="number" name="u_im_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['im_cn'] ?>"></td>
                            </tr>
                        </tbody>
                </table>
            </div>
            <!-- <input class="btn btn-warning" name="update" type="submit" value="Update"> -->
            <button type="submit" class="btn btn-warning" name="update"><i class="fa-solid fa-rotate"></i> Update</button>
            <a class="btn btn-danger" href="./view_result_admin.php?logout=<?php echo $student_info ?>"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </form>
    </div>
    
    <!-- boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>