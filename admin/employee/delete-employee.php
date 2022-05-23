<?php
ob_start();
session_start();
include('../../config.php');

// if(isset($_SESSION['acc_id'])) {
    
    $acc_id = $_GET['acc_id'];
    $sql = "set @em_id = (select em_id from Employee inner join Account on Employee.acc_id = Account.acc_id where Employee.acc_id = '$acc_id');";
    $sql .="delete from Employee where em_id = @em_id;";
    $sql .="delete from Account where acc_id = '$acc_id';";
    // var_dump($sql);
    // die();
    $query = mysqli_multi_query($conn, $sql);
    header('Location: employee-management.php');
// }
