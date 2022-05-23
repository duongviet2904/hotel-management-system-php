<?php include('../../config.php') ?>

<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Regular Tables - Tables are the backbone of almost all web applications.</title>
    <?php include('../common/head-link.php'); ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <?php include('../common/setting.php'); ?>
        <div class="app-main">
            <?php $page = 'customer-management';
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
                                <div>Danh sách Đơn đặt phòng
                                    <div class="page-title-subheading">Quản lí đơn đặt phòng
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-business-time fa-w-20"></i>
                                    </span>
                                    <a href="add-reservation.php" style="text-decoration: none; color: white;">Thêm Đơn đặt phòng</a>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <table class="mb-0 table">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Mã đơn</th>
                                                <th>Ngày nhận phòng</th>
                                                <th>Ngày trả phòng</th>
                                                <th>Ngày đặt</th>
                                                <th>Tên</th>
                                                <th>Ngày sinh</th>
                                                <th>Giới tính</th>
                                                <th>SDT</th>
                                                <th>Email</th>
                                                <th>Địa chỉ</th>
                                                <!-- <th>CMND/CCCD</th> -->
                                                <!-- <th>Trang thái</th> -->
                                                <th>Mã phòng</th>
                                                <th>Tên phòng</th>
                                                <th>Dịch vụ</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php


                                            $sql = "SELECT * FROM Reservation inner join Customer on Reservation.cus_id = Customer.cus_id";
                                            $result = mysqli_query($conn, $sql);
                                            $index = 1;

                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {

                                                    $sql1 = "SELECT * FROM Reservation_Room rr inner join Reservation re on rr.re_id = re.re_id 
                                                    inner join Room r on rr.room_id = r.room_id where re.re_id = " . $row['re_id'] . "
                                                    ";
                                                    $result1 = mysqli_query($conn, $sql1);
                                                    $num = mysqli_num_rows($result1);
                                                    echo ' <tr>
                                                        <th scope="row" rowspan="' . $num . '">' . $index . '</th>
                                                        <td rowspan="' . $num . '">' . $row["re_id"] . '</td>
                                                        <td rowspan="' . $num . '">' . $row["re_date_in"] . '</td>
                                                        <td rowspan="' . $num . '">' . $row["re_date_out"] . '</td>
                                                        <td rowspan="' . $num . '">' . $row["create_date"] . '</td>
                                                        <td rowspan="' . $num . '">' . $row["cus_fname"] . ' ' . $row["cus_lname"] . '</td>
                                                        <td rowspan="' . $num . '">' . $row["cus_birthday"] . '</td>
                                                        <td rowspan="' . $num . '">' . $row["cus_gender"] . '</td>
                                                        <td rowspan="' . $num . '">' . $row["cus_phone"] . '</td>
                                                        <td rowspan="' . $num . '">' . $row["cus_email"] . '</td>
                                                        <td rowspan="' . $num . '">' . $row["cus_address"] . '</td>';
                                                    $check = 0;
                                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                                        if ($check == 0) {
                                                            echo ' 
                                                            <td>' . $row1["room_id"] . '</td>
                                                            <td>' . $row1["room_name"] . '</td>
                                                            <td rowspan="' . $num . '">
                                                            ';
                                                            $sql2 = "SELECT * FROM Reservation_Service rs inner join Reservation re on rs.re_id = re.re_id 
                                                                inner join Service s on rs.service_id = s.service_id where re.re_id = " . $row['re_id'] . "
                                                                ";
                                                            $result2 = mysqli_query($conn, $sql2);
                                                                while ($row2 = mysqli_fetch_assoc($result2)) {
                                                                    echo $row2["service_name"]. '</br>';
                                                            };
                                                            echo '
                                                            </td>
                                                            <td rowspan="' . $num . '">
                                                                <button type="button" class="btn btn-success"><a href="edit-customer.php?id=' . $row["cus_id"] . '" style="text-decoration:none; color: white">Check in</a></button></br>
                                                                <button type="button" class="btn btn-info"><a href="edit-customer.php?id=' . $row["cus_id"] . '" style="text-decoration:none; color: white">Deposit</a></button></br>
                                                                <button type="button" class="btn btn-primary"><a href="edit-customer.php?id=' . $row["cus_id"] . '" style="text-decoration:none; color: white">Pay</a></button></br>
                                                                <button type="button" class="btn btn-warning"><a href="edit-customer.php?id=' . $row["cus_id"] . '" style="text-decoration:none; color: white">Edit</a></button></br>
                                                                <button type="button" class="btn btn-danger"><a href="delete-customer.php?acc_id=' . $row["acc_id"] . '" style="text-decoration:none; color: white">Delete</a></button>
                                                                </td>
                                                            </tr>';

                                                        } else {
                                                            echo ' <tr>
                                                            <td>' . $row1["room_id"] . '</td>
                                                            <td>' . $row1["room_name"] . '</td>
                                                        </tr>';
                                                        }
                                                        $check++;
                                                    }
                                                    $index++;
                                                }
                                            } else {
                                                echo "0 results";
                                            }

                                            mysqli_close($conn);
                                            ?>

                                        </tbody>
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