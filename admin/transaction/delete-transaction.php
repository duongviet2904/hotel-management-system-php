<?php
ob_start();
session_start();
include('../../config.php');

if(isset($_SESSION['username'])) {
    
    $trans_id = $_GET['trans_id'];
    $sql ="update Transaction set status = 0 where trans_id = $trans_id";
    // var_dump($sql);
    // die();
    $query = mysqli_multi_query($conn, $sql);
    header('Location: transaction-management.php');
}else{
    header('Location: ../../login.php');
}
