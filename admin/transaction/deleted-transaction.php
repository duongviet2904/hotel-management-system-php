<?php include('../../config.php') ?>

<?php 
ob_start();
session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Admin| Payment List</title>
    <?php include('../common/head-link.php'); ?>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <?php //include('../common/setting.php'); ?>
        <div class="app-main">
            <?php $page = 'deleted-transaction';
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
                                <div>Danh sách giao dịch
                                    <div class="page-title-subheading">Quản lí giao dịch
                                    </div>
                                </div>
                            </div>
                            <div class="page-title-actions">
                                <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                                    <span class="btn-icon-wrapper pr-2 opacity-7">
                                        <i class="fa fa-business-time fa-w-20"></i>
                                    </span>
                                    <a href="add-reservation.php" style="text-decoration: none; color: white;">Thêm giao dịch</a>
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
                                                <th>Mã giao dịch</th>
                                                <th>Tên</th>
                                                <th>Ngày thanh toán</th>
                                                <th>Tiền phòng</th>
                                                <th>Tiền dịch vụ</th>
                                                <th>Giảm giá</th>
                                                <th>Thuế</th>
                                                <th>Tiền cọc</th>
                                                <th>Phụ phí</th>
                                                <th>Ghi chú</th>
                                                <th>Tổng tiền</th>
                                                <th>Tiền thừa</th>
                                                <th>Nhân viên</th>
                                                <th>Đơn đặt</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php


                                            $sql = "select trans_id, trans_name, trans_date, trans_room_amount, trans_service_amount, trans_discount, trans_deposite, trans_surcharge, 
                                                    trans_tax, trans_total_amount, trans_description, trans.status, trans_change,
                                                    em.em_id, em_fname, em_lname, acc.acc_id, acc_username, re.re_id, re_date_in, re_date_out, deposited, isPaid, cus_id 
                                                    from Transaction trans inner join Employee em on trans.em_id = em.em_id 
                                                    inner join Account acc on em.acc_id = acc.acc_id 
                                                    inner join Reservation re on re.re_id = trans.re_id where trans.status = 0;
                                            ";
                                            //  var_dump($sql);die();
                                            $result = mysqli_query($conn, $sql);
                                            $index = 1;

                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo ' <tr>
                                                        <th scope="row" >' . $index . '</th>
                                                        <td >' . $row["trans_id"] . '</td>
                                                        <td >' . $row["trans_name"] . '</td>
                                                        <td >' . $row["trans_date"] . '</td>
                                                        <td >' .number_format($row["trans_room_amount"] ). '</td>
                                                        <td >' .number_format($row["trans_service_amount"] ). '</td>
                                                        <td >' . number_format($row["trans_discount"]) . ' ' . $row["cus_lname"] . '</td>
                                                        <td >' . number_format($row["trans_tax"]) . '</td>
                                                        <td >' . number_format($row["deposited"] ). '</td>
                                                        <td >' . number_format($row["trans_surcharge"] ). '</td>
                                                        <td >' . $row["trans_description"] . '</td>
                                                        <td >' . number_format($row["trans_total_amount"]) . '</td>
                                                        <td >' . number_format($row["trans_change"]) . '</td>
                                                        <td >' . $row["em_id"] . '</td>
                                                        <td >' . $row["re_id"] . '</td>
                                                        <td>';
                                                        if($row['status'] == 0){
                                                            echo 'Đã xoá </td></tr>';
                                                        }else{
                                                            echo '<button type="button" class="btn btn-success col-12"><a href="../reservation/reservation-detail.php?re_id='.$row["re_id"].'" style="text-decoration:none; color: white">Detail</a></button>
                                                            </td></tr>';
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