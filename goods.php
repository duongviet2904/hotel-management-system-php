<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
<meta name="HandheldFriendly" content="true">
<meta name="format-detection" content="telephone=no">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<title>GrandPlaza|Booking</title>
<!--<link rel="stylesheet" href="theme/gph/css/default.css?ver=161020">-->
<!--[if lte IE 8]>
<script src="http://www.grandplazahanoi.comjs/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "file:///Users/duongv/Documents/HaUI/PHP/GrandPlaza/index.html";
var g5_bbs_url   = "bbs";
var g5_is_member = "";
var g5_is_admin  = "";
var g5_is_mobile = "";
var g5_bo_table  = "";
var g5_sca       = "";
var g5_editor    = "";
var g5_cookie_domain = "";
</script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/jquery.menu.js"></script>
<script src="js/common.js"></script>
<script src="js/wrest.js"></script>
<script src="theme/gph/js/gph_common.js"></script>
<script src="theme/gph/js/slick.js"></script>
<script src="theme/gph/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="theme/gph/css/default.css">
<link rel="stylesheet" href="theme/gph/skin/board/gallery/style.css">
<link rel="icon" href="theme/gph/img/common/shorticon.png" type="image/gif" sizes="">
<!-- <link rel="stylesheet" href="theme/gph/css/jquery-ui.css"> -->
<!--<link rel="stylesheet" href="/css/sub.css?v=1">-->
</head>
<body>

<!-- 상단 시작 { -->

<header id="header">
     <div class="header_top">
         <div class="inner">
            <h1 class="logo">
                <a href="h">
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
                                        
                    <li><a href="bbs/login.php">LOGIN</a></li>
                    <li><a href="bbs/register.php">JOIN</a></li>
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
                    <a href="goods/goods.php?go_table=basic&gc_id=1" target="_self" class="gnb_1da">예약</a>
                    <ul class="depth2">
                        <li class=""><a href="goods/goods.php?go_table=basic&gc_id=1" target="_self" class="">객실예약</a></li>
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
<!-- } 상단 끝 -->


<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container">
                  <section class="sub">
                        <div id="" class="sub_visual bg-">
                  <div class="sub_visual-txt"><strong>예약</strong></div>
                    <!-- <span class="after"></span> -->
                <!-- <div class="location">
                    <span class="home">HOME</span>
                    <span>예약</span>
                    <span>객실예약</span>
                </div> -->


              </div>

              <section class="snb">
                  <div class="inner">
                <ul class="location">
                    <li class="locHome">
                        <a href="#" title="Home">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="1em" height="1EM" viewBox="0 0 510 510" xml:space="preserve">
                                <g id="home">
                                    <polygon points="204,471.75 204,318.75 306,318.75 306,471.75 433.5,471.75 433.5,267.75 510,267.75 255,38.25 0,267.75     76.5,267.75 76.5,471.75   " fill="#858585"/>
                                </g>
                            </svg>
                        </a></li>
                    <li class="loc loc_1">
                        <!-- 1depth -->
                        <a href="#">예약</a>
                        <ul class="loc_depth2">
                                                        <li class="">
                                <a href="goods/goods.php?go_table=basic&gc_id=1" target="_self" class="">예약</a>
                            </li>
                                                        <li class="">
                                <a href="bbs/content.php?co_id=Room" target="_self" class="">객실</a>
                            </li>
                                                        <li class="">
                                <a href="bbs/board.php?bo_table=room_pm" target="_self" class="">프로모션</a>
                            </li>
                                                        <li class="">
                                <a href="bbs/content.php?co_id=Dining" target="_self" class="">다이닝</a>
                            </li>
                                                        <li class="">
                                <a href="bbs/content.php?co_id=Facilities" target="_self" class="">부대시설</a>
                            </li>
                                                        <li class="">
                                <a href="bbs/content.php?co_id=Wedding" target="_self" class="">웨딩</a>
                            </li>
                                                        <li class="">
                                <a href="bbs/content.php?co_id=Convention" target="_self" class="">연회&컨벤션</a>
                            </li>
                                                    </ul>
                    </li>
                    <li class="loc loc_2">
                        <!-- 2depth -->
                        <a href="#">객실예약</a>
                        <ul class="loc_depth2">
                                                            <li class="on" style="z-index:999">
                                    <a href="goods/goods.php?go_table=basic&gc_id=1" target="_self" class="">객실예약</a>
                                </li>
                                                            <li class="" style="z-index:998">
                                    <a href="reserve/reservation.php" target="_self" class="">예약확인</a>
                                </li>
                                                    </ul>
                    </li>
                </ul>
                </div>
              </section>
                        <section id="sub_page" >
                  <!-- <div class="sub_tit">
                      <h2>객실예약</h2>
                  </div> -->

                  <!-- <link rel="stylesheet" href="skin/goods/basic/style.css" /> -->

