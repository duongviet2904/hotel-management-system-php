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
                <?php $page = 'service-management'; include('common/menu.php'); ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                                        </i>
                                    </div>
                                    <div>Danh sách dịch vụ
                                        <div class="page-title-subheading">Quản lý dịch vụ
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip"  data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            
                                            <a href="add-service.php" style="text-decoration: none; color: white">Thêm dịch vụ</a>
                                    </button>
                                </div>    
                            </div>
                        </div>            
                    <div class="row">
                            <div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Danh sách dịch vụ</h5>
                                        <table class="mb-0 table">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Service Name</th>
                                                <th>Service Description</th>
                                                <th>Service Price</th>
                                                <th>Service Image</th>
                                                <th>Status</th>
                                            </tr>
                                            </thead>
                                            <?php
                                            include('../config.php');
                                            $sql = "SELECT * FROM service";
                                            $query = mysqli_query($conn, $sql);
                                            $i = 0;
                                            if($query){
                                                foreach($query as $item){
                                                    $i++;
                                                    echo "<tr>";
                                                    echo "<td>$i</td>";
                                                    echo "<td>". $item['service_name']."</td>";
                                                    echo "<td>". $item['room_description']."</td>";
                                                    echo "<td>". $item['service_price']."</td>";
                                                    echo "<td>". $item['service_image']."</td>";
                                                    echo "<td>". $item['status']."</td>";
                                                    //echo "<td>"."<input id='btnSua' type='button' value='Sửa' '>"."</td>";
                                                    
                                                    echo " <td style='text-align: center;'> <a href='edit-service.php?id=".$item['service_id']."'><input id='btnSua' type='button' value='Sửa' '>";
                                                    echo " <td style='text-align: center;'> <a href='delete-service.php?id=".$item['service_id']."'><input id='btnXoa' type='button' value='Xoá' '>";
                                                    echo "</tr>";
                                                    
                                                }
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                    <!-- <div class="row">
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
                    </div> -->
                </div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
