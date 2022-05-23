<?php include('../../config.php') ?>
<?php
ob_start();
// if(!isset($_SESSION["acc_id"]))
//     header("location: ../login.php");
?>

<?php session_start();
if (isset($_SESSION['username'])) {
    
    $sql1 = 'select role_name from Account where acc_username = "' . $_SESSION['username'] . '";';
    $result = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['role_name'] != 'ADMIN') {
                header('Location: employee-management.php');
            }
        }
    } 
} else {
    header('Location: ../../login.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Admin| Add employee</title>
    <?php include('../common/head-link.php'); ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <!-- <?php include('../common/setting.php'); ?> -->
        <div class="app-main">
            <?php $page = 'add-employee';
            include('../common/menu.php'); ?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">Thêm nhân viên</h5>
                                            <form class="" action="" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="em_fname" class="">Họ đệm</label><input name="em_fname" id="exampleEmail11" placeholder="with a placeholder" type="text" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="em_lname" class="">Tên</label><input name="em_lname" id="examplePassword11" placeholder="password placeholder" type="text" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="acc_username" class="">Tên đăng nhập</label><input name="acc_username" id="exampleZip" type="text" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="acc_password" class="">Mật khẩu</label><input name="acc_password" id="exampleZip" type="text" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="em_birthday" class="">Ngày sinh</label><input name="em_birthday" id="exampleEmail11" placeholder="with a placeholder" type="date" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="em_gender" class="">Giới tính</label>
                                                            <select class="mb-2 form-control" name="em_gender">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="em_phoneNumber" class="">Phone number</label><input name="em_phoneNumber" id="exampleCity" type="text" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="em_email" class="">Email</label><input name="em_email" id="exampleState" type="email" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="position-relative form-group"><label for="exampleAddress" class="">Địa chỉ</label><input name="em_address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="role_name" class="">Vai trò</label>
                                                            <select class="mb-2 form-control" name="role_name">
                                                                <option value="ADMIN">Admin</option>
                                                                <option value="CASHIER">Cashier</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>    
                                            </div>
                                                
                                        <button class="mt-2 btn btn-primary" type="submit">Add</button>
                                        </form>

                                        <?php

                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                            // $token = md5(time());
                                            // $emt_datetime = date('Y-m-d h:i:s');
                                            // $emt_timestamp = time();

                                            $fname = $_POST['em_fname'];
                                            $lname = $_POST['em_lname'];
                                            $phpdate = strtotime($_POST['em_birthday']);
                                            $em_dataOfBirth = date('Y-m-d h:i:s', $phpdate);
                                            $em_gender = $_POST['em_gender'];
                                            $em_phoneNumber = $_POST['em_phoneNumber'];
                                            $em_email = $_POST['em_email'];
                                            $em_address = $_POST['em_address'];
                                            $em_username = $_POST['acc_username'];
                                            $role_name = $_POST['role_name'];
                                            $pass = $_POST['acc_password'];
                                            $sql = "INSERT INTO Account (
                                                                                        acc_username,
                                                                                        acc_password,
                                                                                        role_name
                                                                                    ) VALUES ('$em_username', '$pass', '$role_name');";

                                            // mysqli_query($conn, $sql);
                                            // $result = mysqli_query($conn, 'select acc_id from Account where acc_username = "$em_username"');
                                            $sql .= "set @accid = (select acc_id from Account where acc_username = '$em_username');";
                                            $sql .= "INSERT INTO Employee (
                                                                                        em_fname,
                                                                                        em_lname,
                                                                                        em_birthday,
                                                                                        em_gender,
                                                                                        em_phone,
                                                                                        em_email,
                                                                                        em_address,
                                                                                        status,
                                                                                        acc_id
                                                                                    ) VALUES ('$fname', '$lname', '$em_dataOfBirth', '$em_gender', '$em_phoneNumber', '$em_email', '$em_address',1,@accid)";

                                                // var_dump($sql); die();
                                            // mysqli_query($conn, $sql2);
                                            mysqli_multi_query($conn, $sql);
                                            // unset($_POST['emt_name']);
                                            // unset($_POST['emt_cname']);
                                            // unset($_POST['emt_email']);
                                            // unset($_POST['emt_phone']);
                                            // unset($_POST['emt_address']);
                                            // unset($_POST['emt_city']);
                                            // unset($_POST['emt_state']);
                                            // unset($_POST['emt_zip']);
                                            // $success_message = LANG_VALUE_152;
                                            header('Location:employee-management.php');
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../assets/scripts/main.js"></script>
</body>

</html>
