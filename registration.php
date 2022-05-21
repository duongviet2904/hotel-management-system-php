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

<!-- 상단 시작 { -->
<?php include("FE-common/menu.php") ?>

<!-- } 상단 끝 -->


<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container">
                  <section class="sub">
                        <section id="sub_page" >
                  <!-- <div class="sub_tit">
                      <h2>로그인</h2>
                  </div> -->



<!-- 로그인 시작 { -->
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
                <label for="login_auto_login">자동로그인</label>-->
            </fieldset>
             <aside class="log_common">
              <ul class="find">
                <!-- <li class="clearfix">아직 계정이 없으신가요?           <a href="./register.php" class="bg-gray">회원 가입</a></li> -->
                <li class="clearfix">아이디, 비밀번호가 생각나지 않으세요?           <a href="http://www.grandplazahanoi.com/kor/bbs/password_lost.php" id="login_password_lost_x" class="w">아이디/비밀번호 찾기</a></li>
              </ul>
            </aside>
             <!--<div>
                <a href="http://www.grandplazahanoi.com/kor/bbs/password_lost.php" target="_blank" id="login_password_lost" class="btn02">아이디 비밀번호 찾기</a>
                <a href="./register.php" class="btn01">회원 가입</a>
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
            <a href="http://www.grandplazahanoi.com/kor/">메인으로 돌아가기</a>
        </div>-->

</div>

<script>
$(function(){
    $("#login_auto_login").click(function(){
        if (this.checked) {
            this.checked = confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?");
        }
    });
});

function flogin_submit(f)
{
    return true;
}
</script>
<!-- } 로그인 끝 -->

    </div>
</div>

<!-- } 콘텐츠 끝 -->


<!-- 하단 시작 { -->
<footer id="footer">
    <div class="footer_top">
        <div class="inner">
            <ul class="under">
                <li><a href="/kor/bbs/content.php?co_id=Room5">Charmvit Tower</a></li>
                <li><a href="/kor/bbs/content.php?co_id=Golf">Phoenix Golf Resort</a></li>
                <li><a href="/kor/bbs/content.php?co_id=Arirang">Arirang</a></li>
                <li><a href="/kor/bbs/content.php?co_id=Fuji">Fuji</a></li>
                <li><a href="/kor/bbs/content.php?co_id=Hoasen"> HoaSen </a></li>
                <li><a href="/kor/bbs/content.php?co_id=Facilities"> Born Spa</a></li>
            </ul>
            <div class="footer_sns">
                <a href="https://www.facebook.com/GrandPlazaHanoiHotel.Co.Ltd/" target="_blank"><img src="/kor/theme/gph/img/common/face.png" alt="페이스북"></a>
                <a href="https://www.instagram.com/grandplazahanoi_official/?hl=ko"  target="_blank"><img src="/kor/theme/gph/img/common/insta.png" alt="인스타"></a>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="inner">
            <div class="f_logo">
                <a href="http://gph.oktomato.net"><img src="/kor/theme/gph/img/common/f_logo.png" alt="그누보드5"></a>
            </div>
            <div class="info">
                <div class="footer-policy">
                    <ul>
                        <li><a href="/kor/bbs/content.php?co_id=about">ABOUT US</a></li>
                        <li><a href="/kor/bbs/content.php?co_id=privacy">개인정보처리방침</a></li>
                        <li><a href="/kor/bbs/content.php?co_id=provision">이용약관</a></li>
                        <li><a href="/kor/bbs/content.php?co_id=ethics">VOICE OF CUSTOMER</a></li>
                        <!-- <li><a href="/kor/bbs/board.php?bo_table=customer">VOICE OF CUSTOMER</a></li> -->
                        <li><a href="/kor/bbs/content.php?co_id=sitemap">SITEMAP</a></li>
                        <!-- <li><a href="#">채용</a></li> -->
                        <li><a href="/kor/bbs/content.php?co_id=contactus">CONTACT US</a></li>
                    </ul>
                </div>

                <div class="adress">
                   <p>GRAND PLAZA HANOI HOTEL 117 TRAN DUY HUNG STREET, CAU GIAY DISTRICT, HANOI, VIETNAM</p>
                    <p>COPYRIGHT&copy; 2019 GRAND PLAZA HANOI HOTEL. ALLRIGHTS RESERVED.</p>
                </div>
                <div class="campany">
                    <span><b class="ename">CALL US</b> +84-24-3555-1000</span>
                    <span><b class="ename">EMAIL US</b> reservation@grandplazahanoi.com</span>
                    <!--<span class="f_site">
                        <button type="button">Family Site</button>
                        <div class="customSelect">
                            <ul>
                                <li><a href="">1</a></li>
                                <li><a href="">2</a></li>
                                <li><a href="">3</a></li>
                            </ul>
                            <a href="javascript:void(0);" class="custom_close">닫기</a>
                        </div>
                    </span>-->
                </div>
            </div>
             <div class="award f">
                <img src="/kor/theme/gph/img/common/award.png" alt="푸터로고">
            </div>
        </div>
    </div>
</footer>


<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>



<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
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
