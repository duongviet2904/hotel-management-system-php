<?php include('../../config.php') ?>
<?php
ob_start();
session_start();
if (!isset($_SESSION["username"]))
    header("location: ../../login.php");
?>

<?php
if (isset($_GET['re_id'])) {
    $reid = $_GET['re_id'];
    // $reid = 26;
    // $cus_id = 52;
    $amount = 0;
    $room_total = 0; $service_total = 0;
    $tax = 0;
    $over_child = 0; $child_range = 0; $child_num = 0;
    $over_adult = 0; $adult_range = 0; $adult_num = 0;
    $change = 0;
    $surcharge = 0; $total_amount = 0;
    $day = 0;
    $sql3 = "SELECT re_id, re_date_in, re_date_out, re_child_num, re_adult_num, create_date, deposited, Reservation.status, Customer.cus_id, cus_fname, cus_lname, cus_birthday,
        cus_gender, cus_phone, cus_email, cus_address, isPaid FROM Reservation inner join Customer on Reservation.cus_id = Customer.cus_id where Reservation.re_id = '$reid';";
    //  var_dump($sql);die();
    $query3 = mysqli_query($conn, $sql3);
    $result = array();

    if (mysqli_num_rows($query3) > 0) {
        $row = mysqli_fetch_assoc($query3);
        $result = $row;
        $day = round((strtotime($result['re_date_out']) -  strtotime($result['re_date_in'])) / (60 * 60 * 24));
        $child_num = $result['re_child_num'];
        $adult_num = $result['re_adult_num'];
    }
} else {
    $reid = '';
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Admin| Reservation detail</title>
    <?php include('../common/head-link.php'); ?>
    <style>
        @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

        body {
            background-color: blue;
            font-family: 'Calibri', sans-serif !important;
        }


        .mt-100 {
            margin-top: 50px;
        }

        .mb-100 {
            margin-bottom: 50px;
        }

        .card {
            border-radius: 1px !important;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            background-color: #fff;
        }

        .card-header:first-child {
            border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
        }

        .btn-sm,
        .btn-group-sm>.btn {
            padding: .25rem .5rem;
            font-size: .765625rem;
            line-height: 1.5;
            border-radius: .2rem;
        }
    </style>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header closed-sidebar">
        <?php include('../common/header.php'); ?>
        <?php //include('../common/setting.php'); 
        ?>
        <div class="app-main">
            <?php $page = 'reservation-management';
            include('../common/menu.php'); ?>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content">
                                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                    <div class="container-fluid mt-100 mb-100">
                                        <div id="ui-view">
                                            <div>
                                                <div class="card">
                                                    <div class="card-header">

                                                        <strong>Invoice #BBB-245432</strong>
                                                        <div class="pull-right" >
                                                            <a class="btn btn-sm btn-info" href="#" data-abc="true"><i class="fa fa-print mr-1"></i> Print</a>
                                                            <a class="btn btn-sm btn-info" href="#" data-abc="true"><i class="fa fa-file-text-o mr-1"></i> Save</a>
                                                        </div>



                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row mb-4">
                                                            <div class="col-sm-4">
                                                                <h6 class="mb-3">Grand Plaza:</h6>
                                                                <div><strong>Grand Plaza Ha Noi</strong></div>
                                                                <div>Address:Số 117 Trần Duy Hưng, Cầu Giấy</div>
                                                                <div>Hà Nội, Việt Nam</div>
                                                                <div>Email: duongv@grandplaza.com</div>
                                                                <div>Phone: +1 848 389 9289</div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <h6 class="mb-3">Khách hàng:</h6>
                                                                <div><strong><?php echo $result["cus_fname"].' '.$result["cus_lname"];?></strong></div>
                                                                <div>Address: <?php echo $result["cus_address"];?></div>
                                                                <div>Date of Birth: <?php echo $result["cus_birthday"];?></div>
                                                                <div>Email:<?php echo $result["cus_email"];?></div>
                                                                <div>Phone: <?php echo $result["cus_phone"];?></div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <h6 class="mb-3">Chi tiết:</h6>
                                                                <div>Invoice<strong><?php echo $result["re_id"];?> </strong></div>
                                                                <div>Create date: <?php echo $result["create_date"];?></div>
                                                                <div>Date in: <?php echo $result["re_date_in"];?></div>
                                                                <div>Date out: <?php echo $result["re_date_out"];?></div>
                                                                <div>Number of child: <?php echo $result["re_child_num"];?></div>
                                                                <div>Number of adult: <?php echo $result["re_adult_num"];?></div>
                                                                <div>Number of day: <?php echo $day;?></div>
                                                            </div>

                                                        </div>

                                                        <div class="table-responsive-sm">
                                                            <h6 class="mb-3"><strong>Thông tin phòng đã đặt:</strong></h6>
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="center">#</th>
                                                                        <th>Mã phòng</th>
                                                                        <th>Tên phòng</th>
                                                                        <th>Mô tả</th>
                                                                        <th class="center">Trẻ em</th>
                                                                        <th class="right">Người lớn</th>
                                                                        <th class="right">Giá tiền</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    if (!function_exists('currency_format')) {
                                                                        function currency_format($number, $suffix = 'đ')
                                                                        {
                                                                            if (!empty($number)) {
                                                                                return number_format($number, 0, ',', '.') . "{$suffix}";
                                                                            }else{
                                                                                return 0;
                                                                            }
                                                                        }
                                                                    }

                                                                        $sql = "SELECT * FROM Room  r inner join Reservation_Room rr on r.room_id = rr.room_id inner join 
                                                                                Reservation re on re.re_id = rr.re_id where rr.re_id = $reid";
                                                                        $result2 = mysqli_query($conn, $sql);
                                                                        $index = 0;
                                                                        if ($result2) {
                                                                        // output data of each row
                                                                        foreach($result2 as $item) {
                                                                            $index++;
                                                                            $room_total += $item['room_price'] * $day;
                                                                            $child_range += $item['room_child_num'];
                                                                            $adult_range += $item['room_adult_num'];
                                                                            echo "<tr>";
                                                                            echo "<td>$index</td>";
                                                                            echo "<td>". $item['room_id']."</td>";
                                                                            echo "<td>". $item['room_name']."</td>";
                                                                            echo "<td>". $item['room_description']."</td>";
                                                                            echo "<td>". $item['room_child_num']."</td>";
                                                                            echo "<td>". $item['room_adult_num']."</td>";
                                                                            echo "<td>". currency_format($item['room_price'])."</td>";
                                                                            echo "</tr>";
                                                                        }
                                                                        echo '</tbody>';
                                                                        } else {
                                                                        echo "0 results </tbody>";
                                                                        }

                                                                        echo '
                                                                                    <div class="row mb-4">
                                                                        <div class="col-sm-4">
                                                                            <div><strong>Người lớn cho phép: </strong>'. $adult_range.'</div>
                                                                        </div>

                                                                        <div class="col-sm-4">
                                                                            <div><strong>Trẻ em cho phép: </strong> '.$child_range.'</div>
                                                                        </div>

                                                                        <div class="col-sm-4">
                                                                            <div><strong>Tổng tiền phòng: </strong> '.currency_format($room_total).'</div>
                                                                        </div>

                                                                    </div>';
                                                                        ?>

                                                                
                                                            </table>
                                                        </div>
                                                        <div class="table-responsive-sm">
                                                            <h6 class="mb-3"><strong>Thông tin dịch vụ đã sử dụng:</strong></h6>
                                                            <table class="table table-striped">
                                                                <thead>
                                                                    <tr>
                                                                        <th class="center">#</th>
                                                                        <th>Mã dịch vụ</th>
                                                                        <th>Tên dịch vụ</th>
                                                                        <th>Mô tả</th>
                                                                        <th class="right">Giá tiền</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    if (!function_exists('currency_format')) {
                                                                        function currency_format($number, $suffix = 'đ')
                                                                        {
                                                                            if (!empty($number)) {
                                                                                return number_format($number, 0, ',', '.') . "{$suffix}";
                                                                            }
                                                                        }
                                                                    }

                                                                        $sql = "SELECT * FROM Service  s inner join Reservation_Service rs on s.service_id = rs.service_id inner join 
                                                                                Reservation re on re.re_id = rs.re_id where rs.re_id = $reid";
                                                                        $result5 = mysqli_query($conn, $sql);
                                                                        $index2 = 0;
                                                                        if ($result5) {
                                                                        // output data of each row
                                                                        foreach($result5 as $item) {
                                                                            $index2++;
                                                                            $service_total += $item['service_price']  * $day;
                                                                            echo "<tr>";
                                                                            echo "<td>$index2</td>";
                                                                            echo "<td>". $item['service_id']."</td>";
                                                                            echo "<td>". $item['service_name']."</td>";
                                                                            echo "<td>". $item['service_description']."</td>";
                                                                            echo "<td>". currency_format($item['service_price'])."</td>";
                                                                            echo "</tr>";
                                                                        }
                                                                        echo '</tbody>';
                                                                        } else {
                                                                        echo "0 results </tbody>";
                                                                        }

                                                                        echo '
                                                                                    <div class="row mb-4">
                                                                        <div class="col-sm-4">
                                                                            <div><strong>Số dịch vụ sử dụng: </strong>'. ($index2).'</div>
                                                                        </div>

                                                                        <div class="col-sm-4">
                                                                            <div><strong>Tổng tiền dịch vụ: </strong> '.currency_format($service_total).'</div>
                                                                        </div>

                                                                    </div>';

                                                                        ?>

                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-sm-5">Nếu số lượng khách hàng vượt quá số lượng tối đa cho phép. Quý khách sẽ phải chi trả thêm phụ phí
                                                                    </br>-Đối với trẻ nhỏ( 20% / phòng / ngày)
                                                                    </br>-Đối với người lớn( 30% / phòng / ngày)
                                                            </div>
                                                            <div class="col-lg-4 col-sm-5 ml-auto">
                                                                <table class="table table-clear">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="left"><strong>Phụ phí</strong></td>
                                                                            <td class="right"><?php 
                                                                             $sql5 = "SELECT max(r.room_price) as maxprice FROM Room  r inner join Reservation_Room rr on r.room_id = rr.room_id inner join 
                                                                             Reservation re on re.re_id = rr.re_id where rr.re_id = $reid";
                                                                         //  var_dump($sql);die();
                                                                            $query5 = mysqli_query($conn, $sql5);

                                                                            if (mysqli_num_rows($query5) > 0) {
                                                                                // output data of each row
                                                                                while($row = mysqli_fetch_assoc($query5)) {
                                                                                  $maxprice = $row;
                                                                                }
                                                                              } else {
                                                                                echo "0 results";
                                                                              }
                                                                        

                                                                            if($child_num > $child_range){
                                                                                    $over_child = $child_num - $child_range;
                                                                                    $surcharge += $over_child * 0.2 * $maxprice['maxprice'] * $day;
                                                                            }

                                                                            if($adult_num > $adult_range){
                                                                                $over_adult = $adult_num - $adult_range;
                                                                                $surcharge += $over_adult * 0.3 * $maxprice['maxprice'] * $day;
                                                                            }
                                                                            
                                                                            echo currency_format($surcharge);
                                                                            ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="left"><strong>VAT (10%)</strong></td>
                                                                            <td class="right"><?php echo currency_format(($room_total + $service_total + $surcharge) * 0.1);?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="left"><strong>Tổng tiền(Chưa VAT)</strong></td>
                                                                            <td class="right"><?php 
                                                                                echo currency_format($room_total + $service_total + $surcharge);
                                                    
                                                                            ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="left"><strong>Tổng tiền</strong></td>
                                                                            <td class="right"><?php echo currency_format(($room_total + $service_total + $surcharge)* 1.1);?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="left"><strong>Tiền cọc</strong></td>
                                                                            <td class="right"><?php echo currency_format($result['deposited']);?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="left"><strong>Tổng tiền phải trả</strong></td>
                                                                            <td class="right"><?php 
                                                                                $amount = ($room_total + $service_total + $surcharge) * 1.1;
                                                                            if($amount < $result['deposited']){
                                                                                $total_amount = 0; 
                                                                            echo 0;}
                                                                            else{
                                                                                $total_amount = $amount -  $result['deposited'];
                                                                                echo currency_format($total_amount);}
                                                    
                                                                            ?></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="left"><strong>Tiền thừa</strong></td>
                                                                            <td class="right"><?php 
                                                                            if($amount < $result['deposited']){
                                                                                $change = $result['deposited'] - $amount;
                                                                                echo currency_format($change);}
                                                                            else{
                                                                                $change = 0;

                                                                                echo 0;}
                                                                            ?></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>

                                                               <?php 
                                                                if($result['isPaid'] == 0){
                                                                    echo ' <div class="pull-right">
                                                                    <a class="btn btn-sm btn-success" href="pay-reservation.php?re_id='.$reid.'" data-abc="true"><i class="fa fa-paper-plane mr-1"></i>Proceed to Payment</a>

                                                                </div>';
                                                                }
                                                               ?>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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

<?php ob_end_flush(); ?>