<section id="contents">
		<h1>객실예약</h1>

	<!-- <div class="product_type1 inner">
		<h2 class="hide">예약<span class="sound_only"> 목록</span></h2>


	</div> -->
    <div class="sub1_wrap">
		<div class="inner">
			<div class="txtBox">
				<ul>
					<li>일정 : ~2022-04-22 (19103.625박)</li>
					<li>인원 : 객실 , 성인 , 어린이  </li>
					<li>조식 유무 : 무</li>
					<!-- <li>일정 : 2020-05-14~2020-05-15 (1박)</li>
					<li>인원 : 객실 1, 성인 1, 어린이 0 </li>
					<li>조식 유무 : 유/무</li> -->
				</ul>
			</div>
			<div class="cont_info reser inner">
				<p class="res_txt">Welcome to Hanoi Vietnam, one of the most beautiful place in the world,which is chosen as the world natural heritage by UNESCO and nominated world's new 7 wonders.</p>
				<p class="res_txt">Grand Plaza Hanoi Hotel has 618 rooms in total, is equivalent to 7 star hotel with spectacular and cutting-edge interior, second to none international hotel in the world. </p>
			</div>
			<!-- <div class="sub_infotxt">
				<ul class="rev_list">
					<li>
						<img src="theme/gph/img/sub/reservation.jpg">
						<p>Deluxe Room</p>
					</li>
					<li>
						<img src="theme/gph/img/sub/reservation2.jpg">
						<p>Parlor Suites Room</p>
					</li>
					<li>
						<img src="theme/gph/img/sub/reservation3.jpg">
						<p>Executive Suites Room</p>
					</li>
					<li>
						<img src="theme/gph/img/sub/reservation4.jpg">
						<p>Plaza Suites Room</p>
					</li>
					<li>
						<img src="theme/gph/img/sub/reservation5.jpg">
						<p>Charmvit Suite Room</p>
					</li>
					<li>
						<img src="theme/gph/img/sub/reservation6.jpg">
						<p>Presidential Suite Room</p>
					</li>
					<li>
						<img src="theme/gph/img/sub/reservation7.jpg">
						<p>Royal Suite Room</p>
					</li>
				</ul>
			</div> -->
		</div>
	</div>

	<div class="sub2_wrap">
		<div class="inner clearfix">
			<div class="sub_infotxt">
				<h3 class="subject">Select Basic Information</h3>
				<div class="res_search">
					<form name="fsearch" method="get">
					<input type="hidden" name="go_table" value="basic">
					<input type="hidden" name="gc_id" value="1">
					<div class="select_check">
						<div class="date_list">
							<span class="input-form">
								<strong class="inptitle">CHECK-IN</strong>
								<input type="text" class="form-control calendar chk-date readonly" name="inDate_start" id="inDate_start" value="" >
							</span>
							<span class="input-form">
								<strong class="inptitle">CHECK-OUT</strong>
								<input type="text" class=" form-control calendar chk-date readonly" name="inDate_end" id="inDate_end" value="2022-04-22">
							</span>
						</div>
						<div class="person_list">
							<span class="input-form border">
								<strong class="inptitle">ROOMS</strong>
								<!-- <input type="text" class="chk-person readonly" name="g_name"> -->
								<select name="g_room_num" id="g_room_num">
																	<option value="1" >1</option>
																	<option value="2" >2</option>
																	<option value="3" >3</option>
								
								</select>
							</span>
							<span class="input-form">
								<strong class="inptitle">ADULTS</strong>
								<!-- <input type="text" class="chk-person readonly" name="adults_num"> -->
								<select name="adults_num" id="adults_num">
																	<option value="1" >1</option>
																	<option value="2" >2</option>
																	<option value="3" >3</option>
								
								</select>
							</span>
							<span class="input-form">
								<strong class="inptitle">CHILDREN</strong>
								<!-- <input type="text" class="chk-person readonly" name="child_num"> -->
								<select name="child_num" id="child_num">
																	<option value="0"  selected="selected">0</option>
																	<option value="1" >1</option>
																	<option value="2" >2</option>
								
								</select>
							</span>
						</div>
						<div class="eat_list">
							<span class="input-form">
								<strong class="inptitle">Breakfast</strong>
								<!-- <input type="text" class="chk-person readonly" name="g_breakfast"> -->
								<select name="g_breakfast" id="g_breakfast">
									<option value="Y" >Y</option>
									<option value="N" >N</option>

								</select>
							</span>
						</div>
					</div>
					<button type="submit" class="reserv_btn">Search</button>
					</form>
				</div>
			</div>
			<div class="reservTab">
				<ul>
					<li ><a href="goods/goods.php?go_table=basic&gc_id=1&amp;inDate_end=2022-04-22&amp;sort=g_price&amp;sortodr=asc">낮은 가격순</a></li>
					<li ><a href="goods/goods.php?go_table=basic&gc_id=1&amp;inDate_end=2022-04-22&amp;sort=g_price&amp;sortodr=desc">높은 가격순</a></li>
				</ul>
			</div>
			<div class="sub_infotxt">
			<form name="f_inquiry" id="f_inquiry" method="post" action="bbs/write.php?bo_table=reservation">
			<input type="hidden" name="g_id" id="g_id" value="">
			<input type="hidden" name="start_date" id="start_date" value="">
			<input type="hidden" name="end_date" id="end_date" value="">
			<input type="hidden" name="a_num" id="a_num" value="">
			<input type="hidden" name="c_num" id="c_num" value="">
			<input type="hidden" name="total_price" id="total_price" value="">
			<input type="hidden" name="g_breakfast" id="g_breakfast" value="">
			<input type="hidden" name="g_room_num" id="g_room_num" value="">
			</form>
							<ul class="room_select">
									<input type="hidden" name="g_price_total" id="g_price_total" value="0">
					<li>
						<div class="thumb-list-img">
							<img src="data/goods/middle/1.jpeg" alt="" />
						</div>
						<div class="thumb-list-content">
							<h3 class="">Deluxe Room</h3>
							<div class="info_res">
								<span><strong>Room Size</strong>45m<sup>2</sup></span>
								 <span><strong>Available</strong>$69</span>
							</div>
							<p>Total Price Room<span>$0</span></p>
						</div>
						<div class="thumb-list-btn btn-area">
																		<!-- <a href="bbs/write.php?bo_table=reservation" class="btn gray">Select</a> -->
							<a href="bbs/write.php?bo_table=reservation" class="btn brown" onclick="form_submit(1,0); return false;">Select</a>
							<a href="#" class="btn black" onclick="return false;">Close</a>
																	</div>
					</li>
									<input type="hidden" name="g_price_total" id="g_price_total" value="0">
					<li>
						<div class="thumb-list-img">
							<img src="data/goods/middle/5.jpeg" alt="" />
						</div>
						<div class="thumb-list-content">
							<h3 class="">Palor Suite Room</h3>
							<div class="info_res">
								<span><strong>Room Size</strong>70m<sup>2</sup></span>
								 <span><strong>Available</strong>$140</span>
							</div>
							<p>Total Price Room<span>$0</span></p>
						</div>
						<div class="thumb-list-btn btn-area">
																		<a href="#" class="btn gray" onclick="return false;">Close</a>
																	</div>
					</li>
									<input type="hidden" name="g_price_total" id="g_price_total" value="0">
					<li>
						<div class="thumb-list-img">
							<img src="data/goods/middle/6.jpeg" alt="" />
						</div>
						<div class="thumb-list-content">
							<h3 class="">Executive Suite Room</h3>
							<div class="info_res">
								<span><strong>Room Size</strong>90m<sup>2</sup></span>
								 <span><strong>Available</strong>$200</span>
							</div>
							<p>Total Price Room<span>$0</span></p>
						</div>
						<div class="thumb-list-btn btn-area">
																		<a href="#" class="btn gray" onclick="return false;">Close</a>
																	</div>
					</li>
									<input type="hidden" name="g_price_total" id="g_price_total" value="0">
					<li>
						<div class="thumb-list-img">
							<img src="data/goods/middle/7.jpeg" alt="" />
						</div>
						<div class="thumb-list-content">
							<h3 class="">Plaza Suite Room</h3>
							<div class="info_res">
								<span><strong>Room Size</strong>118m<sup>2</sup></span>
								 <span><strong>Available</strong>$300</span>
							</div>
							<p>Total Price Room<span>$0</span></p>
						</div>
						<div class="thumb-list-btn btn-area">
																		<a href="#" class="btn gray" onclick="return false;">Close</a>
																	</div>
					</li>
									<input type="hidden" name="g_price_total" id="g_price_total" value="0">
					<li>
						<div class="thumb-list-img">
							<img src="data/goods/middle/8.jpeg" alt="" />
						</div>
						<div class="thumb-list-content">
							<h3 class="">Charmvit Suite Room</h3>
							<div class="info_res">
								<span><strong>Room Size</strong>157m<sup>2</sup></span>
								 <span><strong>Available</strong>$500</span>
							</div>
							<p>Total Price Room<span>$0</span></p>
						</div>
						<div class="thumb-list-btn btn-area">
																		<a href="#" class="btn gray" onclick="return false;">Close</a>
																	</div>
					</li>
									<input type="hidden" name="g_price_total" id="g_price_total" value="0">
					<li>
						<div class="thumb-list-img">
							<img src="data/goods/middle/9.jpeg" alt="" />
						</div>
						<div class="thumb-list-content">
							<h3 class="">Charmvit Suite  Room</h3>
							<div class="info_res">
								<span><strong>Room Size</strong>157m<sup>2</sup></span>
								 <span><strong>Available</strong>$500</span>
							</div>
							<p>Total Price Room<span>$0</span></p>
						</div>
						<div class="thumb-list-btn btn-area">
																		<!-- <a href="bbs/write.php?bo_table=reservation" class="btn gray">Select</a> -->
							<a href="bbs/write.php?bo_table=reservation" class="btn brown" onclick="form_submit(9,0); return false;">Select</a>
							<a href="#" class="btn black" onclick="return false;">Close</a>
																	</div>
					</li>
									<input type="hidden" name="g_price_total" id="g_price_total" value="0">
					<li>
						<div class="thumb-list-img">
							<img src="data/goods/middle/10.jpeg" alt="" />
						</div>
						<div class="thumb-list-content">
							<h3 class="">Plaza Suite  Room</h3>
							<div class="info_res">
								<span><strong>Room Size</strong>118m<sup>2</sup></span>
								 <span><strong>Available</strong>$300</span>
							</div>
							<p>Total Price Room<span>$0</span></p>
						</div>
						<div class="thumb-list-btn btn-area">
																		<!-- <a href="bbs/write.php?bo_table=reservation" class="btn gray">Select</a> -->
							<a href="bbs/write.php?bo_table=reservation" class="btn brown" onclick="form_submit(10,0); return false;">Select</a>
							<a href="#" class="btn black" onclick="return false;">Close</a>
																	</div>
					</li>
									<input type="hidden" name="g_price_total" id="g_price_total" value="0">
					<li>
						<div class="thumb-list-img">
							<img src="data/goods/middle/11.jpeg" alt="" />
						</div>
						<div class="thumb-list-content">
							<h3 class="">Executive Suite  Room</h3>
							<div class="info_res">
								<span><strong>Room Size</strong>90m<sup>2</sup></span>
								 <span><strong>Available</strong>$200</span>
							</div>
							<p>Total Price Room<span>$0</span></p>
						</div>
						<div class="thumb-list-btn btn-area">
																		<!-- <a href="bbs/write.php?bo_table=reservation" class="btn gray">Select</a> -->
							<a href="bbs/write.php?bo_table=reservation" class="btn brown" onclick="form_submit(11,0); return false;">Select</a>
							<a href="#" class="btn black" onclick="return false;">Close</a>
																	</div>
					</li>
									<input type="hidden" name="g_price_total" id="g_price_total" value="0">
					<li>
						<div class="thumb-list-img">
							<img src="data/goods/middle/12.jpeg" alt="" />
						</div>
						<div class="thumb-list-content">
							<h3 class="">Palor Suite Room</h3>
							<div class="info_res">
								<span><strong>Room Size</strong>70m<sup>2</sup></span>
								 <span><strong>Available</strong>$140</span>
							</div>
							<p>Total Price Room<span>$0</span></p>
						</div>
						<div class="thumb-list-btn btn-area">
																		<!-- <a href="bbs/write.php?bo_table=reservation" class="btn gray">Select</a> -->
							<a href="bbs/write.php?bo_table=reservation" class="btn brown" onclick="form_submit(12,0); return false;">Select</a>
							<a href="#" class="btn black" onclick="return false;">Close</a>
																	</div>
					</li>
									<input type="hidden" name="g_price_total" id="g_price_total" value="0">
					<li>
						<div class="thumb-list-img">
							<img src="data/goods/middle/13.jpeg" alt="" />
						</div>
						<div class="thumb-list-content">
							<h3 class="">Deluxe  Room</h3>
							<div class="info_res">
								<span><strong>Room Size</strong>45m<sup>2</sup></span>
								 <span><strong>Available</strong>$84</span>
							</div>
							<p>Total Price Room<span>$0</span></p>
						</div>
						<div class="thumb-list-btn btn-area">
																		<!-- <a href="bbs/write.php?bo_table=reservation" class="btn gray">Select</a> -->
							<a href="bbs/write.php?bo_table=reservation" class="btn brown" onclick="form_submit(13,0); return false;">Select</a>
							<a href="#" class="btn black" onclick="return false;">Close</a>
																	</div>
					</li>
								</ul>

											<div class="under_txt">
					<p>When long-term occuancy the room can be adjustes.</p>
					<p>When long-term stays for more than six monthes a 20% discount</p>
					<p>More than 1 year stays discount additional 20% from the amount of long-term stays for more than six months.</p>
					<p>Note : The above rate is subject to 5% service charge and 10% VAT.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
