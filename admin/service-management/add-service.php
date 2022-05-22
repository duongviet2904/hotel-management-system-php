<?php include('../../config.php')?>
<?php 
    ob_start();
    // if(!isset($_SESSION["acc_id"]))
    //     header("location: ../login.php");
?>
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
                <?php $page = 'add-room-class'; include('../common/menu.php'); ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                                <div class="col-lg-12">
                                <div class="tab-content">
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Thêm dịch vụ</h5>
                                            <form class="" action="" method="POST">
                                            <div class="col-md-12">
                                                    <div class="position-relative form-group"><label for="cus_fname" class="">Tên dịch vụ</label><input name="ser_name" id="exampleEmail11" placeholder="name placeholder" type="text" 
                                                                                                                                                            class="form-control" ></div>
                                                </div>
                                                
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><label for="cus_lname" class="">Mô tả</label><input name="ser_description" id="examplePassword11" placeholder="description placeholder" type="text"
                                                                                                                                                        class="form-control" ></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><label for="cus_lname" class="">Giá </label><input name="ser_price" id="examplePassword11" placeholder="price placeholder" type="text"
                                                                                                                                                        class="form-control" ></div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><label for="cus_lname" class="">Hình ảnh </label><input name="ser_image" id="examplePassword11" placeholder="image placeholder" type="text"
                                                                                                                                                        class="form-control" ></div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="position-relative form-group"><label for="cus_lname" class="">Trạng thái</label><input name="ser_status" id="examplePassword11" placeholder="status placeholder" type="text"
                                                                                                                                                        class="form-control" ></div>
                                            </div>
                                                <button class="mt-2 btn btn-primary" type="submit">Add</button>
                                            </form>

                                            <?php
                                                if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                                        // $token = md5(time());
                                                        // $cust_datetime = date('Y-m-d h:i:s');
                                                        // $cust_timestamp = time();

                                                        $ser_name = $_POST['ser_name'];
                                                        $ser_desciption = $_POST['ser_description'];
                                                        $ser_price = $_POST['ser_price'];
                                                        $ser_image = $_POST['ser_image'];
                                                        $ser_status = $_POST['ser_status'];
                                                        

                                                        
                                                        $sql = "INSERT INTO service (
                                                                                        service_name,
                                                                                        room_description,
                                                                                        service_image,
                                                                                        service_price,
                                                                                        status
                                                                                    ) VALUES ('$ser_name', '$ser_desciption','$ser_image',$ser_price, $ser_status);";

                                                        // mysqli_query($conn, $sql);
                                                        // $result = mysqli_query($conn, 'select acc_id from Account where acc_username = "$cus_username"');
                                                        // var_dump($sql);
                                                        // die();
                                                        // mysqli_query($conn, $sql2);
                                                        mysqli_query($conn, $sql);
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