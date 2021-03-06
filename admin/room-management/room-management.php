<!doctype html>
<html lang="en">

<head>
    <title>Admin| Room management</title>
    <?php include('../common/head-link.php'); ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <?php //include('../common/setting.php'); 
        ?>
        <div class="app-main">
            <?php $page = 'room-management';
            include('../common/menu.php'); ?>
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
                                <div class="card-body">
                                    <h5 class="card-title">DANH SÁCH PHÒNG</h5>
                                    <table class="mb-0 table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tên phòng</th>
                                                <th>Mô tả phòng</th>
                                                <th>Số lượng trẻ em</th>
                                                <th>Số lượng người lớn</th>
                                                <th>Giá phòng</th>
                                                <th>Hình ảnh</th>
                                                <th>Trạng thái phòng</th>
                                                <th>Loại phòng</th>
                                                <th style="text-align: center ;">Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                                        include('../../config.php');
                                        // Định dạng giá tiền
                                        if (!function_exists('currency_format')) {
                                            function currency_format($number, $suffix = 'đ') {
                                                if (!empty($number)) {
                                                    return number_format($number, 0, ',', '.') . "{$suffix}";
                                                }
                                            }
                                        }
                                        $sql = "SELECT room_id, room_name, room_description, room_child_num, room_adult_num, room_price, Room.room_class_image, Room.status, 
                                            room_class_name FROM Room INNER JOIN Room_Class ON Room.room_class_id = Room_Class.room_class_id";
                                        $query = mysqli_query($conn, $sql);
                                        $i = 0;
                                        if ($query) {
                                            foreach ($query as $item) {
                                                if ($item['status'] == 1) {
                                                    $i++;
                                                    echo "<tr>";
                                                    echo "<td>$i</td>";
                                                    echo "<td>" . $item['room_name'] . "</td>";
                                                    echo "<td>" . $item['room_description'] . "</td>";
                                                    echo "<td>" . $item['room_child_num'] . "</td>";
                                                    echo "<td>" . $item['room_adult_num'] . "</td>";
                                                    echo "<td style='text-align:right ;'>" . currency_format($item['room_price']) . "</td>";
                                                    echo "<td>" . $item['room_class_image'] . "</td>";
                                                    if ($item["status"] == 1) {
                                                        echo "<td>Đang hoạt động</td>";
                                                    }
                                                    echo "<td>" . $item['room_class_name'] . "</td>";
                                                    echo " <td style='text-align: center;'> <a href='edit-room.php?id=" . $item['room_id'] . "'><input id='btnSua' type='button' value='Sửa' class='btn btn-success'>";
                                                    echo " <a href='delete-room.php?id=" . $item['room_id'] . "'><input id='btnXoa' type='button' value='Xoá' class='btn btn-warning'></td>";
                                                    echo "</tr>";
                                                }
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
        <script type="text/javascript" src="../assets/scripts/main.js"></script>
</body>

</html>