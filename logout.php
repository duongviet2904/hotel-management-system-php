<?php
session_start();
unset($_SESSION['acc_id']);
header("Location: index.php");
?>
