<?php
ob_start();
session_start();
include('../../config.php');

if(isset($_SESSION['username'])) {
    
    $re_id = $_GET['re_id'];

    $create_date = date('Y-m-d h:i:s');

    $sql ="update Reservation set isPaid = 1 where re_id = $re_id;";
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
    // $sql .= "select * , sum( ) from Reservation re inner join Reservation_Room rr on re.re_id = rr_re_id
    //         inner join Reservation_Service rs on re.re_id = rs.re_id
    //         inner join Room r on r.room_id = rr.room_id
    //         inner join Service s on s.service_id = rs.service_id
    //         where re.re_id = $re_id";
    $sql .="set @total = (@amount1 + @amount2);";
    $sql .= "insert into Transaction(trans_name, trans_date, trans_amount, trans_discount, trans_tax, trans_total_amount, trans_description, status, em_id, re_id)
    values ('Thanh toan', '$create_date', @total, 0, @total * 10 / 100, @total + @total * 10 / 100, 'Thanh toán tiền phòng', 1, @em_id, $re_id);";
    // var_dump($sql);
    // die();
    $query = mysqli_multi_query($conn, $sql);
    header('Location: reservation-management.php');
}else{
    header('Location: ../../login.php');
}
