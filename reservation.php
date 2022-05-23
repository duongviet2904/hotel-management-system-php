<?php ob_start(); ?>
<?php
session_start();
?>

<!doctype html>
<html lang="ko">

<head>
    <title>GrandPlaza|Đặt phòng</title>
    <?php include("FE-common/header.php") ?>
    <!--<link rel="stylesheet" href="/css/sub.css?v=1">-->
</head>

<body>

    <!-- phần đầu { -->
    <?php include("FE-common/menu.php") ?>

    <!-- } hết phần đầu -->


    <!-- phần nội dung { -->
    <div id="wrapper">
        <div id="container">
            <section class="sub">
                <section id="sub_page">
                    <!-- <div class="sub_tit">
                      <h2>Đăng nhập</h2>
                  </div> -->



                    <!--  đăng nhập { -->
                    <h1 class="lg_title inner">Đăng Đặt phòng</h1>
                    <div id="mb_login" class="mbskin inner clearfix">



                        <form name="flogin" action="" method="POST">
                            <!-- <input type="hidden" name="url" value="http%3A%2F%2Fwww.grandplazahanoi.com%2Fkor"> -->

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
                                                        <select class="mb-2 form-control" name="cus_gender" value="<?php if(isset($_POST['cus_gender'])){echo $_POST['cus_gender'];} ?>">
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                            <option value="other">Other</option>
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
                                                                $sql2 = "SELECT * FROM Room where Room.room_id not in (select ro.room_id from Room ro inner join Reservation_Room rr on ro.room_id = rr.room_id 
                                                                inner join Reservation re on rr.re_id = re.re_id where (re_date_in < '$re_date_in' and re_date_in < '$re_date_out') or (re_date_out > '$re_date_in' and re_date_out > '$re_date_out'))
                                                                ";
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
                                                                    <input name="checkList[]" value="'.$row['room_id'].'" id="exampleCity" type="checkbox" class="form-control"> 
                                                                    
                                                                </div>';
                                                            }
                                                            } else {
                                                            echo "0 results";
                                                            }
                                                            echo '</div>';}
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
                                            <input type="submit" value="Reserve" class="btn_submit">
                        </form>

                        <?php
                                                include('config.php');
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
                                                        $sql .= "INSERT INTO Reservation(re_date_in, re_date_out, create_date, status, cus_id) 
                                                            VALUES ('$re_date_in', '$re_date_out', '$create_date', 1, @cusid);";
                                                        $sql .= "set @reid = (select re_id from Reservation where cus_id = @cusid);";
                                                        if (!empty($_POST['checkList'])) {
                                                            $checked_count = count($_POST['checkList']);
                                                            foreach ($_POST['checkList'] as $selected) {
                                                                $sql .= "insert into Reservation_Room(re_id, room_id, status) values  (@reid, $selected, 1);";
                                                            }
                                                        }
                                                        if (!empty($_POST['checkList2'])) {
                                                            $checked_count = count($_POST['checkList2']);
                                                            foreach ($_POST['checkList2'] as $selected) {
                                                                $sql .= "insert into Reservation_Service(re_id, service_id, status) values  (@reid, $selected, 1);";
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
                        <!--<div class="btn_confirm">
            <a href="http://www.grandplazahanoi.com/kor/">Quay lại trang chủ</a>
        </div>-->

                    </div>

                    <script>
                        $(function() {
                            $("#login_auto_login").click(function() {
                                if (this.checked) {
                                    this.checked = confirm("Nếu bạn sử dụng đăng nhập tự động, bạn không cần nhập ID thành viên và mật khẩu của mình vào lần sau. \ N \ nVui lòng không sử dụng nó ở những nơi công cộng vì thông tin cá nhân có thể bị lộ. \ N \ nBạn có muốn sử dụng đăng nhập tự động không??");
                                }
                            });
                        });

                        function flogin_submit(f) {
                            return true;
                        }
                    </script>
                    <!-- } hết đăng nhập -->

        </div>
    </div>

    <!-- } hết nội dung -->


    <!-- phần cuối { -->
    <footer id="footer">
        <div class="footer_top">
            <div class="inner">
                <ul class="under">
                    <li><a href="/kor/bbs/content.php?co_id=Room5">Tháp Charmvit</a></li>
                    <li><a href="/kor/bbs/content.php?co_id=Golf">Phoenix Golf Resort</a></li>
                    <li><a href="/kor/bbs/content.php?co_id=Arirang">Arirang</a></li>
                    <li><a href="/kor/bbs/content.php?co_id=Fuji">Fuji</a></li>
                    <li><a href="/kor/bbs/content.php?co_id=Hoasen"> HoaSen </a></li>
                    <li><a href="/kor/bbs/content.php?co_id=Facilities"> Born Spa</a></li>
                </ul>
                <div class="footer_sns">
                    <a href="https://www.facebook.com/GrandPlazaHanoiHotel.Co.Ltd/" target="_blank"><img src="/kor/theme/gph/img/common/face.png" alt="facebook"></a>
                    <a href="https://www.instagram.com/grandplazahanoi_official/?hl=ko" target="_blank"><img src="/kor/theme/gph/img/common/insta.png" alt="instagram"></a>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="inner">
                <div class="f_logo">
                    <a href="http://gph.oktomato.net"><img src="/kor/theme/gph/img/common/f_logo.png" alt="gnuboard5"></a>
                </div>
                <div class="info">
                    <div class="footer-policy">
                        <ul>
                            <li><a href="/kor/bbs/content.php?co_id=about">Về Grand Plaza</a></li>
                            <li><a href="/kor/bbs/content.php?co_id=privacy">Chính sách bảo mật</a></li>
                            <li><a href="/kor/bbs/content.php?co_id=provision">Điều khoản dịch vụ</a></li>
                            <li><a href="/kor/bbs/content.php?co_id=ethics">Ý kiến khách hàng</a></li>
                            <!-- <li><a href="/kor/bbs/board.php?bo_table=customer">Ý kiến khách hàng</a></li> -->
                            <li><a href="/kor/bbs/content.php?co_id=sitemap">Sơ đồ website</a></li>
                            <!-- <li><a href="#">Tuyển dụng</a></li> -->
                            <li><a href="/kor/bbs/content.php?co_id=contactus">Thông tin liên hệ</a></li>
                        </ul>
                    </div>

                    <div class="adress">
                        <p>KHÁCH SẠN GRAND PLAZA HÀ NỘI SỐ 117 TRÀN DUY HƯNG, CẦU GIẤY, HÀ NỘI, VIỆT NAM</p>
                        <p>COPYRIGHT&copy; 2019 GRAND PLAZA HANOI HOTEL. ALLRIGHTS RESERVED.</p>
                    </div>
                    <div class="campany">
                        <span><b class="ename">SỐ ĐIỆN THOẠI</b> +84-24-3555-1000</span>
                        <span><b class="ename">EMAIL</b> reservation@grandplazahanoi.com</span>
                        <!--<span class="f_site">
                        <button type="button">Family Site</button>
                        <div class="customSelect">
                            <ul>
                                <li><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                            </ul>
                            <a href="javascript:void(0);" class="custom_close">Thoát</a>
                        </div>
                    </span>-->
                    </div>
                </div>
                <div class="award f">
                    <img src="/kor/theme/gph/img/common/award.png" alt="footer logo">
                </div>
            </div>
        </div>
    </footer>


    <!-- } hết phần cuối -->

    <script>
        $(function() {
            // thay đổi kích thước phông chữ nếu tồn tại cookie
            font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
        });
    </script>



    <!-- Đã khắc phục sự cố chế độ xem bên bị chặn bởi chế độ xem bên dưới trong danh sách bảng thông báo trong ie6,7 -->
    <!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

</body>

</html>