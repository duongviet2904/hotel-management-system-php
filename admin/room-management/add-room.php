<?php include('../../config.php') ?>
<?php
ob_start();

if (isset($_GET['id'])) {
    $room_id = $_GET['id'];
    $sql = "SELECT * FROM Room r inner join Room_Class rc
                on r.room_class_id = rc.room_class_id 
                where room_id = $room_id";
    $query = mysqli_query($conn, $sql);

    $result = array();

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    } else {
        $room_id = '';
    }
}
?>

<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <title>Admin| Add room</title>
    <?php include('../common/head-link.php'); ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <?php //include('../common/setting.php'); ?>
        <div class="app-main">
            <?php $page = 'add-room';
            include('../common/menu.php'); ?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body">
                                            <h5 class="card-title">Thêm phòng</h5>
                                            <form class="" action="" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <label for="room-name" class="">Tên phòng</label>
                                                            <input name="room_name" id="exampleEmail11" placeholder="name placeholder" 
                                                            type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <label for="room_description" class="">Mô tả phòng</label>
                                                            <input name="room_description" id="examplePassword11" placeholder="description placeholder" 
                                                            type="text" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group">
                                                            <label for="room_child_num" class="">Số lượng trẻ em</label>
                                                            <input name="room_child_num" id="examplePassword11" placeholder="child number placeholder" 
                                                            type="text" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group">
                                                            <label for="room_adult_num" class="">Số lượng người lớn</label>
                                                            <input name="room_adult_num" id="examplePassword11" placeholder="adult number placeholder" 
                                                            type="text" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <label for="room_price" class="">Giá phòng</label>
                                                            <input name="room_price" id="examplePassword11" placeholder="place placeholder" 
                                                            type="text" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <label for="room_image" class="">Hình ảnh phòng</label>
                                                            <input name="room_image" id="examplePassword11" placeholder="room image placeholder" 
                                                            type="text" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group">
                                                            <label for="room_status" class="">Trạng thái</label>
                                                            <input name="room_status" id="examplePassword11" placeholder="status placeholder" 
                                                            type="text" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <label for="room_class_name" class="">Loại phòng</label><br>
                                                        <!-- <div class="position-relative form-group"><input name="room_class_id" id="examplePassword11" placeholder="description placeholder" type="text"> -->
                                                        <?php
                                                        $sql = "SELECT * FROM Room_Class";
                                                        $query = mysqli_query($conn, $sql);
                                                        $i = 0;
                                                        if ($query) {
                                                            echo "<select class=\"col-md-6\" name = \"room_class\">";
                                                            foreach ($query as $item) {
                                                                $i++;
                                                                $rc_name = $item['room_class_name'];
                                                                $rc_id = $item['room_class_id'];
                                                                if($item['status'] != 0){
                                                                    echo "<option value =\"$rc_id\">" . $rc_name . "</option>";
                                                                }
                                                            }
                                                            echo '</select>';
                                                        }
                                                        ?>

                                                    </div>
                                                </div>
                                        </div>
                                        
                                        <button class="mt-2 btn btn-primary" type="submit">Add</button>
                                        </form>

                                        <?php

                                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                            // $token = md5(time());
                                            // $cust_datetime = date('Y-m-d h:i:s');
                                            // $cust_timestamp = time();

                                            $room_name = $_POST['room_name'];
                                            // var_dump($rc_name);
                                            // die();
                                            $room_image = $_POST['room_image'];
                                            $room_description = $_POST['room_description'];
                                            $room_child_num = $_POST['room_child_num'];
                                            $room_adult_num = $_POST['room_adult_num'];
                                            $room_price = $_POST['room_price'];
                                            $room_image = $_POST['room_image'];
                                            $room_class_id = $_POST['room_class'];
                                            $room_status = $_POST['room_status'];

                                            // $pass = $_POST['acc_password'];
                                            // if($active == 1){
                                            //     $sql3 = "update Account set acc_password = '$pass', role_name = '".$_POST['role_name']."' where acc_id = ".$result['acc_id'].";";
                                            // }else{
                                            //     $sql3 = "update Account set acc_password = '$pass' where acc_id = ".$result['acc_id'].";";
                                            // }
                                            // mysqli_query($conn, $sql);
                                            $sql = "INSERT INTO Room (
                                                                        room_name,
                                                                        room_description,
                                                                        room_child_num,
                                                                        room_adult_num,
                                                                        room_price,
                                                                        room_class_image,
                                                                        status,
                                                                        room_class_id
                                                                    ) VALUES ('$room_name','$room_description',$room_child_num,$room_adult_num,
                                                                    $room_price,'$room_image',$room_status,$room_class_id);";
                                            // var_dump($sql);
                                            // die();
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
                                            header('Location: room-management.php');
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

<?php ob_end_flush(); ?>