<?php
ob_start();
session_start();
include('../../config.php');

if(isset($_SESSION['username'])) {
    
    $re_id = $_GET['re_id'];
    $deposit = $_POST['deposit'];
    $sql ="update Reservation set deposited = $deposit where re_id = $re_id";
    // var_dump($sql);
    // die();
    $query = mysqli_multi_query($conn, $sql);
    header('Location: booking-management.php');
}else{
    header('Location: ../../login.php');
}
