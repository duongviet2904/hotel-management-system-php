<?php include('../../config.php')?>
<?php 
    ob_start();
    // if(!isset($_SESSION["acc_id"]))
    //     header("location: ../login.php");

    if (isset($_GET['id'])) {
        $cus_id = $_GET['id'];
        $sql = "SELECT * FROM Customer c inner join Account a on c.acc_id = a.acc_id WHERE cus_id = $cus_id";
        $query = mysqli_query($conn, $sql);
    
        $result = array();
    
        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
            $result = $row;
        }
    } else {
        $cus_id = '';
    }
    
?>

<?php session_start(); ?> 
<!doctype html>
<html lang="en">

<head>
    <title>Regular Tables - Tables are the backbone of almost all web applications.</title>
    <?php include('../common/head-link.php'); ?>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php include('../common/header.php'); ?>
        <?php include('../common/setting.php'); ?>
        <div class="app-main">
                <?php $page = 'add-customer'; include('../common/menu.php'); ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                                <div class="col-lg-12">
                                <div class="tab-content">
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Chỉnh sửa thông tin khách hàng</h5>
                                            <form class="" action="" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_fname" class="">Họ đệm</label><input name="cus_fname" id="exampleEmail11" placeholder="with a placeholder" type="text" class="form-control" value="<?php if ($cus_id) echo $result['cus_fname']; ?>"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_lname" class="">Tên</label><input name="cus_lname" id="examplePassword11" placeholder="password placeholder" type="text"
                                                                                                                                                                class="form-control" value="<?php if ($cus_id) echo $result['cus_lname']; ?>"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="acc_username" class="">Tên đăng nhập</label><input name="acc_username" id="exampleZip" type="text" class="form-control" value="<?php if ($cus_id) echo $result['acc_username']; ?>" readonly></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="acc_password" class="">Mật khẩu</label><input name="acc_password" id="exampleZip" type="text" class="form-control" value="<?php if ($cus_id) echo $result['acc_password']; ?>"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_birthday" class="">Ngày sinh</label><input name="cus_birthday" id="exampleEmail11" placeholder="with a placeholder" type="date" class="form-control" value="<?php if ($cus_id) echo date("Y-m-d", strtotime($result['cus_birthday'])); ?>"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_gender" class="">Giới tính</label>
                                                        <select class="mb-2 form-control" name="cus_gender" >
                                                            <option value="male" <?php if ($cus_id && $result['cus_gender'] == 'male') echo  'default';?>>Male</option>
                                                            <option value="female" <?php if ($cus_id && $result['cus_gender'] == 'female') echo  'default';?>>Female</option>
                                                            <option value="other" <?php if ($cus_id && $result['cus_gender'] == 'other') echo  'default';?>>Other</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_phoneNumber" class="">Phone number</label><input name="cus_phoneNumber" id="exampleCity" type="text" class="form-control" value="<?php if ($cus_id) echo $result['cus_phone']; ?>"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_email" class="">Email</label><input name="cus_email" id="exampleState" type="email" class="form-control" value="<?php if ($cus_id) echo $result['cus_email']; ?>"></div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="position-relative form-group"><label for="exampleAddress" class="">Địa chỉ</label><input name="cus_address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control" value="<?php if ($cus_id) echo $result['cus_address']; ?>"></div>
                                                
                                                <?php 
                                                    if (isset($_SESSION['username'])) {
                                                        $user_name = $_SESSION['username'];
                                                        $sql2 = "SELECT * FROM Customer c inner join Account a on c.acc_id = a.acc_id WHERE acc_username = '$user_name'";
                                                        $query2 = mysqli_query($conn, $sql2);
                                                    
                                                        $result2 = array();
                                                        $active = 0;
                                                        if (mysqli_num_rows($query2) > 0) {
                                                            $row2 = mysqli_fetch_assoc($query2);
                                                            $result2 = $row2;
                                                        }
                                                        if($row2['role_name'] == 'ADMIN'){
                                                            echo '<div class="form-row">
                                                                    <div class="col-md-12">
                                                                        <div class="position-relative form-group"><label for="role_name" class="">Vai trò</label>
                                                                        <select class="mb-2 form-control" name="role_name" >
                                                                            <option value="ADMIN">Admin</option>
                                                                            <option value="GUESS">Guess</option>
                                                                            <option value="CASHIER">Cashier</option>
                                                                        </select>
                                                                        </div>
                                                                    </div>
                                                                </div>';
                                                                $active = 1;
                                                        }
                                                    } 
                                                ?>
                                                
                                                <button class="mt-2 btn btn-primary" type="submit">Update</button>
                                            </form>

                                            <?php

                                                 if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                                        // $token = md5(time());
                                                        // $cust_datetime = date('Y-m-d h:i:s');
                                                        // $cust_timestamp = time();

                                                        $fname = $_POST['cus_fname'];
                                                        $lname = $_POST['cus_lname'];
                                                        $phpdate = strtotime( $_POST['cus_birthday']);
                                                        $cus_dateOfBirth = date('Y-m-d h:i:s', $phpdate);
                                                        $cus_gender = $_POST['cus_gender'];
                                                        $cus_phoneNumber = $_POST['cus_phoneNumber'];
                                                        $cus_email = $_POST['cus_email'];
                                                        $cus_address = $_POST['cus_address'];
                                                        $cus_username = $_POST['acc_username'];

                                                        $pass = $_POST['acc_password'];
                                                        if($active == 1){
                                                            $sql3 = "update Account set acc_password = '$pass', role_name = '".$_POST['role_name']."' where acc_id = ".$result['acc_id'].";";
                                                        }else{
                                                            $sql3 = "update Account set acc_password = '$pass' where acc_id = ".$result['acc_id'].";";
                                                        }
                                                        // mysqli_query($conn, $sql);
                                                        $sql3 .= "update Customer set cus_fname='$fname', cus_lname='$lname', cus_birthday = '$cus_dateOfBirth', 
                                                            cus_gender = '$cus_gender', cus_phone = '$cus_phoneNumber', cus_email = '$cus_email', cus_address = '$cus_address'
                                                            where cus_id = ".$result['cus_id'].";";
                                                        // mysqli_query($conn, $sql2);

                                                        // var_dump($sql3);
                                                        // die();
                                                        mysqli_multi_query($conn, $sql3);
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