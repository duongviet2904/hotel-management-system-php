<?php ob_start()?>
<?php 
session_start();

if (!isset($_SESSION['acc_id'])) {
    header('Location: login.php');
}

include('../config.php');
if(isset($_GET['room_class_id'])){
    $room_class_id = $_GET['room_class_id'];
    $sql = "SELECT * FROM room_class WHERE room_class_id = $room_class_id";
    $query = mysqli_query($conn,$sql);

    $result = array();

    if(mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    else{
        $room_class_id='';
    }
}   
?>
