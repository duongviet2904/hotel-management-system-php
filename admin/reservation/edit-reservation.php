<?php include('../../config.php')?>
<?php 
    ob_start();
    session_start(); 
    if(!isset($_SESSION["username"]))
        header("location: ../../login.php");
?>

<?php 
    if(isset($_GET['re_id']) && isset($_GET['cus_id'])){
        $reid = $_GET['re_id'];
        $cus_id = $_GET['cus_id'];
        $sql3 = "SELECT re_id, re_date_in, re_date_out, create_date, Reservation.status, Customer.cus_id, cus_fname, cus_lname, cus_birthday,
        cus_gender, cus_phone, cus_email, cus_address FROM Reservation inner join Customer on Reservation.cus_id = Customer.cus_id where Reservation.re_id = '$reid'";
        //  var_dump($sql);die();
        $query3 = mysqli_query($conn, $sql3);
        $result = array();
    
        if (mysqli_num_rows($query3) > 0) {
            $row = mysqli_fetch_assoc($query3);
            $result = $row;
        }    
    }else{
        $reid = '';
        $cus_id = '';
    }

?> 
<!doctype html>
<html lang="en">

<head>
    <title>Admin|Edit Reservation</title>
    <?php include('../common/head-link.php'); ?>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <?php //include('../common/setting.php'); ?>
        <div class="app-main">
                <?php $page = 'reservation-management'; include('../common/menu.php'); ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                                <div class="col-lg-12">
                                <div class="tab-content">
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Chỉnh sửa thông tin đơn đặt phòng</h5>
                                            <form class="" action="" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_fname" class="">Họ đệm</label><input name="cus_fname" value="<?php if ($reid) echo $result['cus_fname']; ?>" id="exampleEmail11" placeholder="with a placeholder" type="text" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_lname" class="">Tên</label><input value="<?php if ($reid) echo $result['cus_lname']; ?>" name="cus_lname" id="examplePassword11" placeholder="password placeholder" type="text"
                                                                                                                                                                class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_birthday" class="">Ngày sinh</label><input value="<?php if ($reid) echo date("Y-m-d", strtotime($result['cus_birthday'])); ?>" name="cus_birthday" id="exampleEmail11" placeholder="with a placeholder" type="date" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_gender" class="">Giới tính</label>
                                                        <select class="mb-2 form-control" name="cus_gender">
                                                            <option value="male" <?php if($reid && $result['cus_gender'] == 'male') echo 'selected' ?>>Male</option>
                                                            <option value="female" <?php if($reid && $result['cus_gender'] == 'female') echo 'selected' ?>>Female</option>
                                                            <option value="other" <?php if($reid && $result['cus_gender'] == 'other') echo 'selected' ?>>Other</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_phone" class="">Phone number</label><input value="<?php if ($reid) echo $result['cus_phone']; ?>" name="cus_phone" id="exampleCity" type="text" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_email" class="">Email</label><input value="<?php if ($reid) echo $result['cus_email']; ?>" name="cus_email" id="exampleState" type="email" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="position-relative form-group"><label for="exampleAddress" class="">Địa chỉ</label><input value="<?php if ($reid) echo $result['cus_address']; ?>" name="cus_address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="re_date_in" class="">Ngày nhận phòng</label><input value="<?php if ($reid) echo date("Y-m-d", strtotime($result['re_date_in'])); ?>"  name="re_date_in" id="exampleCity" type="date" class="form-control" readonly></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="re_date_out" class="">Ngày trả phòng</label><input value="<?php if ($reid) echo date("Y-m-d", strtotime($result['re_date_out'])); ?>" name="re_date_out" id="exampleState" type="date" class="form-control" readonly></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="room_list" class="">Danh sách phòng đã chọn</label>
                                                            <?php
                                                            // if (isset($_POST['re_date_in']) && isset($_POST['re_date_out'])) {
                                                                //  $_SESSION['date_out'] = $re_date_out;
                                                                //  $_SESSION['date_in'] = $re_date_in;
                                                                $sql2 = "SELECT * FROM Room r inner join Reservation_Room rr on r.room_id = rr.room_id where rr.re_id = $reid";
                                                                // var_dump($sql2);
                                                                // die();
                                                                $result2 = mysqli_query($conn, $sql2);
                                                                if (mysqli_num_rows($result2) > 0) {
                                                                    echo '<div class="form-row">';
                                                                // output data of each row
                                                                while($row = mysqli_fetch_assoc($result2)) {
                                                                    echo '
                                                                    <div class="col-md-2" style="background-color: #82DBD8; color:white; margin-right: 10px; margin-top: 10px; padding-bottom: 10px;">
                                                                        <label for="'.$row['room_id'].'" class="">'.$row['room_name'].'</label>
                                                                        <input name="checkList[]" value="'.$row['room_id'].'" id="exampleCity myCheck" type="checkbox" class="form-control" checked> 
                                                                        
                                                                    </div>';
                                                                }
                                                                }
                                                                echo '</div>';
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="room_list" class="">Dịch vụ</label>
                                                        <?php

                                                            $sql1 = "SELECT * FROM Service ";
                                                            $result1 = mysqli_query($conn, $sql1);

                                                            if (mysqli_num_rows($result1) > 0) {
                                                                echo '<div class="form-row">';
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result1)) {
                                                                echo '
                                                                <div class="col-md-2">
                                                                    <label for="'.$row['service_id'].'" class="">'.$row['service_name'].' Price: '.$row['service_price'].'</label>
                                                                    <input name="checkList2[]" value="'.$row['service_id'].'" id="exampleCity" type="checkbox" class="form-control"';
                                                                    $sql4 = "SELECT rs.service_id FROM Service se inner join Reservation_Service rs on se.service_id = rs.service_id where rs.re_id = '$reid'";
                                                                    $result4 = mysqli_query($conn, $sql4);
                                                                    if(mysqli_num_rows($result4) > 0){
                                                                        while($forCheck = mysqli_fetch_assoc($result4)){
                                                                            if($row['service_id'] == $forCheck['service_id'])
                                                                                echo 'checked';
                                                                        }
                                                                    }
                                                                    
                                                                echo '> </div>';
                                                            }
                                                            } else {
                                                            echo "0 results";
                                                            }
                                                            echo '</div>';
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>       
                                            </div>
                                                
                                                <button class="mt-2 btn btn-primary" type="submit">Update</button>
                                            </form>
                                            
                                            <?php
                                                 if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                                        // $token = time());
                                                        $create_date = date('Y-m-d h:i:s');

                                                        $fname = $_POST['cus_fname'];
                                                        $lname = $_POST['cus_lname'];
                                                        $phpdate = strtotime( $_POST['cus_birthday']);
                                                        $cus_dateOfBirth = date('Y-m-d h:i:s', $phpdate);
                                                        $cus_gender = $_POST['cus_gender'];
                                                        $cus_phone = $_POST['cus_phone'];
                                                        $cus_email = $_POST['cus_email'];
                                                        $cus_address = $_POST['cus_address'];

                                                        $phpdatein = strtotime( $_POST['re_date_in']);
                                                        $re_date_in = date('Y-m-d h:i:s', $phpdatein);
                                                        $phpdateout = strtotime( $_POST['re_date_out']);
                                                        $re_date_out = date('Y-m-d h:i:s', $phpdateout);

                                                        // $cus_username = $_POST['acc_username'];

                                                        // $pass = $_POST['cus_password'];
                                                        // $sql = "INSERT INTO Account (
                                                        //                                 acc_username,
                                                        //                                 acc_password,
                                                        //                                 role_name
                                                        //                             ) VALUES ('$cus_username', '$pass', 'GUESS');";

                                                        // // mysqli_query($conn, $sql);
                                                        // $result = mysqli_query($conn, 'select acc_id from Account where acc_username = "$cus_username"');
                                                        // $sql .= "set @accid = (select acc_id from Account where acc_username = '$cus_username');";
                                                        
                                                        
                                                            $sql = "Update Customer set
                                                                cus_fname = '$fname',
                                                                cus_lname = '$lname',
                                                                cus_birthday = '$cus_dateOfBirth',
                                                                cus_gender = '$cus_gender',
                                                                cus_phone = '$cus_phone',
                                                                cus_email = '$cus_email',
                                                                cus_address = '$cus_address',
                                                                status = 1 where cus_id = $cus_id;";
                                                                $sql .= 'delete from Reservation_Room where re_id = '.$reid.';';
                                                                $checked_count = count($_POST['checkList']);
                                                                foreach ($_POST['checkList'] as $selected) {
                                                                    $sql .= "insert into Reservation_Room(re_id, room_id, status) values  ($reid, $selected, 1);";
                                                                }
                                                            if (!empty($_POST['checkList2'])) {
                                                                $sql .= 'delete from Reservation_Service where re_id = '.$reid.';';
                                                                $checked_count = count($_POST['checkList2']);
                                                                foreach ($_POST['checkList2'] as $selected) {
                                                                    $sql .= "insert into Reservation_Service(re_id, service_id, status) values  ($reid, $selected, 1);";
                                                                }
                                                            }
                                                        

                                                        // var_dump($sql);
                                                        // die();
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
                                                        header('Location:reservation-management.php');
                                                    
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