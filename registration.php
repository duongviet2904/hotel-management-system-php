 <?php include('config.php'); ?>

<?php 
ob_start();
session_start();?>

<!doctype html>
<html lang="ko">
<head>
<title>GrandPlaza|Registration</title>
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
                        <section id="sub_page" >
                  <!-- <div class="sub_tit">
                      <h2>Đăng nhập</h2>
                  </div> -->



<!-- đăng nhập { -->
<h1 class="lg_title inner">Registration</h1>
<div id="mb_login" class="mbskin inner clearfix">



        <form action="" method="post">
        <input type="hidden" name="url" value="http%3A%2F%2Fwww.grandplazahanoi.com%2Fkor">

        <div>
            <fieldset id="login_fs">
                 <?php
                                if($error_message != '') {
                                    echo "<div class='error' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>".$error_message."</div>";
                                }
                                if($success_message != '') {
                                    echo "<div class='success' style='padding: 10px;background:#f1f1f1;margin-bottom:20px;'>".$success_message."</div>";
                                }
                                ?>
                <div class="form-outline mb-4">
                <label class="form-label" for="cus_username">Username:</label>
                <input type="text" id="cus_username" class="form-control frm_input" name="cus_username" value="<?php if(isset($_POST['cus_username'])){echo $_POST['cus_username'];} ?>"/>
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="cus_password">Password:</label>
                <input type="password" id="cus_password" class="form-control frm_input" name="cus_password" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="cus_re-password">Re-enter your password:</label>
                <input type="password" id="cus_re-password" class="form-control frm_input" name="cus_re-password" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="cus_fname">First name:</label>
                <input type="text" id="cus_fname" class="form-control frm_input" name="cus_fname" value="<?php if(isset($_POST['cus_fname'])){echo $_POST['cus_fname'];} ?>"/>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="cus_lname">Last name:</label>
                <input type="text" id="cus_lname" class="form-control frm_input" name="cus_lname" value="<?php if(isset($_POST['cus_lname'])){echo $_POST['cus_lname'];} ?>"/>
              </div>
              <div class="form-outline mb-4">
                        <label class="form-label" for="cus_dateOfBirth">Date of birth:</label>
                        <input type="date" class="form-control frm_input"  id="cus_dateOfBirth" name="cus_dateOfBirth">
                      </div>
              <div style="width: 100%;">
                <label class="form-label" for="cus_gender">Gender:</label>
                  <select class="select frm_input" name="cus_gender">
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="other">Other</option>
                  </select>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="cus_phoneNumber">Phone number:</label>
                <input type="text" id="cus_phoneNumber" class="form-control frm_input" name="cus_phoneNumber" value="<?php if(isset($_POST['cus_phoneNumber'])){echo $_POST['cus_phoneNumber'];} ?>"/>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="cus_email">Email:</label>
                <input type="email" id="cus_email" class="form-control frm_input" name="cus_email" value="<?php if(isset($_POST['cus_email'])){echo $_POST['cus_email'];} ?>"/>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="cus_address">Address:</label>
                <input type="text" id="cus_address" class="form-control frm_input" name="cus_address" value="<?php if(isset($_POST['cus_address'])){echo $_POST['cus_address'];} ?>"/>
              </div>
               <input type="submit" value="Sign up" class="btn_submit" name="regis" id="regis">
               <!-- <input type="checkbox" name="auto_login" id="login_auto_login">
                <label for="login_auto_login">Tự động đăng nhập</label>-->
            </fieldset>
             <aside class="log_common">
              <ul class="find">
                <!-- <li class="clearfix">Bạn chưa có tài khoản?           <a href="./register.php" class="bg-gray">Đăng kí ngay</a></li> -->
                <li class="clearfix">Quên ID hoặc mật khẩu của bạn?           <a href="http://www.grandplazahanoi.com/kor/bbs/password_lost.php" id="login_password_lost_x" class="w">Tìm ID / Mật khẩu</a></li>
              </ul>
            </aside>
             <!--<div>
                <a href="http://www.grandplazahanoi.com/kor/bbs/password_lost.php" target="_blank" id="login_password_lost" class="btn02">Tìm ID / Mật khẩu</a>
                <a href="./register.php" class="btn01">Đăng ký</a>
            </div>-->
        </div>
		</form>
<?php


if (isset($_POST['regis'])) {

    $valid = 1;
    if($valid == 1) {

        // $token = md5(time());
        // $cust_datetime = date('Y-m-d h:i:s');
        // $cust_timestamp = time();

        $fname = $_POST['cus_fname'];
        $lname = $_POST['cus_lname'];
        $phpdate = strtotime( $_POST['cus_dateOfBirth']);
        $cus_dateOfBirth = date('Y-m-d h:i:s', $phpdate);
        $cus_gender = $_POST['cus_gender'];
        $cus_phoneNumber = $_POST['cus_phoneNumber'];
        $cus_email = $_POST['cus_email'];
        $cus_address = $_POST['cus_address'];
        $cus_username = $_POST['cus_username'];

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
                                    ) VALUES ('$fname', '$lname', '$cus_dateOfBirth', '$cus_gender', '$cus_phoneNumber', '$cus_email', '$cus_address',1,@accid)";
// var_dump($sql);
//                     die();
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
        $_SESSION['username'] = $cus_username;
        header("Location: login.php?username='.$cus_username.'");
    }
}
?>



     <!--<div class="btn_confirm">
            <a href="http://www.grandplazahanoi.com/kor/">Quay lại trang chủ</a>
        </div>-->

</div>

<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("Nếu bạn sử dụng đăng nhập tự động, bạn không cần nhập ID thành viên và mật khẩu của mình vào lần sau. \ N \ nVui lòng không sử dụng nó ở những nơi công cộng vì thông tin cá nhân có thể bị lộ. \ N \ nBạn có muốn sử dụng đăng nhập tự động không?");
        }
    });
});

function flogin_submit(f)
{
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
                <a href="https://www.instagram.com/grandplazahanoi_official/?hl=ko"  target="_blank"><img src="/kor/theme/gph/img/common/insta.png" alt="instagram"></a>
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
