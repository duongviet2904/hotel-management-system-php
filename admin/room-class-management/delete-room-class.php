<?php
ob_start();
session_start();
include('../../config.php');
    $rc_id = $_GET['id'];
    $sql ="delete from room_class where room_class_id = '$rc_id';";
    $query = mysqli_query($conn, $sql);
    header('Location: room-class-management.php');
?>