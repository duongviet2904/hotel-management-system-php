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
                                <li class="app-sidebar__heading">Qu???n l?? ch???c n??ng</li>
                                <li <?php echo ($page == 'room-management' || $page == 'add-room') ? "class='mm-active'" : ""; ?> >
                                    <a href="../room-management/room-management.php">
                                        <i class="metismenu-icon pe-7s-note"></i>
                                        Qu???n l?? ph??ng
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'room-management' || $page =='add-room') ? "class='mm-show'" : ""; ?> >
                                        <li>
                                            <a href="../room-management/room-management.php" <?php echo ($page == 'room-management') ? "class='mm-active'" : ""; ?> >
                                                <i class="metismenu-icon">
                                                </i>Danh s??ch ph??ng
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../room-management/add-room.php" <?php echo ($page == 'add-room') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon"></i>
                                                Th??m ph??ng
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php echo ($page == 'room-class-management' || $page == 'add-room-class') ? "class='mm-active'" : ""; ?>>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-note"></i>
                                        Qu???n l?? lo???i ph??ng
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'room-class-management' || $page == 'add-room-class') ? "class='mm-show'" : ""; ?>>
                                        <li>
                                            <a href="../room-class-management/room-class-management.php" <?php echo ($page == 'room-class-management') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Danh s??ch lo???i ph??ng
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../room-class-management/add-room-class.php" <?php echo ($page == 'add-room-class') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Th??m lo???i ph??ng
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php echo ($page == 'reservation-management' || $page == 'add-reservation' || $page == 'booking-management' || $page == 'paid-reservation' || $page == 'deleted-reservation') ? "class='mm-active'" : ""; ?>>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-note"></i>
                                        Qu???n l?? ????n ?????t ph??ng
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'reservation-management' || $page == 'add-reservation' || $page == 'booking-management' || $page == 'paid-reservation' || $page == 'deleted-reservation') ? "class='mm-show'" : ""; ?>>
                                        <li>
                                            <a href="../reservation/add-reservation.php"  <?php echo ($page == 'add-reservation') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Th??m ????n ?????t ph??ng
                                            </a>
                                        </li>
                                        <li >
                                            <a href="../reservation/booking-management.php" <?php echo ($page == 'booking-management') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>DS ????n ch??a duy???t
                                            </a>
                                        </li>
                                        <li >
                                            <a href="../reservation/reservation-management.php" <?php echo ($page == 'reservation-management') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>DS ????n ???? duy???t
                                            </a>
                                        </li>
                                        <li >
                                            <a href="../reservation/paid-reservation.php" <?php echo ($page == 'paid-reservation') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>DS ????n ???? thanh to??n
                                            </a>
                                        </li>
                                        <li >
                                            <a href="../reservation/deleted-reservation.php" <?php echo ($page == 'deleted-reservation') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>DS ????n ???? xo??
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php echo ($page == 'service-management' || $page == 'add-service') ? "class='mm-active'" : ""; ?>>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-note"></i>
                                        Qu???n l?? d???ch v???
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'service-management' || $page == 'add-service') ? "class='mm-show'" : ""; ?>>
                                        <li>
                                            <a href="../service-management/service-management.php" <?php echo ($page == 'service-management') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Danh s??ch d???ch v???
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../service-management/add-service.php" <?php echo ($page == 'add-service') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Th??m d???ch v???
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php echo ($page == 'employee-management' || $page == 'add-employee') ? "class='mm-active'" : ""; ?>>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-id"></i>
                                        Qu???n l?? nh??n vi??n
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'employee-management' || $page == 'add-employee') ? "class='mm-show'" : ""; ?>>
                                        <li>
                                            <a href="../employee/employee-management.php"  <?php echo ($page == 'employee-management') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Danh s??ch nh??n vi??n
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../employee/add-employee.php" <?php echo ($page == 'add-employee') ? "class='mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Th??m nh??n vi??n
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php echo ($page == 'customer-management' || $page == 'add-customer') ? "class = 'mm-active'" : ""; ?>>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-id"></i>
                                        Qu???n l?? kh??ch h??ng
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'customer-management' || $page == 'add-customer') ? "class = 'mm-show'" : ""; ?>>
                                        <li>
                                            <a href="../customer/customer-management.php" <?php echo ($page == 'customer-management') ? "class = 'mm-active'" : ""; ?>>
                                                <i class="metismenu-icon ">
                                                </i>Danh s??ch kh??ch h??ng
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../customer/add-customer.php"  <?php echo ($page == 'add-customer') ? "class = 'mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Th??m kh??ch h??ng
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li <?php echo ($page == 'transaction-management' || $page == 'deleted-transaction') ? "class = 'mm-active'" : ""; ?>>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-cash"></i>
                                        Qu???n l?? giao d???ch
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul <?php echo ($page == 'transaction-management' || $page == 'deleted-transaction') ? "class = 'mm-show'" : ""; ?>>
                                        <li>
                                            <a href="../transaction/transaction-management.php" <?php echo ($page == 'transaction-management') ? "class = 'mm-active'" : ""; ?>>
                                                <i class="metismenu-icon">
                                                </i>Danh s??ch giao d???ch
                                            </a>
                                        </li>
                                        <li>
                                            <a href="../transaction/deleted-transaction.php" <?php echo ($page == 'deleted-transaction') ? "class = 'mm-active'" : ""; ?>>
                                                <i class="metismenu-icon" >
                                                </i>DS giao d???ch ???? xo??
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>