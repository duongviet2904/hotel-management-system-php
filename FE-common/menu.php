<?php session_start(); ?>

<header id="header">
     <div class="header_top">
         <div class="inner">
            <h1 class="logo">
                <a href="index.html">
                  <img src="theme/gph/img/common/logo.png" alt="그랜드 플라자 하노이호텔">
<!--                     <img src="theme/gph/img/common/logo.png" alt="베트남 하노이 호텔 로고 입니다">-->
                </a>  
            </h1>
            <div class="langbox">
                <!--<a class="">language</a>-->
                <!-- Google 번역 -->
<div id="google_translate_element" class="hd_lang"></div>
<script>
	function googleTranslateElementInit() {
		new google.translate.TranslateElement({
			pageLanguage: 'ko',
			includedLanguages: 'ko,zh-CN,zh-TW,ja,vi,th,tl,km,my,mn,ru,en,fr,ar',
			layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
			autoDisplay: false
		}, 'google_translate_element');
	}
</script>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- //Google 번역 -->
             <!--   <ul class="depth_lang">
                    <li>
                        <a href="">KOREAN</a>
                    </li>
                    <li>
                        <a href="">ENGLISH</a>
                    </li>
                </ul>-->
            </div>
             <div class="gnb">
                <ul>
                                        
                    <?php 
                        if(isset($_SESSION['acc_id'])){
                            echo '<li><a href="logout.php">LOGOUT</a></li>';
                        }else{
                            echo '<li><a href="login.php">LOGIN</a></li>
                                <li><a href="registration.php">SIGN UP</a></li>';
                        }
                    ?>
                    <!--                    <li><a href="bbs/faq.php">FAQ</a></li>-->
                    <li><a href="reserve/reservation.php">예약확인</a></li>
<!--                      <li><a href="bbs/qalist.php">1:1문의</a></li>-->
<!--                    <li><a href="bbs/current_connect.php">접속자 
2</a></li>-->
<!--                    <li><a href="bbs/new.php">새글</a></li>-->
                    <li class="topm"><a href="bbs/content.php?co_id=about">ABOUT US</a>
                        <div>
                            <a href="bbs/content.php?co_id=about">About Us</a>
                            <a href="bbs/board.php?bo_table=notice">뉴스</a>
                            <a href="bbs/content.php?co_id=history">연혁</a>
                            <a href="bbs/board.php?bo_table=customer">봉사</a>
                            <a href="bbs/content.php?co_id=tourist">주변관광지</a>
                            <a href="bbs/content.php?co_id=contactus">오시는길</a>
                            <a href="bbs/board.php?bo_table=customer2">수상</a>
                        </div>
                    </li>

                </ul>
             </div>
             <!--모바일 메뉴 버튼-->
             <button class="menu_btn" type="button"></button>
             <!--//모바일 메뉴 버튼-->
        </div>
    </div>

   <div class="top_nav">
       <div class="inner">
        <h2 class="hidden">메인메뉴</h2>
            <ul class="depth">
                                <li class="" style="z-index:999">
                    <a href="goods.php" target="_self" class="gnb_1da">예약</a>
                    <ul class="depth2">
                        <li class=""><a href="goods.php" target="_self" class="">객실예약</a></li>
                        <li class=""><a href="reserve/reservation.php" target="_self" class="">예약확인</a></li>
                    </ul>
                </li>
                                <li class="" style="z-index:998">
                    <a href="bbs/content.php?co_id=Room" target="_self" class="gnb_1da">객실</a>
                    <ul class="depth2">
                        <li class=""><a href="bbs/content.php?co_id=Room" target="_self" class="">Deluxe Room</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Room2" target="_self" class="">Parlour Suite Room</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Room3" target="_self" class="">Executive Suite Room</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Room4" target="_self" class="">Plaza Suite Room</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Room5" target="_self" class="">Charmvit Suite Room</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Room6" target="_self" class="">Presidential Suite Room</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Room7" target="_self" class="">Royal Suite Room</a></li>
                    </ul>
                </li>
                                <li class="" style="z-index:997">
                    <a href="bbs/board.php?bo_table=room_pm" target="_self" class="gnb_1da">프로모션</a>
                    <ul class="depth2">
                        <li class=""><a href="bbs/board.php?bo_table=room_pm" target="_self" class="">프로모션</a></li>
                    </ul>
                </li>
                                <li class="" style="z-index:996">
                    <a href="bbs/content.php?co_id=Dining" target="_self" class="gnb_1da">다이닝</a>
                    <ul class="depth2">
                        <li class=""><a href="bbs/content.php?co_id=Dining" target="_self" class="">Dining</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=LeJardin" target="_self" class="">LeJardin</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Grand" target="_self" class="">Phoenix Coffee & Dessert</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Fuji" target="_self" class="">Fuji</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Arirang" target="_self" class="">Arirang</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Hoasen" target="_self" class="">Hoasen</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Lounge" target="_self" class="">Executive Club Lounge</a></li>
                    </ul>
                </li>
                                <li class="" style="z-index:995">
                    <a href="bbs/content.php?co_id=Facilities" target="_self" class="gnb_1da">부대시설</a>
                    <ul class="depth2">
                        <li class=""><a href="bbs/content.php?co_id=Facilities" target="_self" class="">Von Spa</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Fitness" target="_self" class="">Fitness Club</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Pool" target="_self" class="">The Pool</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Golf" target="_self" class="">Golf Academy</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Plaza" target="_self" class="">Vegas Plaza</a></li>
                    </ul>
                </li>
                                <li class="" style="z-index:994">
                    <a href="bbs/content.php?co_id=Wedding" target="_self" class="gnb_1da">웨딩</a>
                    <ul class="depth2">
                        <li class=""><a href="bbs/content.php?co_id=Wedding" target="_self" class="">웨딩 홀</a></li>
                                            <li class=""><a href="bbs/write.php?bo_table=form" target="_self" class="">웨딩 컨설팅</a></li>
                    </ul>
                </li>
                                <li class="" style="z-index:993">
                    <a href="bbs/content.php?co_id=Convention" target="_self" class="gnb_1da">연회&컨벤션</a>
                    <ul class="depth2">
                        <li class=""><a href="bbs/content.php?co_id=Convention" target="_self" class="">밀레니엄 홀</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Convention2" target="_self" class="">크리스털 홀</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Convention3" target="_self" class="">윈져 홀</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Convention4" target="_self" class="">사파이어 홀</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Convention5" target="_self" class="">아테네 홀</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Convention6" target="_self" class="">몽블랑 홀</a></li>
                                            <li class=""><a href="bbs/content.php?co_id=Convention7" target="_self" class="">비즈니스 센터</a></li>
                                            <li class=""><a href="bbs/write.php?bo_table=convs_form" target="_self" class="">연회&컨벤션 컨설팅</a></li>
                    </ul>
                </li>
                            </ul>
        </div>
    </div>
    <div class="bg"></div>
