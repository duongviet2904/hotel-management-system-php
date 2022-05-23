<?php ob_start(); ?>
<?php
session_start();
if (isset($_SESSION['username']))
    header("Location: index.php");
?>

<!doctype html>
<html lang="ko">

<head>
    <title>GrandPlaza|Đăng nhập</title>
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
                    <h1 class="lg_title inner">Đăng nhập</h1>
                    <div id="mb_login" class="mbskin inner clearfix">



                        <form name="flogin" action="" method="POST">
                            <!-- <input type="hidden" name="url" value="http%3A%2F%2Fwww.grandplazahanoi.com%2Fkor"> -->

                            <div>
                                <h2 class="board_t">Dăng nhập</h2>
                                <fieldset id="login_fs">
                                    <label for="username" class="login_id hidden">Tên người dùng<strong class="sound_only"> Không được bỏ trống</strong></label>
                                    <input type="text" name="username" id="login_id" required class="frm_input required" size="20" maxLength="20" placeholder="Username">
                                    <label for="password" class="login_pw hidden">Mật khẩu<strong class="sound_only"> Không được bỏ trống</strong></label>
                                    <input type="password" name="password" id="login_pw" required class="frm_input required" size="20" maxLength="20" placeholder="Password">
                                    <input type="submit" value="LOGIN" class="btn_submit">
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
                        include('config.php');


                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $username = $_POST["username"];
                            $password = $_POST["password"];
                            #chong sql injection
                            // $username = strip_tags($username);
                            // $username = trim(addslashes($username));
                            // $password = strip_tags($password);
                            // $password = trim(addslashes($password));

                            if ($username == "" || $password == "") {
                                echo "Tên tài khoản hoặc mật khẩu không được để trống!";
                            } else {
                                $sql = "SELECT acc_id, role_name FROM Account  WHERE acc_username = '$username' AND acc_password = '$password'";
                                $query = mysqli_query($conn, $sql);
                                $num_rows = mysqli_num_rows($query);
                                if ($num_rows == 0) {
                                    echo "Tên đăng nhập hoặc mật khẩu không đúng!";
                                } else {
                                    // $row = mysqli_fetch_row($result);
                                    $_SESSION['username'] = $username;
                                    // if($row["role_name"] == 'GUESS')
                                    // header("Location: index.php");
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        if(strcmp($row["role_name"],'GUESS') == 0){
                                            header("Location: index.php");
                                        }else{
                                            header("Location: admin/index.php");
                                        }
                                    }
                                }
                            }
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