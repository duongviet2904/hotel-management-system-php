<?php
ob_start();
session_start();
include('../../config.php');

// if(isset($_SESSION['acc_id'])) {
    
    $rc_id = $_GET['id'];
    //$sql = "set @rc_id = (select room_class_id from room_class where room_class_id = '$rc_id');";
    // echo $rc_id;
    $sql ="update Room_Class set status = 0 where room_class_id = '$rc_id';";
    // var_dump($sql);
    // die();
    $query = mysqli_query($conn, $sql);
    header('Location: room-class-management.php');
// }
?>