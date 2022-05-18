<!doctype html>
<html lang="en">

<head>
    <title>Regular Tables - Tables are the backbone of almost all web applications.</title>
    <?php include('common/head-link.php'); ?>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php include('common/header.php'); ?>
        <?php include('common/setting.php'); ?>
        <div class="app-main">
                <?php $page = 'room-management'; include('common/menu.php'); ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                                        </i>
                                    </div>
                                    <div>Danh sách phòng
                                        <div class="page-title-subheading">Quản lí phòng
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            Thêm phòng
                                    </button>
                                </div>    
                            </div>
                        </div>            
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Simple table</h5>
                                        <table class="mb-0 table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Username</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                                <td>@mdo</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">2</th>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                                <td>@fat</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">3</th>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                                <td>@twitter</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Room Status</h5>
                                        <div class="row">
                                            <div class="col-sm">1</div>
                                            <div class="col-sm">1</div>
                                            <div class="col-sm">1</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">1</div>
                                            <div class="col-sm">1</div>
                                            <div class="col-sm">1</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                </div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
