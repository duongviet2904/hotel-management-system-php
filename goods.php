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
		var g5_url = "file:///Users/duongv/Documents/HaUI/PHP/GrandPlaza/index.html";
		var g5_bbs_url = "bbs";
		var g5_is_member = "";
		var g5_is_admin = "";
		var g5_is_mobile = "";
		var g5_bo_table = "";
		var g5_sca = "";
		var g5_editor = "";
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

	<!-- phần đầu { -->

	<header id="header">
		<div class="header_top">
			<div class="inner">
				<h1 class="logo">
					<a href="h">
						<img src="theme/gph/img/common/logo.png" alt="grand plaza hanoi hotel">
						<!--                     <img src="theme/gph/img/common/logo.png" alt="hotel logo">-->
					</a>
				</h1>
				<div class="langbox">
					<!--<a class="">language</a>-->
					<!-- Google dịch -->
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
					<!-- //Google dịch -->
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

						<li><a href="bbs/login.php">Dăng nhập</a></li>
						<li><a href="bbs/register.php">Tham gia</a></li>
						<!--                    <li><a href="bbs/faq.php">FAQ</a></li>-->
						<li><a href="reserve/reservation.php">Xác nhận đặt phòng</a></li>
						<!--                      <li><a href="bbs/qalist.php">Câu hỏi 1:1</a></li>-->
						<!--                    <li><a href="bbs/current_connect.php">Lượt truy cập 
2</a></li>-->
						<!--                    <li><a href="bbs/new.php">Bài báo</a></li>-->
						<li class="topm"><a href="bbs/content.php?co_id=about">Về Grand Plaza</a>
							<div>
								<a href="bbs/content.php?co_id=about">Về Grand Plaza</a>
								<a href="bbs/board.php?bo_table=notice">Tin tức</a>
								<a href="bbs/content.php?co_id=history">Quá trình phát triển</a>
								<a href="bbs/board.php?bo_table=customer">Dịch vụ</a>
								<a href="bbs/content.php?co_id=tourist">Các điểm du lịch lân cận</a>
								<a href="bbs/content.php?co_id=contactus">Địa chỉ</a>
								<a href="bbs/board.php?bo_table=customer2">Giải thưởng</a>
							</div>
						</li>

					</ul>
				</div>
				<!--Nút menu điện thoại-->
				<button class="menu_btn" type="button"></button>
				<!--//Nút menu điện thoại-->
			</div>
		</div>

		<div class="top_nav">
			<div class="inner">
				<h2 class="hidden">Menu chính</h2>
				<ul class="depth">
					<li class="" style="z-index:999">
						<a href="goods/goods.php?go_table=basic&gc_id=1" target="_self" class="gnb_1da">Đặt phòng</a>
						<ul class="depth2">
							<li class=""><a href="goods/goods.php?go_table=basic&gc_id=1" target="_self" class="">Đặt phòng</a></li>
							<li class=""><a href="reserve/reservation.php" target="_self" class="">Xác nhận đặt phòng</a></li>
						</ul>
					</li>
					<li class="" style="z-index:998">
						<a href="bbs/content.php?co_id=Room" target="_self" class="gnb_1da">Các loại phòng</a>
						<ul class="depth2">
							<!-- <li class=""><a href="bbs/content.php?co_id=Room" target="_self" class="">
								</a></li>
							<li class=""><a href="bbs/content.php?co_id=Room2" target="_self" class="">
									Phòng Parlour Suite
								</a></li>
							<li class=""><a href="bbs/content.php?co_id=Room3" target="_self" class="">Phòng Executive Suite </a></li>
							<li class=""><a href="bbs/content.php?co_id=Room4" target="_self" class="">Phòng Plaza Suite </a></li>
							<li class=""><a href="bbs/content.php?co_id=Room5" target="_self" class="">Phòng Charmvit Suite </a></li>
							<li class=""><a href="bbs/content.php?co_id=Room6" target="_self" class="">Phòng Presidential Suite </a></li>
							<li class=""><a href="bbs/content.php?co_id=Room7" target="_self" class="">Phòng Royal Suite </a></li> -->
							<?php
							include('config.php');
							$sql = "SELECT * FROM room_class";
							$query = mysqli_query($conn, $sql);
							foreach ($query as $item) {
								echo "<li class=\"\"><a href=\"bbs/content.php?co_id=" . $item['room_class_id'] . "\" target=\"_self\"> " . $item['room_class_id'] .  "</a></li>";
							}

							?>
						</ul>
					</li>
					<li class="" style="z-index:997">
						<a href="bbs/board.php?bo_table=room_pm" target="_self" class="gnb_1da">Quảng cáo</a>
						<ul class="depth2">
							<li class=""><a href="bbs/board.php?bo_table=room_pm" target="_self" class="">Quảng cáo</a></li>
						</ul>
					</li>
					<li class="" style="z-index:996">
						<a href="bbs/content.php?co_id=Dining" target="_self" class="gnb_1da">Ẩm thực</a>
						<ul class="depth2">
							<li class=""><a href="bbs/content.php?co_id=Dining" target="_self" class="">Ẩm thực</a></li>
							<li class=""><a href="bbs/content.php?co_id=LeJardin" target="_self" class="">LeJardin</a></li>
							<li class=""><a href="bbs/content.php?co_id=Grand" target="_self" class="">Phoenix Coffee & Dessert</a></li>
							<li class=""><a href="bbs/content.php?co_id=Fuji" target="_self" class="">Fuji</a></li>
							<li class=""><a href="bbs/content.php?co_id=Arirang" target="_self" class="">Arirang</a></li>
							<li class=""><a href="bbs/content.php?co_id=Hoasen" target="_self" class="">Hoasen</a></li>
							<li class=""><a href="bbs/content.php?co_id=Lounge" target="_self" class="">Executive Club Lounge</a></li>
						</ul>
					</li>
					<li class="" style="z-index:995">
						<a href="bbs/content.php?co_id=Facilities" target="_self" class="gnb_1da">Dịch vụ tiện ích</a>
						<ul class="depth2">
							<li class=""><a href="bbs/content.php?co_id=Facilities" target="_self" class="">Von Spa</a></li>
							<li class=""><a href="bbs/content.php?co_id=Fitness" target="_self" class="">Câu lạc bộ thể hình</a></li>
							<li class=""><a href="bbs/content.php?co_id=Pool" target="_self" class="">Bể bơi</a></li>
							<li class=""><a href="bbs/content.php?co_id=Golf" target="_self" class="">Học viện golf</a></li>
							<li class=""><a href="bbs/content.php?co_id=Plaza" target="_self" class="">Vegas Plaza</a></li>
						</ul>
					</li>
					<li class="" style="z-index:994">
						<a href="bbs/content.php?co_id=Wedding" target="_self" class="gnb_1da">Tiệc cưới</a>
						<ul class="depth2">
							<li class=""><a href="bbs/content.php?co_id=Wedding" target="_self" class="">Sảnh tiệc cưới</a></li>
							<li class=""><a href="bbs/write.php?bo_table=form" target="_self" class="">Tư vấn hôn lễ</a></li>
						</ul>
					</li>
					<li class="" style="z-index:993">
						<a href="bbs/content.php?co_id=Convention" target="_self" class="gnb_1da">Tiệc và hội nghị</a>
						<ul class="depth2">
							<li class=""><a href="bbs/content.php?co_id=Convention" target="_self" class="">Sảnh Millennium</a></li>
							<li class=""><a href="bbs/content.php?co_id=Convention2" target="_self" class="">Sảnh Crystal</a></li>
							<li class=""><a href="bbs/content.php?co_id=Convention3" target="_self" class="">Sảnh Windsor</a></li>
							<li class=""><a href="bbs/content.php?co_id=Convention4" target="_self" class="">Sảnh Sapphire</a></li>
							<li class=""><a href="bbs/content.php?co_id=Convention5" target="_self" class="">Sảnh Athens</a></li>
							<li class=""><a href="bbs/content.php?co_id=Convention6" target="_self" class="">Sảnh Mont Blanc</a></li>
							<li class=""><a href="bbs/content.php?co_id=Convention7" target="_self" class="">Tổ dịch vụ văn phòng</a></li>
							<li class=""><a href="bbs/write.php?bo_table=convs_form" target="_self" class="">Tư vấn tiệc và hội nghị</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="bg"></div>
		<div class="allmenu">
			<ul id="lnb_m">
				<li>
					<a href="goods/goods.php?go_table=basic&gc_id=1" title="Reservation">Đặt phòng</a>
					<ul class="dep_meun">
						<li><a href="goods/goods.php?go_table=basic&gc_id=1" title="room reservation">Đặt phòng</a></li>
						<li><a href="reserve/reservation.php" title="reservation confirmation">Xác nhận đặt phòng</a></li>
					</ul>
				</li>
				<li>
					<a href="bbs/content.php?co_id=Room" title="Deluxe Room" title="rooms">Các loại phòng</a>
					<ul class="dep_meun">
						<li><a href="bbs/content.php?co_id=Room" title="Deluxe Room">Phòng Deluxe</a></li>
						<li><a href="bbs/content.php?co_id=Room2" title="Parlour Suite Room">Phòng Parlour Suite</a></li>
						<li><a href="bbs/content.php?co_id=Room3" title="Executive Suite Room">Phòng Executive Suite</a></li>
						<li><a href="bbs/content.php?co_id=Room4" title="Plaza Suite Room">Phòng Plaza Suite</a></li>
						<li><a href="bbs/content.php?co_id=Room5" title="Charmvit Suite Room">Phòng Charmvit Suite</a></li>
						<li><a href="bbs/content.php?co_id=Room6" title="Presidential Suite Room">Phòng Presidential Suite</a></li>
						<li><a href="bbs/content.php?co_id=Room7" title="Charmvit Suite Room">Phòng Charmvit Suite</a></li>
					</ul>
				</li>
				<li>
					<a href="bbs/board.php?bo_table=room_pm" title="promotion">Quảng cáo</a>
					<ul class="dep_meun">
						<li><a href="bbs/board.php?bo_table=room_pm" title="promotion">Quảng cáo<< /a>
						</li>
					</ul>
				</li>
				<li>
					<a href="bbs/content.php?co_id=Dining" title="Dining">Ẩm thực</a>
					<ul class="dep_meun">
						<li><a href="bbs/content.php?co_id=Dining" title="Grand Coffee">Ẩm thực</a></li>
						<li><a href="bbs/content.php?co_id=LeJardin" title="LeJardin">LeJardin</a></li>
						<li><a href="bbs/content.php?co_id=Grand" title="Grand Coffee">Grand Coffee</a></li>
						<li><a href="bbs/content.php?co_id=Fuji" title="Fuji">Fuji</a></li>
						<li><a href="bbs/content.php?co_id=Arirang" title="Arirang">Arirang</a></li>
						<li><a href="bbs/content.php?co_id=Hoasen" title="Hoasen">Hoasen</a></li>
						<li><a href="bbs/content.php?co_id=Lounge" title="Executive Club Lounge">Executive Club Lounge</a></li>
					</ul>
				</li>
				<li>
					<a href="bbs/content.php?co_id=Facilities" title="Fitness & Spa">Thể hình & Spa</a>
					<ul class="dep_meun">
						<li><a href="bbs/content.php?co_id=Facilities" title="Born Spa">Born Spa</a></li>
						<li><a href="bbs/content.php?co_id=Fitness" title="Fitness Club">Câu lạc bộ thể hình</a></li>
						<li><a href="bbs/content.php?co_id=Golf" title="LeJaGolf Academy">Học viện golf</a></li>
						<li><a href="#" title="Vegas Plaza">Vegas Plaza</a></li>
					</ul>
				</li>
				<li>
					<a href="bbs/content.php?co_id=Wedding" title="Wedding">Tiệc cưới</a>
					<ul class="dep_meun">
						<li><a href="bbs/content.php?co_id=Wedding" title="wedding hall">Sảnh tiệc cưới</a></li>
						<li><a href="bbs/write.php?bo_table=form" title="wedding consulting">Tư vấn hôn lễ</a></li>
					</ul>
				</li>
				<li>
					<a href="bbs/content.php?co_id=Convention" title="Convention">Hội nghị</a>
					<ul class="dep_meun">
						<li><a href="bbs/content.php?co_id=Convention" title="Millennium hall">Sảnh Millennium</a></li>
						<li><a href="bbs/content.php?co_id=Convention2" title="Crystal hall">Sảnh Crystal</a></li>
						<li><a href="bbs/content.php?co_id=Convention3" title="Windsor hall">Sảnh Windsor</a></li>
						<li><a href="bbs/content.php?co_id=Convention4" title="Sapphire">Sảnh Sapphire</a></li>
						<li><a href="bbs/content.php?co_id=Convention5" title="Athens hall">Sảnh Athens</a></li>
						<li><a href="bbs/content.php?co_id=Convention6" title="Mont Blanc hall">Sảnh Mont Blanc</a></li>
						<li><a href="bbs/content.php?co_id=Convention7" title="business center">Tổ dịch vụ văn phòng</a></li>
						<li><a href="bbs/write.php?bo_table=convs_form" title="banquet and convention consulting">Tư vấn tiệc và hội nghị</a></li>
					</ul>
				</li>
				<li>
					<a href="#" title="Wedding">Về Grand Plaza</a>
					<ul class="dep_meun">
						<li><a href="bbs/content.php?co_id=about">Về Grand Plaza</a></li>
						<li><a href="bbs/board.php?bo_table=notice">Tin tức</a></li>
						<li><a href="bbs/content.php?co_id=history">Quá trình phát triển</a></li>
						<li><a href="bbs/board.php?bo_table=customer">Dịch vụ</a></li>
						<li><a href="bbs/content.php?co_id=tourist">Các điểm du lịch lân cận</a></li>
						<li><a href="bbs/content.php?co_id=contactus">Địa chỉ</a></li>
						<li> <a href="bbs/board.php?bo_table=customer2">Giải thưởng</a></li>
					</ul>
				</li>
			</ul>
			<div class="bottom">
				<ul class="clearfix">
					<li><a href="bbs/login.php">Đăng nhập</a></li>
					<li><a href="bbs/register.php">Tham gia</a></li>
					<li><a href="reserve/reservation.php">Xác nhận đặt phòng</a></li>
					<li class="lag"><a href="#">Ngôn ngữ</a>
						<ul class="depth_lang">
							<li>
								<a href="">Tiếng Việt</a>
							</li>
							<li>
								<a href="">English</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div class="allmenu_bg"></div>
	</header>
	<!-- } hết phần đầu -->


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

				<section class="snb">
					<div class="inner">
						<ul class="location">
							<li class="locHome">
								<a href="#" title="Home">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="1em" height="1EM" viewBox="0 0 510 510" xml:space="preserve">
										<g id="home">
											<polygon points="204,471.75 204,318.75 306,318.75 306,471.75 433.5,471.75 433.5,267.75 510,267.75 255,38.25 0,267.75     76.5,267.75 76.5,471.75   " fill="#858585" />
										</g>
									</svg>
								</a>
							</li>
							<li class="loc loc_1">
								<!-- 1depth -->
								<a href="#">Đặt phòng</a>
								<ul class="loc_depth2">
									<li class="">
										<a href="goods/goods.php?go_table=basic&gc_id=1" target="_self" class="">Đặt phòng</a>
									</li>
									<li class="">
										<a href="bbs/content.php?co_id=Room" target="_self" class="">Các loại phòng</a>
									</li>
									<li class="">
										<a href="bbs/board.php?bo_table=room_pm" target="_self" class="">Quảng cáo<< /a>
									</li>
									<li class="">
										<a href="bbs/content.php?co_id=Dining" target="_self" class="">Ẩm thực</a>
									</li>
									<li class="">
										<a href="bbs/content.php?co_id=Facilities" target="_self" class="">Dịch vụ tiện ích</a>
									</li>
									<li class="">
										<a href="bbs/content.php?co_id=Wedding" target="_self" class="">Tiệc cưới</a>
									</li>
									<li class="">
										<a href="bbs/content.php?co_id=Convention" target="_self" class="">Tiệc và hội nghị</a>
									</li>
								</ul>
							</li>
							<li class="loc loc_2">
								<!-- 2depth -->
								<a href="#">Đặt phòng</a>
								<ul class="loc_depth2">
									<li class="on" style="z-index:999">
										<a href="goods/goods.php?go_table=basic&gc_id=1" target="_self" class="">Đặt phòng</a>
									</li>
									<li class="" style="z-index:998">
										<a href="reserve/reservation.php" target="_self" class="">Xác nhận đặt phòng</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</section>
				<section id="sub_page">
					<!-- <div class="sub_tit">
                      <h2>Đặt phòng</h2>
                  </div> -->

					<!-- <link rel="stylesheet" href="skin/goods/basic/style.css" /> -->

					<section id="contents">
						<h1>Đặt phòng</h1>

						<!-- <div class="product_type1 inner">
		<h2 class="hide">Đặt phòng<span class="sound_only"> Danh sách</span></h2>


	</div> -->
						<div class="sub1_wrap">
							<div class="inner">
								<div class="txtBox">
									<ul>
										<li>Lịch trình: ~2022-04-22 (19103.625 đêm)</li>
										<li>Nhân viên: Phòng, người lớn, trẻ em</li>
										<li>Bữa sáng: Không</li>
										<!-- <li>Lịch trình: 2020-05-14~2020-05-15 (1 đêm)</li>
					<li>Nhân viên: Phòng 1, 성인 1, 어린이 0 </li>
					<li>Bữa sáng: Có/Không</li> -->
									</ul>
								</div>
								<div class="cont_info reser inner">
									<p class="res_txt">Chào mừng bạn đến với Hà Nội, Việt Nam, một trong những nơi đẹp nhất thế giới, được UNESCO chọn là di sản thiên nhiên thế giới và đề cử 7 kỳ quan thế giới mới.</p>
									<p class="res_txt">Khách sạn Grand Plaza Hà Nội có tổng cộng 618 phòng, tương đương với khách sạn 7 sao cùng nội thất đẹp và tân tiến, không thua kém khách sạn quốc tế nào trên thế giới. </p>
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
									<h3 class="subject">Các thông tin cơ bản</h3>
									<div class="res_search">
										<form name="fsearch" method="get">
											<input type="hidden" name="go_table" value="basic">
											<input type="hidden" name="gc_id" value="1">
											<div class="select_check">
												<div class="date_list">
													<span class="input-form">
														<strong class="inptitle">Check-in</strong>
														<input type="text" class="form-control calendar chk-date readonly" name="inDate_start" id="inDate_start" value="">
													</span>
													<span class="input-form">
														<strong class="inptitle">Check-out</strong>
														<input type="text" class=" form-control calendar chk-date readonly" name="inDate_end" id="inDate_end" value="2022-04-22">
													</span>
												</div>
												<div class="person_list">
													<span class="input-form border">
														<strong class="inptitle">Phòng</strong>
														<!-- <input type="text" class="chk-person readonly" name="g_name"> -->
														<select name="g_room_num" id="g_room_num">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>

														</select>
													</span>
													<span class="input-form">
														<strong class="inptitle">Người lớn</strong>
														<!-- <input type="text" class="chk-person readonly" name="adults_num"> -->
														<select name="adults_num" id="adults_num">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>

														</select>
													</span>
													<span class="input-form">
														<strong class="inptitle">Trẻ em</strong>
														<!-- <input type="text" class="chk-person readonly" name="child_num"> -->
														<select name="child_num" id="child_num">
															<option value="0" selected="selected">0</option>
															<option value="1">1</option>
															<option value="2">2</option>

														</select>
													</span>
												</div>
												<div class="eat_list">
													<span class="input-form">
														<strong class="inptitle">Bữa sáng</strong>
														<!-- <input type="text" class="chk-person readonly" name="g_breakfast"> -->
														<select name="g_breakfast" id="g_breakfast">
															<option value="Y">Y</option>
															<option value="N">N</option>

														</select>
													</span>
												</div>
											</div>
											<button type="submit" class="reserv_btn">Tìm kiếm</button>
										</form>
									</div>
								</div>
								<div class="reservTab">
									<ul>
										<li><a href="goods/goods.php?go_table=basic&gc_id=1&amp;inDate_end=2022-04-22&amp;sort=g_price&amp;sortodr=asc">Giá thấp</a></li>
										<li><a href="goods/goods.php?go_table=basic&gc_id=1&amp;inDate_end=2022-04-22&amp;sort=g_price&amp;sortodr=desc">Giá cao</a></li>
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
										<?php 
										include('config.php');
										$sql2 = "SELECT * FROM room";
										$query = mysqli_query($conn, $sql2);
										foreach($query as $room) {
											echo "
											<li>
											<div class=\"thumb-list-img\">
											<img src=\"data/goods/middle/1.jpeg\" alt=\"\" />
										</div>
										<div class=\"thumb-list-content\">
											<h3 class=\"\">" . $room['room_name'] . "</h3>
											<div class=\"info_res\">
												" . $room['room_description'] . "
											</div>
											<p>Tổng giá phòng<span>$0</span></p>
										</div>
										<div class=\"thumb-list-btn btn-area\">
											<!-- <a href=\"bbs/write.php?bo_table=reservation\" class=\"btn gray\">Chọn</a> -->
											<a href=\"bbs/write.php?bo_table=reservation\" class=\"btn brown\" onclick=\"form_submit(1,0); return false;\">Chọn</a>
											<a href=\"#\" class=\"btn black\" onclick=\"return false;\">Thoát</a>
										</div>
											</li>
											";

										}	
										?>
									</ul>

									<div class="under_txt">
										<p>Khi khách ở lâu dài, phòng có thể được điều chỉnh.</p>
										<p>Khi lưu trú dài hạn hơn sáu tháng, giảm giá 20%.</p>
										<p>Lưu trú trên 1 năm được chiết khấu thêm 20% từ số tiền lưu trú dài hạn trên sáu tháng.</p>
										<p>Lưu ý: Giá trên chưa bao gồm 5% phí phục vụ và 10% VAT.</p>
									</div>
								</div>
							</div>
						</div>
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