<div class="allmenu">
            <ul id="lnb_m">
                <li>
                    <a href="goods/goods.php?go_table=basic&gc_id=1" title="Reservation">Reservation</a>
                    <ul class="dep_meun">
                        <li><a href="goods/goods.php?go_table=basic&gc_id=1" title="객실예약">객실예약</a></li>
                        <li><a href="reserve/reservation.php" title="예약확인">예약확인</a></li>
                    </ul>
                </li>
                <li>
                    <a href="bbs/content.php?co_id=Room" title="Deluxe Room" title="rooms">rooms</a>
                    <ul class="dep_meun">
                        <li><a href="bbs/content.php?co_id=Room" title="Deluxe Room">Deluxe Room</a></li>
                        <li><a href="bbs/content.php?co_id=Room2" title="Parlour Suite Room">Parlour Suite Room</a></li>
                        <li><a href="bbs/content.php?co_id=Room3" title="Executive Suite Room">Executive Suite Room</a></li>
                        <li><a href="bbs/content.php?co_id=Room4" title="Plaza Suite Room">Plaza Suite Room</a></li>
                        <li><a href="bbs/content.php?co_id=Room5" title="Charmvit Suite Room">Charmvit Suite Room</a></li>
                        <li><a href="bbs/content.php?co_id=Room6" title="Presidential Suite Room">Presidential Suite Room</a></li>
                        <li><a href="bbs/content.php?co_id=Room7" title="Charmvit Suite Room">Charmvit Suite Room</a></li>
                    </ul>
                </li>
                <li>
                    <a href="bbs/board.php?bo_table=room_pm" title="promotion">promotion</a>
                    <ul class="dep_meun">
                        <li><a href="bbs/board.php?bo_table=room_pm" title="프로모션">프로모션</a></li>
                    </ul>
                </li>
                <li>
                    <a href="bbs/content.php?co_id=Dining" title="Dining">Dining</a>
                    <ul class="dep_meun">
                         <li><a href="bbs/content.php?co_id=Dining" title="Grand Coffee">Dining</a></li>
                        <li><a href="bbs/content.php?co_id=LeJardin" title="LeJardin">LeJardin</a></li>
                        <li><a href="bbs/content.php?co_id=Grand" title="Grand Coffee">Grand Coffee</a></li>
                        <li><a href="bbs/content.php?co_id=Fuji" title="Fuji">Fuji</a></li>
                        <li><a href="bbs/content.php?co_id=Arirang" title="Arirang">Arirang</a></li>
                        <li><a href="bbs/content.php?co_id=Hoasen" title="Hoasen">Hoasen</a></li>
                        <li><a href="bbs/content.php?co_id=Lounge" title="Executive Club Lounge">Executive Club Lounge</a></li>
                    </ul>
                </li>
                <li>
                    <a href="bbs/content.php?co_id=Facilities" title="Fitness & Spa">Fitness & Spa</a>
                    <ul class="dep_meun">
                        <li><a href="bbs/content.php?co_id=Facilities" title="Born Spa">Born Spa</a></li>
                        <li><a href="bbs/content.php?co_id=Fitness" title="Fitness Club">Fitness Club</a></li>
                        <li><a href="bbs/content.php?co_id=Golf" title="LeJaGolf Academy">Golf Academy</a></li>
                        <li><a href="#" title="Vegas Plaza">Vegas Plaza</a></li>
                    </ul>
                </li>
                <li>
                    <a href="bbs/content.php?co_id=Wedding" title="Wedding">Wedding</a>
                    <ul class="dep_meun">
                        <li><a href="bbs/content.php?co_id=Wedding" title="웨딩 홀">웨딩 홀</a></li> 
                        <li><a href="bbs/write.php?bo_table=form" title="웨딩 컨설팅">웨딩 컨설팅</a></li>
                    </ul>
                </li>
                <li>
                    <a href="bbs/content.php?co_id=Convention" title="Convention">Convention</a>
                    <ul class="dep_meun">
                        <li><a href="bbs/content.php?co_id=Convention" title="밀레니엄 홀">밀레니엄 홀</a></li>
                        <li><a href="bbs/content.php?co_id=Convention2" title="크리스털 홀">크리스털  홀</a></li>
                        <li><a href="bbs/content.php?co_id=Convention3" title="원져 홀">원져 홀</a></li>
                        <li><a href="bbs/content.php?co_id=Convention4" title="사파이어 홀">사파이어 홀</a></li>
                        <li><a href="bbs/content.php?co_id=Convention5" title="아테네 홀">아테네 홀</a></li>
                        <li><a href="bbs/content.php?co_id=Convention6" title="몽블랑 홀">몽블랑 홀</a></li>
                        <li><a href="bbs/content.php?co_id=Convention7" title="비즈니스 센터">비즈니스 센터</a></li>
                        <li><a href="bbs/write.php?bo_table=convs_form" title="연회&컨벤션 컨설팅">연회&컨벤션 컨설팅</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" title="Wedding">ABOUT US</a>
                    <ul class="dep_meun">
                        <li><a href="bbs/content.php?co_id=about">About Us</a></li>
                        <li><a href="bbs/board.php?bo_table=notice">뉴스</a></li>
                        <li><a href="bbs/content.php?co_id=history">연혁</a></li>
                        <li><a href="bbs/board.php?bo_table=customer">봉사</a></li>
                        <li><a href="bbs/content.php?co_id=tourist">주변관광지</a></li>
                        <li><a href="bbs/content.php?co_id=contactus">오시는길</a></li>
                        <li> <a href="bbs/board.php?bo_table=customer2">수상</a></li>
                    </ul>
                </li>
            </ul>
            <div class="bottom">
                <ul class="clearfix">
                    <li><a href="bbs/login.php">LOGIN</a></li>
                    <li><a href="bbs/register.php">JOIN</a></li>
                    <li><a href="reserve/reservation.php">예약확인</a></li>
                    <li class="lag"><a href="#">LANGUAGE</a>
                       <ul class="depth_lang">
                            <li>
                                <a href="">KOREAN</a>
                            </li>
                            <li>
                                <a href="">ENGLISH</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="allmenu_bg"></div>
</header>