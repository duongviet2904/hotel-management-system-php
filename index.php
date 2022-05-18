<!doctype html>
<html lang="ko">
<head>
    <title>GrandPlaza|Home</title>
    <?php include("FE-common/header.php") ?>
<!--<link rel="stylesheet" href="theme/gph/css/default.css?ver=161020">-->
<!--[if lte IE 8]>
<script src="js/html5.js"></script>
<![endif]-->

<!-- <link rel="stylesheet" href="theme/gph/css/jquery-ui.css"> -->
<!--<link rel="stylesheet" href="/css/sub.css?v=1">-->
</head>
<body>

<!-- 상단 시작 { -->
<?php include("FE-common/menu.php") ?>

<!-- } 상단 끝 -->


<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container">
        <section id="main">
        <div class="main_visual_wrap">
            <div class="m_visual_txt">
                <p><img src="theme/gph/img/main/visual_txt.png" alt="텍스트"></p>
            </div>
            <div class="main_visual">
							<div>
					<div class="img-box">
						<a href="">
						<img src="data/banner/2.jpeg" >
						</a>
					</div>
			   </div>

			               <!-- <div>
                    <div class="img-box">
                        <img src="theme/gph//img/main/main_visual1.jpeg" alt="비주얼영역 배경이미지01" />
                    </div>
               </div>
               <div>
                    <div class="img-box">
                            <img src="theme/gph//img/main/main_visual2.jpeg" alt="비주얼영역 배경이미지02" />
                    </div>
                </div> -->
            </div>
        </div>
	        <div class="section1">
            <div class="quick">
                <div class="inner">
                    <div class="search_hotel">
                        <p>Book Your <span>ROOMS</span></p>
                    </div>
                    <form name="fsearch" method="get" action="goods/goods.php?go_table=basic&gc_id=1">
					<input type="hidden" name="go_table" value="basic">
					<input type="hidden" name="gc_id" value="1">
					<div class="select_check">
						<div class="date_list">
							<span class="input-form">
								<strong class="inptitle">CHECK-IN</strong>
								<!-- <input type="text" class="form-control calendar chk-date readonly" name="inDate_start" id="inDate_start" value="" > -->
								<input type="text" class="form-control calendar chk-date readonly" name="inDate_start" id="inDate_start" value="" >
							</span>
							<span class="input-form">
								<strong class="inptitle">CHECK-OUT</strong>
								<input type="text" class=" form-control calendar chk-date readonly" name="inDate_end" id="inDate_end" value="2022-04-21">
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
            <!--quick end-->
            <div class="sec1_cont">
                <div class="inner">
                    <div class="left">
                        <ul>
                           <li>
                               <div class="scale">
                                    <a href="bbs/content.php?co_id=Dining">
                                      <div class="scale_img">
                                        <img src="theme/gph//img/main/dining02.jpeg" alt="dining" />
                                    </div>
                                      <p class="sca_txt">Dining</p>
                                    </a>
                               </div>
                            </li>
                           <li>
                                <div class="scale sca2">
                                    <a href="bbs/content.php?co_id=Wedding">
                                        <div class="scale_img">
                                        <img src="theme/gph//img/main/wedding03.jpeg" alt="wedding" />
                                      </div>
                                        <p class="sca_txt">Wedding</p>
                                    </a>
                                </div>
                            </li>
                           <li>
                                <div class="scale">
                                    <a href="bbs/content.php?co_id=Convention">
                                      <div class="scale_img">
                                        <img src="theme/gph/img/main/convention04.jpeg" alt="convention" />
                                      </div>
                                        <p class="sca_txt">Convention</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="right">
                        <div class="mid_slide">
                            <div class="in">
                                <img src="theme/gph/img/main/mid_s1.jpeg" alt="중간슬라이드"/>
                                <div class="text_info">
                                    <p>Royal Suite Room</p>
                                    <ul>
                                        <li><p>Bed type King/Twin</p></li>
                                        <li><p>Capacity 2 persons </p></li>
                                        <li><p>View City </p></li>
                                        <li><p>Room size 60~65m2 </p></li>
                                    </ul>
                                    <a href="#" class="more_btn">more</a>
                                </div>
                            </div>
                            <div class="in">
                                <img src="theme/gph/img/main/mid_s1.jpeg" alt="중간슬라이드"/>
                                <div class="text_info">
                                    <p>Royal Suite Room</p>
                                    <ul>
                                        <li><p>Bed type King/Twin</p></li>
                                        <li><p>Capacity 2 persons </p></li>
                                        <li><p>View City </p></li>
                                        <li><p>Room size 60~65m2 </p></li>
                                    </ul>
                                    <a href="#" class="more_btn">more</a>
                                </div>
                            </div>
                            <div class="in">
                                <img src="theme/gph/img/main/mid_s1.jpeg" alt="중간슬라이드"/>
                                <div class="text_info">
                                    <p>Royal Suite Room</p>
                                    <ul>
                                        <li><p>Bed type King/Twin</p></li>
                                        <li><p>Capacity 2 persons </p></li>
                                        <li><p>View City </p></li>
                                        <li><p>Room size 60~65m2 </p></li>
                                    </ul>
                                    <a href="#" class="more_btn">more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section2">
            <div class="inner">
                <div class="div_cont">
                    <h3 class="title">Promotion</h3>
                </div>
                <div class="pro_list">
					
