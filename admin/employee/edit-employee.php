<?php include('../../config.php')?>
<?php 
    ob_start();
    session_start(); 
    // if(!isset($_SESSION["acc_id"]))
    //     header("location: ../login.php");
    if (isset($_SESSION['username'])) {
    
        $sql1 = 'select role_name from Account where acc_username = "' . $_SESSION['username'] . '";';
        $result1 = mysqli_query($conn, $sql1);
        if (mysqli_num_rows($result1) > 0) {
            // output data of each row
            while ($row1 = mysqli_fetch_assoc($result1)) {
                if ($row1['role_name'] != 'ADMIN') {
                    header('Location: employee-management.php');
                }
            }
        } 
    } else {
        header('Location: ../../login.php');
    }
    if (isset($_GET['id'])) {
        $em_id = $_GET['id'];
        $sql = "SELECT * FROM Employee c inner join Account a on c.acc_id = a.acc_id WHERE em_id = $em_id";
        $query = mysqli_query($conn, $sql);
    
        $result = array();
    
        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
            $result = $row;
        }
    } else {
        $em_id = '';
    }
    
?>

<!doctype html>
<html lang="en">

<head>
    <title>Admin| Edit employee</title>
    <?php include('../common/head-link.php'); ?>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <?php // include('../common/setting.php'); ?>
        <div class="app-main">
                <?php $page = 'employee-management'; include('../common/menu.php'); ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                                <div class="col-lg-12">
                                <div class="tab-content">
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Chỉnh sửa thông tin nhân viên</h5>
                                            <form class="" action="" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="em_fname" class="">Họ đệm</label><input name="em_fname" id="exampleEmail11" placeholder="with a placeholder" type="text" class="form-control" value="<?php if ($em_id) echo $result['em_fname']; ?>"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="em_lname" class="">Tên</label><input name="em_lname" id="examplePassword11" placeholder="password placeholder" type="text"
                                                                                                                                                                class="form-control" value="<?php if ($em_id) echo $result['em_lname']; ?>"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="acc_username" class="">Tên đăng nhập</label><input name="acc_username" id="exampleZip" type="text" class="form-control" value="<?php if ($em_id) echo $result['acc_username']; ?>" readonly></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="acc_password" class="">Mật khẩu</label><input name="acc_password" id="exampleZip" type="text" class="form-control" value="<?php if ($em_id) echo $result['acc_password']; ?>"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="em_birthday" class="">Ngày sinh</label><input name="em_birthday" id="exampleEmail11" placeholder="with a placeholder" type="date" class="form-control" value="<?php if ($em_id) echo date("Y-m-d", strtotime($result['em_birthday'])); ?>"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="em_gender" class="">Giới tính</label>
                                                        <select class="mb-2 form-control" name="em_gender" >
                                                            <option value="male" <?php if ($em_id && $result['em_gender'] == 'male') echo  'selected';?>>Male</option>
                                                            <option value="female" <?php if ($em_id && $result['em_gender'] == 'female') echo  'selected';?>>Female</option>
                                                            <option value="other" <?php if ($em_id && $result['em_gender'] == 'other') echo  'selected';?>>Other</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="em_phoneNumber" class="">Phone number</label><input name="em_phoneNumber" id="exampleCity" type="text" class="form-control" value="<?php if ($em_id) echo $result['em_phone']; ?>"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="em_email" class="">Email</label><input name="em_email" id="exampleState" type="email" class="form-control" value="<?php if ($em_id) echo $result['em_email']; ?>"></div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="position-relative form-group"><label for="exampleAddress" class="">Địa chỉ</label><input name="em_address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control" value="<?php if ($em_id) echo $result['em_address']; ?>"></div>
                                                <div class="form-row">
                                                                    <div class="col-md-12">
                                                                        <div class="position-relative form-group"><label for="role_name" class="">Vai trò</label>
                                                                        <select class="mb-2 form-control" name="role_name" >
                                                                            <option value="ADMIN" <?php if($em_id && $result['role_name'] == 'ADMIN') echo 'selected' ?>>Admin</option>
                                                                            <option value="CASHIER" <?php if($em_id && $result['role_name'] == 'CASHIER') echo 'selected' ?>>Cashier</option>
                                                                        </select>
                                                                        </div>
                                                                    </div>
                                                                </div></div>
                                                <button class="mt-2 btn btn-primary" type="submit">Update</button>
                                            </form>

                                            <?php

                                                 if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                                        // $token = md5(time());
                                                        // $emt_datetime = date('Y-m-d h:i:s');
                                                        // $emt_timestamp = time();

                                                        $fname = $_POST['em_fname'];
                                                        $lname = $_POST['em_lname'];
                                                        $phpdate = strtotime( $_POST['em_birthday']);
                                                        $em_dateOfBirth = date('Y-m-d h:i:s', $phpdate);
                                                        $em_gender = $_POST['em_gender'];
                                                        $em_phoneNumber = $_POST['em_phoneNumber'];
                                                        $em_email = $_POST['em_email'];
                                                        $em_address = $_POST['em_address'];
                                                        $em_username = $_POST['acc_username'];
                                                        $role_name = $_POST['role_name'];
                                                        $pass = $_POST['acc_password'];
                                                        $sql3 = "update Account set acc_password = '$pass', role_name = '".$_POST['role_name']."' where acc_id = ".$result['acc_id'].";";
                                                        
                                                        // mysqli_query($conn, $sql);
                                                        $sql3 .= "update Employee set em_fname='$fname', em_lname='$lname', em_birthday = '$em_dateOfBirth', 
                                                            em_gender = '$em_gender', em_phone = '$em_phoneNumber', em_email = '$em_email', em_address = '$em_address'
                                                            where em_id = ".$result['em_id'].";";
                                                        // mysqli_query($conn, $sql2);

                                                        // var_dump($sql3);
                                                        // die();
                                                        mysqli_multi_query($conn, $sql3);
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
<script type="text/javascript" src="../assets/scripts/main.js"></script></body>
</html>
