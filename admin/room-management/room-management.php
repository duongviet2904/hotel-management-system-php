<!doctype html>
<html lang="en">

<head>
    <title>Regular Tables - Tables are the backbone of almost all web applications.</title>
    <?php include('../common/head-link.php'); ?>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <?php include('../common/header.php'); ?>
        <?php include('../common/setting.php'); ?>
        <div class="app-main">
                <?php $page = 'room-management'; include('../common/menu.php'); ?>
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
                                            <a href="add-room.php" style="text-decoration: none; color: white">Thêm phòng</a>
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
                                                <th>Tên phòng</th>
                                                <th>Mô tả phòng</th>
                                                <th>Giá phòng</th>
                                                <th>Hình ảnh</th>
                                                <th>Trạng thái phòng</th>
                                                <th>Loại phòng</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <?php
                                            include('../../config.php');
                                            $sql = "SELECT * FROM Room INNER JOIN Room_Class ON Room.room_class_id = Room_Class.room_class_id";
                                            $query = mysqli_query($conn, $sql);
                                            $i = 0;
                                            if($query){
                                                foreach($query as $item){
                                                    $i++;
                                                    echo "<tr>";
                                                    echo "<td>$i</td>";
                                                    echo "<td>".$item['room_name']."</td>";
                                                    echo "<td>".$item['room_description']."</td>";
                                                    echo "<td>".$item['room_price']."</td>";
                                                    echo "<td>".$item['room_class_image']."</td>";
                                                    echo "<td>".$item['status']."</td>";
                                                    echo "<td>".$item['room_class_name']."</td>";
                                                    echo " <td style='text-align: center;'> <a href='edit-room.php?id=".$item['room_id']."'><input id='btnSua' type='button' value='Sửa' '>";
                                                    echo " <a href='delete-room.php?id=".$item['room_id']."'><input id='btnXoa' type='button' value='Xoá' '></td>";
                                                    echo "</tr>";
                                                    
                                                }
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            
                    </div>
                </div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
