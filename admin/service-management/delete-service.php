<?php
ob_start();
session_start();
include('../../config.php');

// if(isset($_SESSION['acc_id'])) {
    
    $ser_id = $_GET['id'];
    $sql ="update Service set status = 0  where service_id = '$ser_id';";
    // var_dump($sql);
    // die();
    $query = mysqli_query($conn, $sql);
    header('Location: service-management.php');
// }