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
										<a href="bbs/board.php?bo_table=room_pm" target="_self" class="">Quảng cáo</a>
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
												<div class="date_list">
													<span class="input-form border">
														<strong class="inptitle">Phòng</strong>
														<!-- <input type="text" class="chk-person readonly" name="g_name"> -->
														
														<?php
                                                        //$rcc_id = $result['room_class_id'];
                                                        $sql = "SELECT * FROM Room_Class";
                                                        $query = mysqli_query($conn, $sql);
                                                        $i = 0;
                                                        if ($query) {
                                                            echo "<select class=\"col-md-12\" name = \"room_class\">";
                                                            foreach ($query as $item) {
                                                                if ($item['status'] != 0) {
                                                                    $i++;
                                                                    $rc_name = $item['room_class_name'];
                                                                    $rc_id = $item['room_class_id'];
                                                                    // if ($rc_id == $rcc_id) {
                                                                    //     echo "<option value =\"$rc_id\" selected>" . $rc_name . "</option>";
                                                                    // } 
																	
                                                                        echo "<option value =\"$rc_id\">" . $rc_name . "</option>";
                                                                    
                                                                }
                                                            }
                                                            echo '</select>';
                                                        }
                                                        ?>
														<!-- <select name="g_room_num" id="g_room_num">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>

														</select> -->
													</span>
													<span class="input-form">
														<strong class="inptitle">Người lớn</strong>
														<!-- <input type="text" class="chk-person readonly" name="adults_num"> -->
														<select name="adults_num" id="adults_num">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</span>
													<span class="input-form">
														<strong class="inptitle">Trẻ em</strong>
														<!-- <input type="text" class="chk-person readonly" name="child_num"> -->
														<select name="child_num" id="child_num">
															<option value="0" selected="selected">0</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
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
										// Định dạng giá tiền
										if (!function_exists('currency_format')) {
											function currency_format($number, $suffix = 'đ')
											{
												if (!empty($number)) {
													return number_format($number, 0, ',', '.') . "{$suffix}";
												}
											}
										}
										$sql2 = "SELECT * FROM Room r inner join Room_Class rc on r.room_class_id = rc.room_class_id where r.status = 1";
										$query = mysqli_query($conn, $sql2);
										foreach ($query as $room) {
											if ($room['status'] != 0) {
												echo "
													<li>
														<div class=\"thumb-list-img\">
														<img src=\"data/goods/middle/1.jpeg\" alt=\"\" />
														</div>
														<div class=\"thumb-list-content\">
														<h3 class=\"\">" . $room['room_name'] . "</h3>
														<p class=\"info_res\">
															" . "Số người lớn: " . $room['room_adult_num'] . "
														</p>
														<p>
															" . "Số trẻ em: " . $room['room_child_num'] . "
														</p>
														<p>
															" . "Loại phòng: " . $room['room_class_name'] . "
														</p>
														<p>Tổng giá phòng<span>" . currency_format($room['room_price']) . "</span></p>
														</div>
														<div class=\"thumb-list-btn btn-area\">
														<!-- <a href=\"bbs/write.php?bo_table=reservation\" class=\"btn gray\">Chọn</a> -->
														<a href=\"bbs/write.php?bo_table=reservation\" class=\"btn brown\" onclick=\"form_submit(1,0); return false;\">Chọn</a>
														<a href=\"#\" class=\"btn black\" onclick=\"return false;\">Thoát</a>
														</div>
													</li>
												";
											}
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