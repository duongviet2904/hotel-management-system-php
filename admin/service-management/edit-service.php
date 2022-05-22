<?php include('../../config.php')?>
<?php 
    ob_start();

    if(isset($_GET['id'])){
        $ser_id = $_GET['id'];
        $sql = "SELECT * FROM service where service_id = $ser_id";
        $query = mysqli_query($conn, $sql);

        $result = array();
        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);
            $result = $row;
        }
    } else{
        $ser_id = '';
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
                <?php $page = 'edit-room-class'; include('../common/menu.php'); ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                                <div class="col-lg-12">
                                <div class="tab-content">
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Chỉnh sửa loại phòng</h5>
                                            <form class="" action="" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="ser_name" class="">Tên dịch vụ</label><input name="ser_name" id="exampleEmail11" placeholder="name placeholder" type="text" 
                                                                                                                                                                class="form-control" value="<?php if ($ser_id) echo $result['service_name']; ?>"></div>
                                                    </div>
                                                    
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="ser_description" class="">Mô tả</label><input name="ser_description" id="examplePassword11" placeholder="description placeholder" type="text"
                                                                                                                                                                class="form-control" value="<?php if ($ser_id) echo $result['room_description']; ?>"></div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="ser_price" class="">Giá </label><input name="ser_price" id="examplePassword11" placeholder="price placeholder" type="text"
                                                                                                                                                                class="form-control" value="<?php if ($ser_id) echo $result['service_price']; ?>"></div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="ser_image" class="">Hình ảnh </label><input name="ser_image" id="examplePassword11" placeholder="image placeholder" type="text"
                                                                                                                                                                class="form-control" value="<?php if ($ser_id) echo $result['service_image']; ?>"></div>
                                                    </div>
                                                    
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="cus_lname" class="">Trạng thái</label><input name="ser_status" id="examplePassword11" placeholder="status placeholder" type="text"
                                                                                                                                                                class="form-control" value="<?php if ($ser_id) echo $result['status']; ?>"></div>
                                                    </div>
                                                </div>
                                                
                                                
                                                <button class="mt-2 btn btn-primary" type="submit">Update</button>
                                            </form>

                                            <?php

                                                 if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                                        // $token = md5(time());
                                                        // $cust_datetime = date('Y-m-d h:i:s');
                                                        // $cust_timestamp = time();

                                                        $ser_name = $_POST['ser_name'];
                                                        // var_dump($rc_name);
                                                        // die();
                                                        $ser_description = $_POST['ser_description'];
                                                        $ser_price = $_POST['ser_price'];
                                                        $ser_image = $_POST['ser_image'];
                                                        $ser_status = $_POST['ser_status'];

                                                        // $pass = $_POST['acc_password'];
                                                        // if($active == 1){
                                                        //     $sql3 = "update Account set acc_password = '$pass', role_name = '".$_POST['role_name']."' where acc_id = ".$result['acc_id'].";";
                                                        // }else{
                                                        //     $sql3 = "update Account set acc_password = '$pass' where acc_id = ".$result['acc_id'].";";
                                                        // }
                                                        // mysqli_query($conn, $sql);
                                                        $sql3 = "update service set service_name='$ser_name', service_image='$ser_image', room_description = '$ser_description', 
                                                        status = '$ser_status', service_price = '$ser_price' where service_id = ".$ser_id.";";

                                                        // var_dump($sql3);
                                                        // die();
                                                        mysqli_query($conn, $sql3);
                                                        // unset($_POST['cust_name']);
                                                        // unset($_POST['cust_cname']);
                                                        // unset($_POST['cust_email']);
                                                        // unset($_POST['cust_phone']);
                                                        // unset($_POST['cust_address']);
                                                        // unset($_POST['cust_city']);
                                                        // unset($_POST['cust_state']);
                                                        // unset($_POST['cust_zip']);
                                                        // $success_message = LANG_VALUE_152;
                                                        header('Location: service-management.php');
                                                    
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
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>

<?php ob_end_flush(); ?>