<div class="list_box">
<!-- 프로모션 최신글 시작 { -->
		<div class="list">
		<div class="img">
			<a href="bbs/board.php?bo_table=room_pm&amp;wr_id=1">
				<img src="data/file/room_pm/thumb-1935549773_c1HCbODJ_2c3e0971a31e93c93e8dd5f0254ec7a38b31d8c9_376x270.jpeg" onerror=" ">
				<div class="cover"></div>
			</a>
		</div>
		<div class="txt">
			<h5 class="title">Deluxe Room</h5>
		   <p class="m_sub_tit">오전 조식 룸서비스 가능</p>
		   <p class="date">예약기간: 2019.06.06~2019.07.08</p>
			 <p class="date">투숙기간: 2019.06.06~2019.07.08</p>
		</div>
	</div>

	</div>
                    <!-- <div class="list_box">
                        <div class="list">
                             <div class="img">
                                 <a href="#">
                                     <img src="theme/gph/img/main/pro_img1.jpeg" alt="promotion1"/>
                                     <div class="cover"></div>
                                </a>
                             </div>
                             <div class="txt">
                                <p class="m_sub_tit">Room & Breakfast</p>
                                <h5 class="title">Winter Vacation Package</h5>
                                <p class="date">2019.02.13 ~2019.03.31</p>
                             </div>
                        </div>
                        <div class="list">
                            <div class="img">
                                <a href="#">
                                    <img src="theme/gph/img/main/pro_img2.jpeg" alt="promotion2"/>
                                    <div class="cover"></div>
                                </a>
                            </div>
                            <div class="txt">
                               <p class="m_sub_tit">Room & Breakfast</p>
                               <h5 class="title">Winter Vacation Package</h5>
                               <p class="date">2018.12.13 ~2019.02.20</p>
                            </div>
                       </div>
                       <div class="list">
                            <div class="img">
                                <a href="#">
                                    <img src="theme/gph/img/main/pro_img3.jpeg" alt="promotion2"/>
                                    <div class="cover"></div>
                                </a>
                            </div>
                            <div class="txt">
                            <p class="m_sub_tit">Room & Breakfast</p>
                            <h5 class="title">2019 Bed & Breakfast Package</h5>
                            <p class="date">2018.12.13 ~2019.02.20</p>
                            </div>
                        </div>
                        <div class="list">
                            <div class="img">
                                <a href="#">
                                    <img src="theme/gph/img/main/pro_img1.jpeg" alt="promotion1"/>
                                    <div class="cover"></div>
                                </a>
                            </div>
                            <div class="txt">
                                <p class="m_sub_tit">Room & Breakfast</p>
                                <h5 class="title">Winter Vacation Package</h5>
                                <p class="date">2019.02.13 ~2019.03.31</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="section3">
            <div class="center_mode">
							<div class="stage">
                    <div class="img">
						<a href="bbs/board.php?bo_table=notice&wr_id=6">
                        <img src="data/banner/4.jpeg"/>
						</a>
                    </div>
                    <div class="stage_txt">
                        <p class="name">SPECIAL PROMOTION!</p>
                        <p class="btit">For those who plan their stay with no rush, if you…</p>
                            <a href="#" class="more_btn">more</a>
                    </div>
                </div>


							<div class="stage">
                    <div class="img">
						<a href="#;">
                        <img src="data/banner/3.jpeg"/>
						</a>
                    </div>
                    <div class="stage_txt">
                        <p class="name">The Place To Meet!</p>
                        <p class="btit">Grand Plaza
 Hanoi Hotel
 For more 
information…</p>
                            <a href="#" class="more_btn">more</a>
                    </div>
                </div>


			                <!-- <div class="stage">
                    <div class="img">
                        <img src="theme/gph/img/main/m_center1.jpeg" alt="centermode"/>
                    </div>
                    <div class="stage_txt">
                        <p class="name">The Place To Meet!</p>
                        <p class="btit">Grand Plaza Hanoi Hotel
                                For more information or
                                make a reservation.</p>
                            <a href="#" class="more_btn">more</a>
                    </div>
                </div>
                <div class="stage">
                    <div class="img">
                        <img src="theme/gph/img/main/m_center1.jpeg" alt="centermode"/>
                    </div>
                    <div class="stage_txt">
                        <p class="name">The Place To Meet!</p>
                        <p class="btit">Grand Plaza Hanoi Hotel
                                For more information or
                                make a reservation</p>
                            <a href="#" class="more_btn">more</a>
                    </div>
                </div>
                <div class="stage">
                    <div class="img">
                        <img src="theme/gph/img/main/m_center1.jpeg" alt="centermode"/>
                    </div>
                    <div class="stage_txt">
                        <p class="name">The Place To Meet!</p>
                        <p class="btit">Grand Plaza Hanoi Hotel
                                For more information or
                                make a reservation.</p>
                            <a href="#" class="more_btn">more</a>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="section4">
            <div class="inner">
                <div class="not_left">
                    <h4 class="normal">News & Event</h4>
                    <a href="bbs/board.php?bo_table=notice" class="btn_more">더보기</a>
					
<ul class="notice_li">
<!-- 뉴스 최신글 시작 { -->
		<li>
		<a href="bbs/board.php?bo_table=notice&amp;wr_id=29">
			<div class="img">
		
			<img src="data/file/notice/thumb-3554257410_CbuWnRM6_074fe02020862e5e55f194252ee4b913b6c15364_160x100.jpeg" onerror="">
			<!-- <img src="theme/gph/img/main/notice1.jpeg" alt=""/> -->
			</div>
			<div class="txt">
				<h5>참빛그룹, 베트남 첫 경마장 사업 허가 취득</h5>
				<p class="sub_txt">한국의 참빛그룹이 베트남의 첫 경마장 사업 허가를 받았다. 
이대봉 참빛그룹 회장은 14…</p>
				<p class="date_t">2020-02-17</p>
			</div>
		</a>
	</li>
	

		<li>
		<a href="bbs/board.php?bo_table=notice&amp;wr_id=28">
			<div class="img">
		
			<img src="data/file/notice/thumb-3554257410_uAdx7ekF_d65d4bef2337d4deed7124783371c2be8238cc2e_160x100.jpeg" onerror="">
			<!-- <img src="theme/gph/img/main/notice1.jpeg" alt=""/> -->
			</div>
			<div class="txt">
				<h5>이대봉 참빛그룹 회장, 베트남 전쟁열사 자녀에…</h5>
				<p class="sub_txt">이대봉 참빛그룹 회장(뒷줄 왼쪽에서 두 번째)은 지난 11일 베트남 공안부에서 베트남 전쟁…</p>
				<p class="date_t">2020-02-17</p>
			</div>
		</a>
	</li>
	

	</ul>
                    <!-- <ul class="notice_li">
                        <li>
                            <a href="#">
                                <div class="img"><img src="theme/gph/img/main/notice1.jpeg" alt=""/></div>
                                <div class="txt">
                                    <h5>Be registered in the Records Book of Vietnam</h5>
                                    <p class="sub_txt">Be registered in the Records Book of Vietnam</p>
                                    <p class="date_t">September. 18, 2018</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <div class="img"><img src="theme/gph/img/main/notice2.jpeg" alt=""/></div>
                                <div class="txt">
                                    <h5>GRAND PLAZA HANOI HOTEL was registered in t...</h5>
                                    <p class="sub_txt">GRAND PLAZA HANOI HOTEL was registered in the Records Book of Vietnam</p>
                                    <p class="date_t">September. 18, 2018</p>
                                </div>
                            </a>
                        </li>
                    </ul> -->
                </div>
                <div class="not_right">
                    <h4 class="normal">Location</h4>
                    <a href="bbs/content.php?co_id=contactus" class="btn_more">더보기</a>
                    <div class="loction">
                       <a href="bbs/content.php?co_id=contactus"> <img src="theme/gph/img/main/location.jpeg" alt=""/></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                <a href="https:/www.facebook.com/GrandPlazaHanoiHotel.Co.Ltd/" target="_blank"><img src="theme/gph/img/common/face.png" alt="페이스북"></a>
                <a href="https:/www.instagram.com/grandplazahanoi_official/?hl=ko"  target="_blank"><img src="theme/gph/img/common/insta.png" alt="인스타"></a>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="inner">
            <div class="f_logo">
                <a href="http:/gph.oktomato.net"><img src="theme/gph/img/common/f_logo.png" alt="그누보드5"></a>
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
