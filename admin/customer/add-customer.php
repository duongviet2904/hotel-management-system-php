<?php include('../../config.php')?>
<?php 
    ob_start();
    // if(!isset($_SESSION["acc_id"]))
    //     header("location: ../login.php");
?>

<?php session_start(); ?> 
<!doctype html>
<html lang="en">

<head>
    <title>Admin| Add Customer</title>
    <?php include('../common/head-link.php'); ?>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <?php //include('../common/setting.php'); ?>
        <div class="app-main">
                <?php $page = 'add-customer'; include('../common/menu.php'); ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                                <div class="col-lg-12">
                                <div class="tab-content">
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Thêm khách hàng</h5>
                                            <form class="" action="" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_fname" class="">Họ đệm</label><input name="cus_fname" id="exampleEmail11" placeholder="with a placeholder" type="text" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_lname" class="">Tên</label><input name="cus_lname" id="examplePassword11" placeholder="password placeholder" type="text"
                                                                                                                                                                class="form-control"></div>
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
                                                        <div class="position-relative form-group"><label for="cus_birthday" class="">Ngày sinh</label><input name="cus_birthday" id="exampleEmail11" placeholder="with a placeholder" type="date" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_gender" class="">Giới tính</label>
                                                        <select class="mb-2 form-control" name="cus_gender">
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_phoneNumber" class="">Phone number</label><input name="cus_phoneNumber" id="exampleCity" type="text" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_email" class="">Email</label><input name="cus_email" id="exampleState" type="email" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="position-relative form-group"><label for="exampleAddress" class="">Địa chỉ</label><input name="cus_address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
                                                </div>
                                                
                                                <button class="mt-2 btn btn-primary" type="submit">Add</button>
                                            </form>

                                            <?php

                                                 if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                                        // $token = md5(time());
                                                        // $cust_datetime = date('Y-m-d h:i:s');
                                                        // $cust_timestamp = time();

                                                        $fname = $_POST['cus_fname'];
                                                        $lname = $_POST['cus_lname'];
                                                        $phpdate = strtotime( $_POST['cus_birthday']);
                                                        $cus_dataOfBirth = date('Y-m-d h:i:s', $phpdate);
                                                        $cus_gender = $_POST['cus_gender'];
                                                        $cus_phoneNumber = $_POST['cus_phoneNumber'];
                                                        $cus_email = $_POST['cus_email'];
                                                        $cus_address = $_POST['cus_address'];
                                                        $cus_username = $_POST['acc_username'];

                                                        $pass = $_POST['cus_password'];
                                                        $sql = "INSERT INTO Account (
                                                                                        acc_username,
                                                                                        acc_password,
                                                                                        role_name
                                                                                    ) VALUES ('$cus_username', '$pass', 'GUESS');";

                                                        // mysqli_query($conn, $sql);
                                                        // $result = mysqli_query($conn, 'select acc_id from Account where acc_username = "$cus_username"');
                                                        $sql .= "set @accid = (select acc_id from Account where acc_username = '$cus_username');";
                                                        $sql .= "INSERT INTO Customer (
                                                                                        cus_fname,
                                                                                        cus_lname,
                                                                                        cus_birthday,
                                                                                        cus_gender,
                                                                                        cus_phone,
                                                                                        cus_email,
                                                                                        cus_address,
                                                                                        status,
                                                                                        acc_id
                                                                                    ) VALUES ('$fname', '$lname', '$cus_dataOfBirth', '$cus_gender', '$cus_phoneNumber', '$cus_email', '$cus_address',1,@accid)";

                                                        // mysqli_query($conn, $sql2);
                                                        mysqli_multi_query($conn, $sql);
                                                        // unset($_POST['cust_name']);
                                                        // unset($_POST['cust_cname']);
                                                        // unset($_POST['cust_email']);
                                                        // unset($_POST['cust_phone']);
                                                        // unset($_POST['cust_address']);
                                                        // unset($_POST['cust_city']);
                                                        // unset($_POST['cust_state']);
                                                        // unset($_POST['cust_zip']);
                                                        // $success_message = LANG_VALUE_152;
                                                        header('Location:customer-management.php');
                                                    
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
<script type="text/javascript" src="../assets/scripts/main.js"></script></body>
</html>

<?php ob_end_flush(); ?>