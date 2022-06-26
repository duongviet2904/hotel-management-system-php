<?php include('config.php') ?>
<?php
ob_start();
session_start();
?>


<!doctype html>
<html lang="ko">

<head>

    <title>GrandPlaza| Reservation</title>
    <?php include("FE-common/header.php") ?>
    <!-- <link rel="stylesheet" href="theme/gph/css/jquery-ui.css"> -->
    <!--<link rel="stylesheet" href="/css/sub.css?v=1">-->
</head>

<body>

    <!-- phần đầu { -->

    <?php
    include('FE-common/menu.php');
    ?>


    <!-- phần nội dung { -->
    <div id="wrapper">
        <div id="container">
            <section class="sub">
                <div id="" class="sub_visual bg-">
                    <div class="sub_visual-txt"><strong>Đặt phòng</strong></div>
                    <!-- <span class="after"></span> -->
                    <!-- <div class="location">
                    <span class="home">HOME</span>
                    <span>Đặt phòng</span>
                    <span>Đặt phòng</span>
                </div> -->


                </div>


                <section id="sub_page">
                    <!-- <div class="sub_tit">
                      <h2>Đặt phòng</h2>
                  </div> -->

                    <!-- <link rel="stylesheet" href="skin/goods/basic/style.css" /> -->
                    <div id="mb_login" class="mbskin inner clearfix" style="margin-top: 40px;">



                        <form name="flogin" action="" method="POST">
                            <!-- <input type="" name="url" value="http%3A%2F%2Fwww.grandplazahanoi.com%2Fkor"> -->

                            <div>
                                <h2 class="board_t">Thông tin đặt phòng</h2>
                                <fieldset id="login_fs">
                                    <label for="cus_fname" class="login_id ">Họ đệm</label>
                                    <input value="<?php if(isset($_POST['cus_fname'])){echo $_POST['cus_fname'];} ?>" type="text" name="cus_fname" id="login_id" class="frm_input " size="20" maxLength="20" placeholder="Họ đệm">
                                    <label for="cus_lname" class="login_id ">Tên</label>
                                    <input value="<?php if(isset($_POST['cus_lname'])){echo $_POST['cus_lname'];} ?>" type="text" name="cus_lname" id="login_id"  class="frm_input " size="20" maxLength="20" placeholder="Tên">
                                    <label for="cus_birthday" class="login_id " >Ngày sinh</label>
                                    <input type="date" name="cus_birthday" id="login_id"  class="frm_input " size="20" maxLength="20" value="<?php if (isset($_POST['cus_birthday'])) echo date("Y-m-d", strtotime($_POST['cus_birthday'])); ?>">
                                    <label for="username" class="login_id ">Giới tính</label>
                                    <select class="frm_input " name="cus_gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <label for="cus_phone" class="login_id ">SDT</label>
                                    <input value="<?php if(isset($_POST['cus_phone'])){echo $_POST['cus_phone'];} ?>" type="text" name="cus_phone" id="login_id"  class="frm_input " size="20" maxLength="20" placeholder="Số điện thoại">
                                    <label for="cus_email" class="login_id ">Email</label>
                                    <input value="<?php if(isset($_POST['cus_email'])){echo $_POST['cus_email'];} ?>" type="email" name="cus_email" id="login_id"  class="frm_input " size="20" maxLength="20" placeholder="Email">
                                    <label for="cus_address" class="login_id ">Địa chỉ</label>
                                    <input value="<?php if(isset($_POST['cus_address'])){echo $_POST['cus_address'];} ?>" type="text" name="cus_address" id="login_id"  class="frm_input " size="20" maxLength="20" placeholder="Địa chỉ">
                                    <label for="re_date_in" class="login_id ">Ngày nhận phòng</label>
                                    <input value="<?php if (isset($_POST['re_date_in'])) echo date("Y-m-d", strtotime($_POST['re_date_in'])); ?>" type="date" name="re_date_in" id="login_id"  class="frm_input " size="20" maxLength="20">
                                    <label for="re_date_out" class="login_id ">Ngày trả phòng</label>
                                    <input value="<?php if (isset($_POST['re_date_out'])) echo date("Y-m-d", strtotime($_POST['re_date_out'])); ?>" type="date" name="re_date_out" id="login_id"  class="frm_input " size="20" maxLength="20">
                                    <input type="submit" name="" id="login_id"  class="frm_input " value="Tìm phòng">

                                    <?php
                                    // if (isset($_POST['re_date_in']) && isset($_POST['re_date_out'])) {
                                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                        $phpdatein = strtotime($_POST['re_date_in']);
                                        $re_date_in = date('Y-m-d h:i:s', $phpdatein);
                                        $phpdateout = strtotime($_POST['re_date_out']);
                                        $re_date_out = date('Y-m-d h:i:s', $phpdateout);
                                        //  $_SESSION['date_out'] = $re_date_out;
                                        //  $_SESSION['date_in'] = $re_date_in;
                                        $sql2 = "SELECT * FROM Room where Room.room_id not in (select ro.room_id from Room ro inner join Reservation_Room rr on ro.room_id = rr.room_id 
                                                                inner join Reservation re on rr.re_id = re.re_id where (re.status = 1 and re.re_date_in < '$re_date_in' and re.re_date_out > '$re_date_out') or(re.status = 1 and re.re_date_in > '$re_date_in' and re.re_date_in < '$re_date_out' )or(re.status = 1 and re.re_date_in > '$re_date_in' and re.re_date_out >'$re_date_out'))
                                                                ";
                                        // var_dump($sql2);
                                        // die();
                                        $result2 = mysqli_query($conn, $sql2);
                                        if (mysqli_num_rows($result2) > 0) {
                                            echo '<label for="checkList" class="login_id ">Danh sách phòng</label>
                                            <div class="form-row" >';
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($result2)) {
                                                echo '
                                                                <div style="background-color: #82DBD8; color:white; margin-right: 10px; margin-top: 10px; padding-bottom: 10px;">
                                                                    <label for="' . $row['room_id'] . '" class="">' . $row['room_name'] . '</label>
                                                                    <input type="checkbox" name="checkList[]" id="login_id"  class="frm_input " value="' . $row['room_id'] . '">
                                                                    
                                                                </div>';
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        echo '</div>';
                                    }
                                    ?>
                                    <label for="checkList2" class="login_id ">Danh sách dịch vụ</label>
                                    <?php

                                    $sql1 = "SELECT * FROM Service ";
                                    $result1 = mysqli_query($conn, $sql1);
                                    if (mysqli_num_rows($result1) > 0) {
                                        echo '<div class="form-row">';
                                        // output data of each row
                                        while ($row = mysqli_fetch_assoc($result1)) {
                                            echo '
                                                                <div class="col-md-2">
                                                                <input name="checkList2[]" value="' . $row['service_id'] . '" id="exampleCity" type="checkbox" class="form-control"> 
                                                                    <label for="' . $row['service_id'] . '" class="">' . $row['service_name'] . ' Price: ' . $row['service_price'] . '</label>
                                                                    
                                                                    
                                                                </div>';
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                    echo '</div>';
                                    ?>
                                    <input type="submit" value="RESERVE" class="btn_submit">

                                    <!-- <input type="checkbox" name="auto_login" id="login_auto_login">
                <label for="login_auto_login">Tự động đăng nhập</label>-->
                                </fieldset>
                                <aside class="log_common">
                                    <ul class="find">
                                        <li class="clearfix">Bạn chưa có tài khoản?<a href="registration.php" class="bg-gray">Đăng kí ngay</a></li>
                                        <li class="clearfix">Quên ID hoặc mật khẩu của bạn? <a href="http://www.grandplazahanoi.com/kor/bbs/password_lost.php" id="login_password_lost_x" class="w">Tìm ID / Mật khẩu</a></li>
                                    </ul>
                                </aside>
                                <!--<div>
                <a href="http://www.grandplazahanoi.com/kor/bbs/password_lost.php" target="_blank" id="login_password_lost" class="btn02">Tìm ID / Mật khẩu</a>
                <a href="./register.php" class="btn01">Đăng ký</a>
            </div>-->
                            </div>
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
                                                        $sql = '';
                                                        if(!empty($_POST['checkList'])){
                                                            $sql .= "INSERT INTO Customer (
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
                                                            // mysqli_multi_query($conn, $sql);
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
                                                        unset($_POST['checkList']);
                                                        unset($_POST['checkList2']);
                                                        header('Location: index.php');

                                                    
                                                }
                                                ?>

                        <!--<div class="btn_confirm">
            <a href="http://www.grandplazahanoi.com/kor/">Quay lại trang chủ</a>
        </div>-->

                    </div>
                    <!-- <section id="contents">
						<h1>Đặt phòng</h1> -->

                    <!-- <div class="product_type1 inner">
		<h2 class="hide">Đặt phòng<span class="sound_only"> Danh sách</span></h2>


	</div> -->


                </section>

                <script>
                    function form_submit(idx, price_sum) {

                        //var test = document.getElementsByName("g_room_num").value;
                        if (($("#inDate_start").val() == "") || ($("#inDate_end").val() == "")) {
                            alert("날짜를 선택해 주세요.");
                            return;
                        }
                        if (($("#adults_num").val() == 0) && ($("#child_num").val() == 0)) {
                            alert("1명 이상 인원이 선택되어야 합니다.");
                            return;
                        }

                        if ($("#g_price_total").val() == "" || $("#g_price_total").val() == 0) {
                            alert("검색 후 객실을 선택 해 주세요");
                            return;
                        }

                        $("#g_id").val(idx);
                        $("#start_date").val($("#inDate_start").val());
                        $("#end_date").val($("#inDate_end").val());
                        $("#a_num").val($("#adults_num").val());
                        $("#c_num").val($("#child_num").val());
                        $("#total_price").val(price_sum);

                        $("#f_inquiry").submit();

                        //alert(test);

                    }
                </script>

                <!-- da sửu dụng:  -->

        </div>
    </div>

    <!-- } hết nội dung -->


    <!-- phần cuối { -->
    <footer id="footer">
        <div class="footer_top">
            <div class="inner">
                <ul class="under">
                    <li><a href="bbs/content.php?co_id=Room5">Tháp Charmvit</a></li>
                    <li><a href="bbs/content.php?co_id=Golf">Phoenix Golf Resort</a></li>
                    <li><a href="bbs/content.php?co_id=Arirang">Arirang</a></li>
                    <li><a href="bbs/content.php?co_id=Fuji">Fuji</a></li>
                    <li><a href="bbs/content.php?co_id=Hoasen"> HoaSen </a></li>
                    <li><a href="bbs/content.php?co_id=Facilities"> Born Spa</a></li>
                </ul>
                <div class="footer_sns">
                    <a href="https://www.facebook.com/GrandPlazaHanoiHotel.Co.Ltd/" target="_blank"><img src="theme/gph/img/common/face.png" alt="facebook"></a>
                    <a href="https://www.instagram.com/grandplazahanoi_official/?hl=ko" target="_blank"><img src="theme/gph/img/common/insta.png" alt="instagram"></a>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="inner">
                <div class="f_logo">
                    <a href="http://gph.oktomato.net"><img src="theme/gph/img/common/f_logo.png" alt="gnuboard5"></a>
                </div>
                <div class="info">
                    <div class="footer-policy">
                        <ul>
                            <li><a href="bbs/content.php?co_id=about">Về Grand Plaza</a></li>
                            <li><a href="bbs/content.php?co_id=privacy">Chính sách bảo mật</a></li>
                            <li><a href="bbs/content.php?co_id=provision">Điều khoản dịch vụ</a></li>
                            <li><a href="bbs/content.php?co_id=ethics">Ý kiến khách hàng</a></li>
                            <!-- <li><a href="bbs/board.php?bo_table=customer">Ý kiến khách hàng</a></li> -->
                            <li><a href="bbs/content.php?co_id=sitemap">Sơ đồ website</a></li>
                            <!-- <li><a href="#">Tuyển dụng</a></li> -->
                            <li><a href="bbs/content.php?co_id=contactus">Thông tin liên hệ</a></li>
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
                    <img src="theme/gph/img/common/award.png" alt="footer logo">
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