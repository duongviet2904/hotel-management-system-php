<?php
ob_start();
session_start();
include('../../config.php');
    $room_id = $_GET['id'];
    $sql ="delete from room where room_id = '$room_id';";
    $query = mysqli_query($conn, $sql);
    header('Location: room-management.php');
?>