<?php
ob_start();
session_start();
include('../../config.php');

// if(isset($_SESSION['acc_id'])) {
    
    $acc_id = $_GET['acc_id'];
    $sql = "set @cus_id = (select cus_id from Customer inner join Account on Customer.acc_id = Account.acc_id where Customer.acc_id = '$acc_id');";
    $sql .="delete from Customer where cus_id = @cus_id;";
    $sql .="delete from Account where acc_id = '$acc_id';";
    // var_dump($sql);
    // die();
    $query = mysqli_multi_query($conn, $sql);
    header('Location: customer-management.php');
// }
