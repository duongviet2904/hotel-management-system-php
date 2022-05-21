<?php include('../config.php')?>

<?php session_start();?>
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
                <?php $page = 'customer-management'; include('common/menu.php'); ?>
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
                                            Thêm khách hàng
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
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $sql = "SELECT * FROM Customer inner join Account on Customer.acc_id = Account.acc_id";
                                                $result = mysqli_query($conn, $sql);
                                                $index = 1;
                                                if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while($row = mysqli_fetch_assoc($result)) {
                                                    echo ' <tr>
                                                        <th scope="row">'.$index.'</th>
                                                        <td>'.$row["cus_fname"].'</td>
                                                        <td>'.$row["cus_lname"].'</td>
                                                        <td>'.$row["cus_birthday"].'</td>
                                                        <td>'.$row["cus_gender"].'</td>
                                                        <td>'.$row["cus_phone"].'</td>
                                                        <td>'.$row["cus_email"].'</td>
                                                        <td>'.$row["cus_address"].'</td>
                                                        <td>'.$row["acc_username"].'</td>
                                                        <td>
                                                        <button type="button" class="btn btn-dark"><a href="edit-customer.php?id='.$row["cus_id"].'" style="text-decoration:none; color: white">Edit</a></button>
                                                        <button type="button" class="btn btn-dark"><a href="delete-customer.php?acc_id='.$row["acc_id"].'" style="text-decoration:none; color: white">Delete</a></button>
                                                        </td>
                                                    </tr>';
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
<script type="text/javascript" src="./assets/scripts/main.js"></script>
<script>

   function myFunction(){
    window.location.href = "http://localhost:8080/HAUI/GrandPlaza/admin/add-customer.php";
   } ;
</script>
</body>
</html>
