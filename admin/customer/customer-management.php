<?php include('../../config.php')?>

<?php session_start();?>
<!doctype html>
<html lang="en">

<head>
    <title>Admin| Customer List</title>
    <?php include('../common/head-link.php'); ?>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <?php //include('../common/setting.php'); ?>
        <div class="app-main">
                <?php $page = 'customer-management'; include('../common/menu.php'); ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                                        </i>
                                    </div>
                                    <div>Danh sách Khách Hàng
                                        <div class="page-title-subheading">Quản lí khách hàng
                                        </div>
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark" onclick="myFunction()">
                                        <span class="btn-icon-wrapper pr-2 opacity-7">
                                                <i class="fa fa-business-time fa-w-20"></i>
                                            </span>
                                            <a href="add-customer.php" style="text-decoration: none; color: white;">Thêm khách hàng</a>
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
                                                <th>Họ đệm</th>
                                                <th>Tên</th>
                                                <th>Ngày sinh</th>
                                                <th>Giới tính</th>
                                                <th>SDT</th>
                                                <th>Email</th>
                                                <th>Địa chỉ</th>
                                                <th>Tên đăng nhập</th>
                                                <th style="text-align: center ;">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $sql = "SELECT * FROM Customer inner join Account on Customer.acc_id = Account.acc_id";
                                                $result = mysqli_query($conn, $sql);
                                                $index = 0;
                                                if ($result) {
                                                // output data of each row
                                                foreach($result as $item) {
                                                    $index++;
                                                    echo "<tr>";
                                                    echo "<td>$index</td>";
                                                    echo "<td>". $item['cus_fname']."</td>";
                                                    echo "<td>". $item['cus_lname']."</td>";
                                                    echo "<td>". $item['cus_birthday']."</td>";
                                                    echo "<td>". $item['cus_gender']."</td>";
                                                    echo "<td>". $item['cus_phone']."</td>";
                                                    echo "<td>". $item['cus_email']."</td>";
                                                    echo "<td>". $item['cus_address']."</td>";
                                                    echo "<td>". $item['acc_username']."</td>";
                                                    //echo "<td>"."<input id='btnSua' type='button' value='Sửa' '>"."</td>";
                                                    
                                                    echo " <td style='text-align: center;'> <a href='edit-customer.phpid=?".$item['service_id']."'><input id='btnSua' class='btn btn-success' type='button' value='Sửa' '>
                                                    <a href='delete-customer.php?id=".$item['service_id']."'><input id='btnXoa' class='btn btn-warning' type='button' value='Xoá' '>";
                                                    echo "</tr>";
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
