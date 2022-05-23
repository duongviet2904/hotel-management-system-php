<?php session_start(); ?>

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

                    <?php 
                        if(isset($_SESSION['username'])){
                            echo '<li><a href="logout.php">Đăng Xuất</a></li>';
                        }else{
                            echo '<li><a href="login.php">Đăng nhập</a></li>';
                        }
                    ?>
                    <li><a href="./registration.php">Đăng kí</a></li>
                    <!--                    <li><a href="bbs/faq.php">FAQ</a></li>-->
                    <li><a href=".//reservation.php">Đặt phòng</a></li>
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
                        $sql = "SELECT * FROM Room_Class";
                        $query = mysqli_query($conn, $sql);
                        foreach ($query as $item) {
                            echo "<li class=\"\"><a href=\"bbs/content.php?co_id=" . $item['room_class_name'] . "\" target=\"_self\"> " . $item['room_class_name'] .  "</a></li>";
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
                    <a href="bbs/content.php?co_id=Room" target="_self" class="gnb_1da">Dịch vụ tiện ích</a>
                    <ul class="depth2">
                    <?php
                        include('config.php');
                        $sql = "SELECT * FROM Service";
                        $query = mysqli_query($conn, $sql);
                        foreach ($query as $item) {
                            echo "<li class=\"\"><a href=\"bbs/content.php?co_id=" . $item['service_name'] . "\" target=\"_self\"> " . $item['service_name'] .  "</a></li>";
                        }
                    ?>
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
                    <li><a href="bbs/board.php?bo_table=room_pm" title="promotion">Quảng cáo< /a>
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