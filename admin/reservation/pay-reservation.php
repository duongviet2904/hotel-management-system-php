<?php
ob_start();
session_start();
include('../../config.php');

if(isset($_SESSION['username'])) {
    
    $re_id = $_GET['re_id'];

    date_default_timezone_set('Asia/Ho_Chi_Minh');

    $create_date = date('Y-m-d H:i:s');

//     $sql ="update Reservation set isPaid = 1 where re_id = $re_id;";
    $sql = "";
    // var_dump($sql);
    // die();
    // $sql .="set @acc_id = (select acc_id from Account where acc_username = '".$_SESSION['username']."')";
    $sql .="set @em_id = (select em_id from Employee where acc_id in (select acc_id from Account where acc_username = '".$_SESSION['username']."'));";
    $sql .="set @day = (select datediff(re_date_out, re_date_in) from Reservation where re_id = $re_id);";
    // $sql .="set @day = (select datediff(re_date_out, re_date_in) from Reservation where re_id = $re_id);";
    $sql .="set @amount1 = (select sum(@day * r.room_price) from Reservation re inner join Reservation_Room  rr on re.re_id = rr.re_id
            inner join Room r on rr.room_id = r.room_id where re.re_id = $re_id);";
    $sql .="set @amount2 = (select sum(@day * s.service_price) from Reservation re inner join Reservation_Service  rs on re.re_id = rs.re_id
            inner join Service s on rs.service_id = s.service_id where re.re_id = $re_id);";
    $sql .="set @child_range = (select sum(r.room_child_num) from Reservation re inner join Reservation_Room  rr on re.re_id = rr.re_id
            inner join Room r on rr.room_id = r.room_id where re.re_id = $re_id);";
    $sql .="set @adult_range = (select sum(r.room_adult_num) from Reservation re inner join Reservation_Room  rr on re.re_id = rr.re_id
            inner join Room r on rr.room_id = r.room_id where re.re_id = $re_id);";

    $sql .= "set @child_num = (select re_child_num  from Reservation where re_id =  $re_id);";
    $sql .= "set @adult_num = (select re_adult_num  from Reservation where re_id =  $re_id);";
    $sql .= "set @deposite = (select deposited from Reservation where re_id =  $re_id);";
    
    $sql .="set @over_child = (select if(@child_num > @child_range, @child_num - @child_rangge, 0));";
    $sql .="set @over_adult = (select if(@adult_num > @adult_range, @adult_num - @adult_range, 0));";

    $sql .="set @maxprice = (select max(r.room_price) from Reservation re inner join Reservation_Room  rr on re.re_id = rr.re_id
    inner join Room r on rr.room_id = r.room_id where re.re_id = $re_id);";
    $sql .="set @surcharge = @maxprice * 0.2 * @over_child * @day +  @maxprice * 0.3 * @over_adult * @day;";
    $sql .="set @amount = @amount1 + @amount2 +@surcharge;";
    $sql .="set @tax = @amount * 0.1;";
    $sql .="set @change = (select if(@deposite > @amount, @deposite - @amount, 0));";
    $sql .="set @total = (select if(@deposite > @amount, 0, @amount - @deposite + @tax));";
    // $sql .= "select * , sum( ) from Reservation re inner join Reservation_Room rr on re.re_id = rr_re_id
    //         inner join Reservation_Service rs on re.re_id = rs.re_id
    //         inner join Room r on r.room_id = rr.room_id
    //         inner join Service s on s.service_id = rs.service_id
    //         where re.re_id = $re_id";
    // $sql .="set @total = (@amount1 + @amount2);";
//     $sql .= "insert into Transaction(trans_name, trans_date, trans_amount, trans_discount,trans_surcharge, trans_tax, trans_total_amount,trans_change, trans_description, status, em_id, re_id)
//     values ('Thanh toan', '$create_date', @amount, 0, @surcharge, @tax, @total, @change, 'Thanh toán tiền phòng', 1, @em_id, $re_id);";
    var_dump($sql);
    die();
    $query = mysqli_multi_query($conn, $sql);
    header('Location: ../transaction/transaction-management.php');
}else{
    header('Location: ../../login.php');
}
