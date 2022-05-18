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
    
    
    
        <form name="flogin" action="http://www.grandplazahanoi.com/kor/bbs/login_check.php" onsubmit="return flogin_submit(this);" method="post">
        <input type="hidden" name="url" value="http%3A%2F%2Fwww.grandplazahanoi.com%2Fkor">
        
        <div>
            <fieldset id="login_fs">
                <div class="form-outline mb-4">
                <label class="form-label" for="username">Username:</label>
                <input type="text" id="username" class="form-control frm_input" />
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="password">Password:</label>
                <input type="password" id="password" class="form-control frm_input" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="re-password">Re-enter your password:</label>
                <input type="password" id="re-password" class="form-control frm_input" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="fullname">Full name:</label>
                <input type="text" id="fullname" class="form-control frm_input" />
              </div>
              <div class="form-outline mb-4">
                        <label class="form-label" for="dateOfBirth">Date of birth:</label>
                        <input type="text" class="form-control calendar chk-date readonly frm_input" name="inDate_start" id="inDate_start" value="" >
                      </div>
              <div style="width: 100%;">
                <label class="form-label" for="gender">Gender:</label>
                  <select class="select frm_input">
                    <option value="female">Female</option>
                    <option value="male">Male</option>
                    <option value="other">Other</option>
                  </select>
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="phoneNumber">Phone number:</label>
                <input type="text" id="phoneNumber" class="form-control frm_input" />
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="email">Email:</label>
                <input type="text" id="email" class="form-control frm_input" />
              </div>
              
               <input type="submit" value="Sign up" class="btn_submit">
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
