<?php

    include './configuration/connection.php';
    session_start();

    // show student info
    $student_info = $_SESSION['search_student'];

    $view_info_query = "SELECT * FROM `semester_6th_data` WHERE roll = '$student_info'";

    $view_info = mysqli_query($conn, $view_info_query);

    if(mysqli_num_rows($view_info) > 0){
        $row = mysqli_fetch_assoc($view_info);
    }

    // logout from page
    if(isset($_GET['logout'])){
        session_destroy();
        unset($student_info);
        header("location:index.php");
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
                    <input type="text" class="form-control" name="student_name" placeholder="Enter Student Name" value="<?php echo $row['name'] ?>" readonly>
                </div>
            </div>
            <div class="row my-3">
                <div class="col">
                    <input type="text" class="form-control" name="board_roll" placeholder="Enter Student Board Roll:" value="<?php echo $row['roll'] ?>" readonly>
                </div>
                    <div class="col">
                    <input type="text" class="form-control" name="regi_number" placeholder="Enter Student Registration No:" value="<?php echo $row['regi'] ?>" readonly>
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <input type="text" class="form-control" name="f_name" placeholder="Father's Name: " value="<?php echo $row['f_name'] ?>" readonly>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="m_name" placeholder="Mother's Name: " value="<?php echo $row['m_name'] ?>" readonly>
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number: " value="<?php echo $row['phone'] ?>" readonly>
                </div>
                <div class="col">
                    <input type="email" class="form-control" name="email" placeholder="Email: " value="<?php echo $row['email'] ?>" readonly>
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
                                <td><input type="number" name="pse_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['pse_mn'] ?>" readonly></td>
                                <td><input type="number" name="pse_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['pse_pn'] ?>" readonly></td>
                                <td><input type="number" name="pse_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['pse_cn'] ?>" readonly></td>
                            </tr>

                            <tr>
                                <td>Microprocessor & Interfacing</td>
                                <td><input type="number" name="mi_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['mi_mn'] ?>" readonly></td>
                                <td><input type="number" name="mi_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['mi_pn'] ?>" readonly></td>
                                <td><input type="number" name="mi_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['mi_cn'] ?>" readonly></td>
                            </tr>

                            <tr>
                                <td>Microcontroller Application</td>
                                <td><input type="number" name="ma_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['ma_mn'] ?>" readonly></td>
                                <td><input type="number" name="ma_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['ma_pn'] ?>" readonly></td>
                                <td><input type="number" name="ma_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['ma_cn'] ?>" readonly></td>
                            </tr>

                            <tr>
                                <td>DBMS</td>
                                <td><input type="number" name="db_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['db_mn'] ?>" readonly></td>
                                <td><input type="number" name="db_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['db_pn'] ?>" readonly></td>
                                <td><input type="number" name="db_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['db_cn'] ?>" readonly></td>
                            </tr>

                            <tr>
                                <td>Web Mastering</td>
                                <td><input type="number" name="wm_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['wm_mn'] ?>" readonly></td>
                                <td><input type="number" name="wm_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['wm_pn'] ?>" readonly></td>
                                <td><input type="number" name="wm_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['wm_cn'] ?>" readonly></td>
                            </tr>

                            <tr>
                                <td>Environmental Studies</td>
                                <td><input type="number" name="es_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['es_mn'] ?>" readonly></td>
                                <td><input type="number" name="es_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['es_pn'] ?>" readonly></td>
                                <td><input type="number" name="es_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['es_cn'] ?>" readonly></td>
                            </tr>


                            <tr>
                                <td>Industrial Management</td>
                                <td><input type="number" name="im_mn" class="form-control" placeholder="Midtarm Number: " value="<?php echo $row['im_mn'] ?>" readonly></td>
                                <td><input type="number" name="im_pn" class="form-control" placeholder="Practical Number " value="<?php echo $row['im_pn'] ?>" readonly></td>
                                <td><input type="number" name="im_cn" class="form-control" placeholder="Contineous Assessment Number " value="<?php echo $row['im_cn'] ?>" readonly></td>
                            </tr>
                        </tbody>
                </table>
            </div>
            <a class="btn btn-danger" href="view_result_student.php?logout=<?php echo $student_info ?>"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </form>
    </div>
    
    <!-- boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>