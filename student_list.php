<?php

    include './configuration/connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <table class="table table-primary table-hover">
            <thead>
                <tr class="fw-bold">
                    <td>Roll</td>
                    <td>Name</td>
                    <td>Regi No</td>
                    <td>Father's Name</td>
                    <td>Mother's Name</td>
                    <td>Phone</td>
                    <td>Email</td>
                </tr>
            </thead>

            <tbody>
                <?php

                    $show_student_list = "SELECT * FROM `semester_6th_data`";
                    $run_query = mysqli_query($conn, $show_student_list);
                    if(mysqli_num_rows($run_query) > 0){
                        while($row = mysqli_fetch_assoc($run_query)){
                            ?>
                                <tr>
                                    <td><?php echo $row['roll'] ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['regi'] ?></td>
                                    <td><?php echo $row['f_name'] ?></td>
                                    <td><?php echo $row['m_name'] ?></td>
                                    <td><?php echo $row['phone'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                </tr>
                            <?php
                        }
                    }else{
                        echo "NO DATA FOUND";
                    }

                ?>

            </tbody>
        </table>
    </div>
    <!-- boostrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>