function form_submit(idx, price_sum){

	//var test = document.getElementsByName("g_room_num").value;
	if (($("#inDate_start").val() == "") || ($("#inDate_end").val() == ""))
	{
		alert("날짜를 선택해 주세요.");
		return;
	}
	if (($("#adults_num").val() == 0) && ($("#child_num").val() == 0))
	{
		alert("1명 이상 인원이 선택되어야 합니다.");
		return;
	}

	if($("#g_price_total").val() =="" || $("#g_price_total").val() == 0){
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

<!-- 사용스킨 :  -->

    </div>
</div>

<!-- } 콘텐츠 끝 -->


<!-- 하단 시작 { -->
<footer id="footer">
    <div class="footer_top">
        <div class="inner">
            <ul class="under">
                <li><a href="bbs/content.php?co_id=Room5">Charmvit Tower</a></li>
                <li><a href="bbs/content.php?co_id=Golf">Phoenix Golf Resort</a></li>
                <li><a href="bbs/content.php?co_id=Arirang">Arirang</a></li>
                <li><a href="bbs/content.php?co_id=Fuji">Fuji</a></li>
                <li><a href="bbs/content.php?co_id=Hoasen"> HoaSen </a></li>
                <li><a href="bbs/content.php?co_id=Facilities"> Born Spa</a></li>
            </ul>
            <div class="footer_sns">
                <a href="https://www.facebook.com/GrandPlazaHanoiHotel.Co.Ltd/" target="_blank"><img src="theme/gph/img/common/face.png" alt="페이스북"></a>
                <a href="https://www.instagram.com/grandplazahanoi_official/?hl=ko"  target="_blank"><img src="theme/gph/img/common/insta.png" alt="인스타"></a>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="inner">
            <div class="f_logo">
                <a href="http://gph.oktomato.net"><img src="theme/gph/img/common/f_logo.png" alt="그누보드5"></a>
            </div>
            <div class="info">
                <div class="footer-policy">
                    <ul>
                        <li><a href="bbs/content.php?co_id=about">ABOUT US</a></li>
                        <li><a href="bbs/content.php?co_id=privacy">개인정보처리방침</a></li>
                        <li><a href="bbs/content.php?co_id=provision">이용약관</a></li>
                        <li><a href="bbs/content.php?co_id=ethics">VOICE OF CUSTOMER</a></li>
                        <!-- <li><a href="bbs/board.php?bo_table=customer">VOICE OF CUSTOMER</a></li> -->
                        <li><a href="bbs/content.php?co_id=sitemap">SITEMAP</a></li>
                        <!-- <li><a href="#">채용</a></li> -->
                        <li><a href="bbs/content.php?co_id=contactus">CONTACT US</a></li>
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
                <img src="theme/gph/img/common/award.png" alt="푸터로고">
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
