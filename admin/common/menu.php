<div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Dashboard</li>
                                <li>
                                    <a href=".././index.php" <?php echo ($page == 'dashboard') ? "class='mm-active'" : ""; ?> >
                                        <i class="metismenu-icon pe-7s-home"></i>
                                        Admin Dashboard
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Quản lý chức năng</li>
                                <li <?php echo ($page == 'room-management' || $page == 'add-room') ? "class='mm-active'" : ""; ?> >
                                    <a href="../room-management/room-management.php">
                                        <i class="metismenu-icon pe-7s-note"></i>
                                        Quản lí phòng
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'room-management' || $page =='add-room') ? "class='mm-show'" : ""; ?> >
                                        <li>
                                            <a href="../room-management/room-management.php" <?php echo ($page == 'room-management') ? "class='mm-active'" : ""; ?> >
                                                <i class="metismenu-icon">
                                                </i>Danh sách phòng
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../room-management/add-room.php" <?php echo ($page == 'add-room') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon"></i>
                                                Thêm phòng
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php echo ($page == 'room-class-management' || $page == 'add-room-class') ? "class='mm-active'" : ""; ?>>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-note"></i>
                                        Quản lí loại phòng
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'room-class-management' || $page == 'add-room-class') ? "class='mm-show'" : ""; ?>>
                                        <li>
                                            <a href="../room-class-management/room-class-management.php" <?php echo ($page == 'room-class-management') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Danh sách loại phòng
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../room-class-management/add-room-class.php" <?php echo ($page == 'add-room-class') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Thêm loại phòng
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php echo ($page == 'reservation-management' || $page == 'add-reservation' || $page == 'booking-management' || $page == 'paid-reservation' || $page == 'deleted-reservation') ? "class='mm-active'" : ""; ?>>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-note"></i>
                                        Quản lí đơn đặt phòng
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'reservation-management' || $page == 'add-reservation' || $page == 'booking-management' || $page == 'paid-reservation' || $page == 'deleted-reservation') ? "class='mm-show'" : ""; ?>>
                                        <li>
                                            <a href="../reservation/add-reservation.php"  <?php echo ($page == 'add-reservation') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Thêm đơn đặt phòng
                                            </a>
                                        </li>
                                        <li >
                                            <a href="../reservation/booking-management.php" <?php echo ($page == 'booking-management') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>DS đơn chưa duyệt
                                            </a>
                                        </li>
                                        <li >
                                            <a href="../reservation/reservation-management.php" <?php echo ($page == 'reservation-management') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>DS đơn đã duyệt
                                            </a>
                                        </li>
                                        <li >
                                            <a href="../reservation/paid-reservation.php" <?php echo ($page == 'paid-reservation') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>DS đơn đã thanh toán
                                            </a>
                                        </li>
                                        <li >
                                            <a href="../reservation/deleted-reservation.php" <?php echo ($page == 'deleted-reservation') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>DS đơn đã xoá
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php echo ($page == 'service-management' || $page == 'add-service') ? "class='mm-active'" : ""; ?>>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-note"></i>
                                        Quản lí dịch vụ
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'service-management' || $page == 'add-service') ? "class='mm-show'" : ""; ?>>
                                        <li>
                                            <a href="../service-management/service-management.php" <?php echo ($page == 'service-management') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Danh sách dịch vụ
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../service-management/add-service.php" <?php echo ($page == 'add-service') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Thêm dịch vụ
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php echo ($page == 'employee-management' || $page == 'add-employee') ? "class='mm-active'" : ""; ?>>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-id"></i>
                                        Quản lí nhân viên
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'employee-management' || $page == 'add-employee') ? "class='mm-show'" : ""; ?>>
                                        <li>
                                            <a href="../employee/employee-management.php"  <?php echo ($page == 'employee-management') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Danh sách nhân viên
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../employee/add-employee.php" <?php echo ($page == 'add-employee') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Thêm nhân viên
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php echo ($page == 'customer-management' || $page == 'add-customer') ? "class = 'mm-active'" : ""; ?>>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-id"></i>
                                        Quản lí khách hàng
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'customer-management' || $page == 'add-customer') ? "class = 'mm-show'" : ""; ?>>
                                        <li>
                                            <a href="../customer/customer-management.php" <?php echo ($page == 'customer-management') ? "class = 'mm-active'" : ""; ?>>
                                                <i class="metismenu-icon ">
                                                </i>Danh sách khách hàng
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../customer/add-customer.php"  <?php echo ($page == 'add-customer') ? "class = 'mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Thêm khách hàng
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php echo ($page == 'transaction-management' || $page == 'deleted-transaction') ? "class = 'mm-active'" : ""; ?>>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-cash"></i>
                                        Quản lí giao dịch
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'transaction-management' || $page == 'deleted-transaction') ? "class = 'mm-show'" : ""; ?>>
                                        <li>
                                            <a href="../transaction/transaction-management.php" <?php echo ($page == 'transaction-management') ? "class = 'mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Danh sách giao dịch
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../transaction/deleted-transaction.php" <?php echo ($page == 'deleted-transaction') ? "class = 'mm-active'" : ""; ?>>
                                                <i class="metismenu-icon" >
                                                </i>DS giao dịch đã xoá
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>