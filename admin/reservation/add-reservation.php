<?php include('../../config.php')?>
<?php 
    ob_start();
    session_start(); 
    if(!isset($_SESSION["username"]))
        header("location: ../../login.php");
?>

<?php  ?> 
<!doctype html>
<html lang="en">

<head>
    <title>Admin| Add reservation</title>
    <?php include('../common/head-link.php'); ?>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <?php //include('../common/setting.php'); ?>
        <div class="app-main">
                <?php $page = 'add-reservation'; include('../common/menu.php'); ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="row">
                                <div class="col-lg-12">
                                <div class="tab-content">
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                    <div class="main-card mb-3 card">
                                        <div class="card-body"><h5 class="card-title">Thêm đơn đặt phòng</h5>
                                            <form class="" action="" method="POST">
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_fname" class="">Họ đệm</label><input name="cus_fname" value="<?php if(isset($_POST['cus_fname'])){echo $_POST['cus_fname'];} ?>" id="exampleEmail11" placeholder="with a placeholder" type="text" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_lname" class="">Tên</label><input value="<?php if(isset($_POST['cus_lname'])){echo $_POST['cus_lname'];} ?>" name="cus_lname" id="examplePassword11" placeholder="password placeholder" type="text"
                                                                                                                                                                class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_birthday" class="">Ngày sinh</label><input value="<?php if (isset($_POST['cus_birthday'])) echo date("Y-m-d", strtotime($_POST['cus_birthday'])); ?>" name="cus_birthday" id="exampleEmail11" placeholder="with a placeholder" type="date" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_gender" class="">Giới tính</label>
                                                        <select class="mb-2 form-control" name="cus_gender" ?>">
                                                            <option value="male" <?php if($_POST['cus_gender'] == 'male'){ echo 'selected';} ?>>Male</option>
                                                            <option value="female" <?php if($_POST['cus_gender'] == 'female'){ echo 'selected';} ?>>Female</option>
                                                            <option value="other" <?php if($_POST['cus_gender'] == 'other'){ echo 'selected';} ?>>Other</option>
                                                        </select>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_phone" class="">Phone number</label><input value="<?php if(isset($_POST['cus_phone'])){echo $_POST['cus_phone'];} ?>" name="cus_phone" id="exampleCity" type="text" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="cus_email" class="">Email</label><input value="<?php if(isset($_POST['cus_email'])){echo $_POST['cus_email'];} ?>" name="cus_email" id="exampleState" type="email" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="re_child_num" class="">Số trẻ em</label><input value="<?php if(isset($_POST['re_child_num'])){echo $_POST['re_child_num'];} ?>" name="re_child_num" id="exampleCity" type="number" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="position-relative form-group"><label for="re_adult_num" class="">Số người lớn</label><input value="<?php if(isset($_POST['re_adult_num'])){echo $_POST['re_adult_num'];} ?>" name="re_adult_num" id="exampleState" type="number" class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="position-relative form-group"><label for="exampleAddress" class="">Địa chỉ</label><input value="<?php if(isset($_POST['cus_address'])){echo $_POST['cus_address'];} ?>" name="cus_address" id="exampleAddress" placeholder="1234 Main St" type="text" class="form-control"></div>
                                                <div class="form-row">
                                                    <div class="col-md-5">
                                                        <div class="position-relative form-group"><label for="re_date_in" class="">Ngày nhận phòng</label><input value="<?php if (isset($_POST['re_date_in'])) echo date("Y-m-d", strtotime($_POST['re_date_in'])); ?>"  name="re_date_in" id="exampleCity" type="date" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <div class="position-relative form-group"><label for="re_date_out" class="">Ngày trả phòng</label><input value="<?php if (isset($_POST['re_date_out'])) echo date("Y-m-d", strtotime($_POST['re_date_out'])); ?>" name="re_date_out" id="exampleState" type="date" class="form-control"></div>
                                                    </div>
                                                    <div class="col-md-2">
                                                    <div class="position-relative form-group"><label for="search_room" class="">Tìm phòng</label>
                                                    
                                                        <div class="position-relative form-group"><input name="re_check_out" id="exampleState" type="submit" class="form-control" value="Check"></div>
                                                    
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12">
                                                        <div class="position-relative form-group"><label for="room_list" class="">Danh sách phòng</label>
                                                            <?php
                                                            // if (isset($_POST['re_date_in']) && isset($_POST['re_date_out'])) {
                                                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                                                $phpdatein = strtotime( $_POST['re_date_in']);
                                                                  $re_date_in = date('Y-m-d h:i:s', $phpdatein);
                                                                  $phpdateout = strtotime( $_POST['re_date_out']);
                                                                 $re_date_out = date('Y-m-d h:i:s', $phpdateout);
                                                                //  $_SESSION['date_out'] = $re_date_out;
                                                                //  $_SESSION['date_in'] = $re_date_in;
                                                                $sql2 = "SELECT * FROM Room where Room.status = 1 and Room.room_id not in (select ro.room_id from Room ro inner join Reservation_Room rr on ro.room_id = rr.room_id 
                                                                inner join Reservation re on rr.re_id = re.re_id where (re.isConfirmed = 1 and re.status = 1 and re.re_date_in <= '$re_date_in' and re.re_date_out >= '$re_date_out') or(re.isConfirmed = 1 and re.status = 1 and re.re_date_in <=  '$re_date_in' and re.re_date_out >= '$re_date_in' and re.re_date_out <= '$re_date_out')or(re.isConfirmed = 1 and re.status = 1 and re.re_date_in >= '$re_date_in' 
                                                                and re.re_date_out >='$re_date_out'))";
                                                                // var_dump($sql2);
                                                                // die();
                                                            $result2 = mysqli_query($conn, $sql2);
                                                            echo '<div class="form-row">';
                                                            if (mysqli_num_rows($result2) > 0) {
                                                                
                                                            // output data of each row
                                                            while($row = mysqli_fetch_assoc($result2)) {
                                                                echo '
                                                                <div class="col-md-2" style="background-color: #82DBD8; color:white; margin-right: 10px; margin-top: 10px; display:flex; align-content: center; justify-content: space-around;">
                                                                   
                                                                    <div style="display: flex;flex-direction: column; justify-content: space-around;"><input name="checkList[]" value="'.$row['room_id'].'" id="exampleCity" type="checkbox" class="form-control" style="width: 30px;align-self:center;" > </div>
                                                                    <div >
                                                                        <label for="'.$row['room_id'].'" class="" style="font-size: 18px;">'.$row['room_name'].'</label></br>
                                                                        <label for="'.$row['room_id'].'" class="">Child: '.$row['room_child_num'].'</label>
                                                                        <label for="'.$row['room_id'].'" class="">Adult: '.$row['room_adult_num'].'</label>
                                                                    </div>
                                                                </div>';
                                                            }
                                                            } else {
                                                            echo '
                                                            <div class="col-md-2" style="color:red; margin-right: 10px; margin-top: 10px; padding-bottom: 10px;">
                                                                <label>Không có phòng phù hợp!</label>
                                                                
                                                            </div>';
                                                            }
                                                            echo '</div>';
                                                            }
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
                                                                    <label for="'.$row['service_id'].'" class="">'.$row['service_name'].' </br>Price: '.$row['service_price'].'</label>
                                                                    <input name="checkList2[]" value="'.$row['service_id'].'" id="exampleCity" type="checkbox" class="form-control"> 
                                                                    
                                                                </div>';
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
                                                
                                                <button class="mt-2 btn btn-primary" type="submit">Add</button>
                                            </form>
                                            
                                            <?php
                                                 if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                                        // $token = time());
                                                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                                                        $create_date = date('Y-m-d H:i:s');

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

                                                        $re_child_num = $_POST['re_child_num'];
                                                        $re_adult_num = $_POST['re_adult_num'];
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
                                                        if(!empty($_POST['checkList'])){
                                                            $sql = "INSERT INTO Customer (
                                                                cus_fname,
                                                                cus_lname,
                                                                cus_birthday,
                                                                cus_gender,
                                                                cus_phone,
                                                                cus_email,
                                                                cus_address,
                                                                status
                                                            ) VALUES ('$fname', '$lname', '$cus_dateOfBirth', '$cus_gender', '$cus_phone', '$cus_email', '$cus_address',1);";
                                                            $sql .= "set @cusid = (select cus_id from Customer where cus_fname = '$fname' and cus_lname='$lname' and cus_birthday = '$cus_dateOfBirth' 
                                                                and cus_gender='$cus_gender' and cus_phone = '$cus_phone' and cus_email = '$cus_email' and cus_address = '$cus_address');";
                                                            $sql .= "INSERT INTO Reservation(re_date_in, re_date_out, re_child_num, re_adult_num, create_date, status, cus_id) 
                                                                VALUES ('$re_date_in', '$re_date_out', '$re_child_num','$re_adult_num','$create_date', 1, @cusid);";
                                                            $sql .= "set @reid = (select re_id from Reservation where cus_id = @cusid);";
                                                                $checked_count = count($_POST['checkList']);
                                                                foreach ($_POST['checkList'] as $selected) {
                                                                    $sql .= "insert into Reservation_Room(re_id, room_id, status) values  (@reid, $selected, 1);";
                                                                }
                                                            if (!empty($_POST['checkList2'])) {
                                                                $checked_count = count($_POST['checkList2']);
                                                                foreach ($_POST['checkList2'] as $selected) {
                                                                    $sql .= "insert into Reservation_Service(re_id, service_id, status) values  (@reid, $selected, 1);";
                                                                }
                                                            }
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

                                                        // var_dump($sql);
                                                        // die();
                                                        // mysqli_query($conn, $sql2);
                                                        
                                                    
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